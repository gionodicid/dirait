<?php

$page = [
    'layout' => 'service',
    'lang' => 'id',
    'title' => 'Platform IoT Kustom — DIRAIT',
    'description' => 'Dashboard IoT yang mengubah data sensor menjadi keputusan operasional. Integrasi MQTT, WebSocket, multi-tenant, dan widget kustom untuk monitoring real-time.',
    'canonical' => 'https://dirait.com/services/iot',
    'hero' => [
        'eyebrow' => 'LAYANAN · IOT',
        'title' => 'Data sensor menjadi *keputusan* operasional.',
        'lead' => 'Platform monitoring real-time dengan MQTT, WebSocket, dan arsitektur multi-tenant — menghubungkan hardware dan software dalam satu ekosistem yang andal.',
        'image' => 'id-iot',
        'image_alt' => 'Dashboard IoT dengan peta lokasi perangkat, grafik suhu dan kelembaban real-time, serta notifikasi alert threshold.',
    ],
    'features' => [
        'eyebrow' => 'FITUR',
        'title' => 'Fitur unggulan platform IoT.',
        'lead' => 'Dashboard, integrasi protokol, dan sistem alert untuk monitoring dan kontrol perangkat Anda.',
        'items' => [
            ['icon' => 'activity', 'title' => 'Dashboard Real-Time', 'text' => 'Grafik dan widget data sensor secara langsung — suhu, kelembaban, tekanan, dan metrik lain dalam hitungan detik.'],
            ['icon' => 'router', 'title' => 'Integrasi MQTT', 'text' => 'Broker Mosquitto untuk komunikasi device-to-cloud yang ringan, dengan publish/subscribe dan QoS bertingkat.'],
            ['icon' => 'zap', 'title' => 'WebSocket Events', 'text' => 'Data sensor dan notifikasi dikirim real-time ke browser lewat Laravel Echo Server, tanpa polling.'],
            ['icon' => 'building-2', 'title' => 'Multi-Tenant', 'text' => 'Satu instance melayani banyak klien dengan isolasi data penuh; tiap tenant punya device, user, dan konfigurasi sendiri.'],
            ['icon' => 'bell-ring', 'title' => 'Alert & Monitoring', 'text' => 'Notifikasi berbasis threshold via Telegram, email, atau WebSocket saat nilai sensor melewati batas.'],
            ['icon' => 'layout-dashboard', 'title' => 'Widget Kustom', 'text' => 'Widget drag-and-resize — chart, gauge, indikator, dan tabel — yang bisa disusun ulang sesuai preferensi.'],
        ],
    ],
    'work' => [
        'eyebrow' => 'STUDI KASUS',
        'title' => 'Proyek IoT yang telah kami selesaikan.',
        'items' => [
            ['tag' => 'IoT · Dashboard', 'title' => 'IoT Data Observer Dashboard', 'text' => 'Dashboard IoT dengan widget drag-and-resize, MQTT untuk data sensor, dan WebSocket untuk update real-time. Dilengkapi RBAC dan 2FA, dikerjakan bersama hardware engineer untuk integrasi sensor.', 'stack' => ['React', 'PostgreSQL', 'MQTT', 'WebSocket'], 'client' => 'Proyek IoT', 'location' => 'Kolaborasi dengan tim hardware'],
            ['tag' => 'Monitoring · Alert', 'title' => 'Uptime Monitoring & Alert System', 'text' => 'Pengecekan ketersediaan layanan dan perangkat terjadwal via cron, dengan notifikasi langsung ke Telegram saat terjadi downtime atau anomali.', 'stack' => ['Shell Scripting', 'Playwright', 'Telegram Bot API', 'Cron'], 'client' => 'Sistem monitoring internal', 'location' => 'Production'],
        ],
    ],
    'process' => [
        'eyebrow' => 'PROSES',
        'title' => 'Tiga langkah menuju platform IoT.',
        'steps' => [
            ['title' => 'Discovery & arsitektur', 'text' => 'Kami pelajari sensor dan perangkat Anda, lalu merancang arsitektur dari protokol komunikasi hingga struktur database tenant.'],
            ['title' => 'Integrasi & dashboard', 'text' => 'Hardware dihubungkan lewat MQTT, dashboard real-time dibangun, dan alert dikonfigurasi sesuai threshold operasional.'],
            ['title' => 'Deploy & monitoring', 'text' => 'Deploy ke production, monitoring uptime, dokumentasi lengkap, dan pelatihan tim operasional Anda.'],
        ],
    ],
    'stack' => ['React', 'Laravel', 'PostgreSQL', 'MQTT', 'Mosquitto', 'WebSocket', 'Laravel Echo', 'Telegram Bot API', 'Playwright'],
    'faq' => [
        ['q' => 'Protokol apa yang digunakan untuk menghubungkan perangkat?', 'a' => 'Kami menggunakan MQTT dengan broker Mosquitto untuk device-to-cloud, dan WebSocket untuk mengirim data real-time ke browser dan aplikasi client.'],
        ['q' => 'Apakah satu platform bisa melayani banyak klien?', 'a' => 'Bisa. Arsitektur multi-tenant memberi setiap klien device, user, dan konfigurasi sendiri dengan isolasi data penuh.'],
        ['q' => 'Berapa lama pengerjaan platform IoT?', 'a' => 'Timeline proyek IoT bergantung pada kompleksitas hardware dan integrasi pihak ketiga. Kami berikan timeline detail setelah tahap discovery.'],
        ['q' => 'Bagaimana keamanan dan akses dashboard diatur?', 'a' => 'Kami menerapkan role-based access control (RBAC) dan autentikasi dua faktor (2FA), serta monitoring uptime dengan alert Telegram untuk lingkungan production.'],
    ],
    'cta' => ['title' => 'Siap membangun platform IoT?', 'text' => 'Ceritakan hardware dan data yang ingin Anda monitor. Kami rancang solusi yang tepat — tanpa kewajiban.'],
];
