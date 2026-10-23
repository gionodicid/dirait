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
services-company-profile|LAYANAN · COMPANY PROFILE|Website company profile yang *bekerja.*|Cepat, SEO-ready dan mudah dikelola lewat CMS.|CMS,SEO,SSL,CDN
services-crm|LAYANAN · CRM|Sistem CRM *kustom* untuk tim sales.|Pipeline Kanban, WhatsApp API, dashboard real-time dan RBAC.|Kanban,WhatsApp,RBAC
services-hris|LAYANAN · HRIS|HRIS *kustom* untuk tim Anda.|Absensi, cuti, payroll dan approval dalam satu sistem.|Absensi,Payroll,Approval
services-pos|LAYANAN · POS|Sistem POS *kustom* untuk bisnis Anda.|Kasir, stok dan laporan penjualan real-time di semua outlet.|Kasir,Stok,Laporan
services-wms|LAYANAN · WMS|Gudang yang *terkendali.*|Warehouse management system dengan stok real-time dan scan barcode.|Stok,Barcode,Multi-gudang
services-iot|LAYANAN · PLATFORM IOT|Platform IoT *real-time.*|Dashboard perangkat via MQTT dan WebSocket, multi-tenant.|MQTT,WebSocket,Dashboard
services-web-apps|SERVICES · 01|Web applications, *pixel-perfect.*|React, Next.js and Laravel — from Figma to production with Docker and Nginx.|React,Next.js,Laravel
services-mobile|SERVICES · 02|Mobile apps for *iOS & Android.*|React Native codebases with PWA and BLE hardware integration.|React Native,PWA,BLE
services-iot-en|SERVICES · 03|IoT platforms, *live.*|Real-time dashboards over MQTT and WebSocket, tenant-based data.|MQTT,WebSocket,Multi-tenant
services-ai-api|SERVICES · 04|AI & API, *wired in.*|AI services, payment gateways, WhatsApp and GraphQL integrations.|OpenAI,MidTrans,WhatsApp
services-crm-erp|SERVICES · 05|CRM & ERP that *fit your process.*|Multi-tenant, RBAC, Kanban workflows, SSO and 2FA.|RBAC,SSO,2FA
services-devops|SERVICES · 06|DevOps that *stays up.*|Docker, Nginx, Cloudflare, uptime monitoring and Fail2ban.|Docker,Nginx,Cloudflare
LIST

shot images/og/icon-512.png 512 512 "file://$PWD/og/icon.html"
sips -z 180 180 images/og/icon-512.png --out apple-touch-icon.png >/dev/null
sips -z 192 192 images/og/icon-512.png --out images/og/icon-192.png >/dev/null
echo "icons done"
