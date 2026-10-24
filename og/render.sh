#!/bin/sh
# Renders the share images in images/og/ and the app icons from the HTML templates in og/.
# Usage: sh og/render.sh   (needs Google Chrome; fonts load from Google Fonts)
set -e
cd "$(dirname "$0")/.."
CHROME="${CHROME:-/Applications/Google Chrome.app/Contents/MacOS/Google Chrome}"
mkdir -p images/og

shot() { # out width height url
  "$CHROME" --headless=new --disable-gpu --hide-scrollbars --force-device-scale-factor=1 \
    --virtual-time-budget=4000 --window-size="$2,$3" --screenshot="$1" "$4" 2>/dev/null
}

enc() { python3 -c 'import sys, urllib.parse; print(urllib.parse.quote(sys.argv[1]))' "$1"; }

# name|eyebrow|title (*word* = gradient)|subtitle|tags
while IFS='|' read -r name eyebrow title sub tags; do
  [ -z "$name" ] && continue
  shot "images/og/$name.png" 1200 630 "file://$PWD/og/card.html?eyebrow=$(enc "$eyebrow")&title=$(enc "$title")&sub=$(enc "$sub")&tags=$(enc "$tags")"
  echo "images/og/$name.png"
done <<'LIST'
home|CUSTOM SOFTWARE · JAKARTA|The software team your operations *run on.*|Web, mobile, IoT and AI systems — designed, built, deployed and monitored by one team.|Web,Mobile,IoT,AI,DevOps
services-company-profile|SERVICES · COMPANY PROFILE|Company websites that *build trust.*|Fast, SEO-ready Next.js sites with a CMS your team can run.|Next.js,CMS,SEO,CDN
services-crm|SERVICES · CRM & ERP|CRM & ERP that *fit your process.*|Kanban pipelines, WhatsApp API, real-time dashboards and RBAC.|Kanban,WhatsApp,RBAC,SSO
services-hris|SERVICES · HRIS|HR systems built around *your policies.*|Attendance, leave, payroll and approvals in one system.|Attendance,Payroll,Approvals
services-pos|SERVICES · POS|Cashier, stock and branches in *one system.*|Point of sale with real-time inventory and multi-store reporting.|Cashier,Inventory,QRIS
services-wms|SERVICES · WMS|Warehouse stock, *in real time.*|Bin locations, inbound, picking and stock opname across warehouses.|Stock,Barcode,Multi-warehouse
services-web-apps|SERVICES · WEB APPS|Web applications, *pixel-perfect.*|React, Next.js and Laravel — from Figma to production with Docker and Nginx.|React,Next.js,Laravel
services-mobile|SERVICES · MOBILE|Mobile apps for *iOS & Android.*|React Native codebases with PWA and BLE hardware integration.|React Native,PWA,BLE
services-iot|SERVICES · IOT|Every sensor, *live on screen.*|Real-time dashboards over MQTT and WebSocket, tenant-based data.|MQTT,WebSocket,Multi-tenant
services-ai-api|SERVICES · AI & API|AI & APIs, *wired in.*|AI services, payment gateways, WhatsApp and GraphQL integrations.|OpenAI,MidTrans,WhatsApp
services-devops|SERVICES · DEVOPS|Infrastructure that *stays up.*|Docker, Nginx, Cloudflare, uptime monitoring and Fail2ban.|Docker,Nginx,Cloudflare
LIST

shot images/og/icon-512.png 512 512 "file://$PWD/og/icon.html"
sips -z 180 180 images/og/icon-512.png --out apple-touch-icon.png >/dev/null
sips -z 192 192 images/og/icon-512.png --out images/og/icon-192.png >/dev/null
echo "icons done"
