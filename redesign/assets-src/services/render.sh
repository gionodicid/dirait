#!/bin/sh
# Renders every visual in this folder to images/services/<name>.webp (1280x800 at 2x, downscaled to 1600px wide).
# Usage: sh redesign/assets-src/services/render.sh [name ...]
set -e
cd "$(dirname "$0")"
CHROME="${CHROME:-/Applications/Google Chrome.app/Contents/MacOS/Google Chrome}"
OUT=../../../images/services
mkdir -p "$OUT"
names="$*"
[ -z "$names" ] && names=$(ls *.html | sed 's/\.html$//')
for n in $names; do
  "$CHROME" --headless=new --disable-gpu --hide-scrollbars --force-device-scale-factor=2 \
    --virtual-time-budget=4000 --window-size=1280,800 --screenshot="$OUT/$n.png" "file://$PWD/$n.html" 2>/dev/null
  sips -Z 1600 "$OUT/$n.png" >/dev/null
  cwebp -quiet -q 86 "$OUT/$n.png" -o "$OUT/$n.webp" && rm "$OUT/$n.png"
  echo "images/services/$n.webp"
done
