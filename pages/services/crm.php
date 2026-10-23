<?php

$page = [
    'layout' => 'service',
    'lang' => 'id',
    'title' => 'Sistem CRM Kustom — DIRAIT',
    'description' => 'CRM dengan pipeline Kanban, integrasi WhatsApp API, dashboard real-time, dan multi-role RBAC. Dibangun untuk tim sales dan perusahaan jasa.',
    'canonical' => 'https://dirait.com/services/crm',
    'hero' => [
        'eyebrow' => 'LAYANAN · CRM',
        'title' => 'CRM yang mengikuti *pipeline* Anda.',
        'lead' => 'Integrasi WhatsApp API, kanban drag-and-drop, dashboard real-time, dan otomatisasi sales — dibangun untuk tim penjualan dan perusahaan jasa yang ingin closing lebih cepat.',
        'note' => 'Mulai dari Rp80 juta · 8–12 minggu',
        'image' => 'id-crm',
        'image_alt' => 'Tampilan CRM dengan papan kanban pipeline penjualan, ringkasan nilai deal, dan panel chat WhatsApp pelanggan.',
    ],
    'features' => [
        'eyebrow' => 'FITUR',
        'title' => 'Apa yang kami bangun dalam CRM Anda.',
        'lead' => 'Setiap modul mengikuti alur penjualan tim Anda — dari lead masuk hingga closing.',
        'items' => [
            ['icon' => 'kanban', 'title' => 'Pipeline & Kanban', 'text' => 'Papan kanban drag-and-drop untuk memindahkan lead antar-tahap pipeline secara visual, dari prospecting hingga closing.'],
            ['icon' => 'message-circle', 'title' => 'Integrasi WhatsApp', 'text' => 'Kirim pesan template, notifikasi otomatis, dan bridging chat real-time dari dashboard CRM ke nomor pelanggan.'],
            ['icon' => 'chart-column', 'title' => 'Dashboard & Laporan', 'text' => 'Grafik pipeline, scorecard tim, konversi lead, dan analitik penjualan dalam satu dashboard interaktif.'],
            ['icon' => 'shield-check', 'title' => 'Multi-Role & RBAC', 'text' => 'Hak akses per peran — sales, manager, dan admin — sehingga setiap pengguna hanya melihat data yang relevan.'],
            ['icon' => 'radio', 'title' => 'Update Real-Time', 'text' => 'Lead baru, perpindahan pipeline, dan update deal terlihat instan di seluruh tim lewat koneksi WebSocket.'],
            ['icon' => 'plug', 'title' => 'Ekspor & Integrasi', 'text' => 'Ekspor ke CSV/XLSX, integrasi akuntansi atau ERP via REST API, dan webhook ke aplikasi eksternal.'],
        ],
    ],
    'work' => [
        'eyebrow' => 'STUDI KASUS',
        'title' => 'Proyek nyata, hasil nyata.',
        'items' => [
            ['tag' => 'CRM · WhatsApp API', 'title' => 'CRM dengan integrasi WhatsApp untuk perusahaan jasa', 'text' => 'WhatsApp API terhubung langsung ke CRM untuk pesan otomatis, bridging chat real-time via Express.js, dan dashboard monitoring. Seluruh data tersimpan di PostgreSQL.', 'stack' => ['Laravel', 'Express.js', 'PostgreSQL'], 'client' => 'Perusahaan Jasa Keuangan', 'location' => 'Jakarta, Indonesia'],
            ['tag' => 'Sales Force · Kanban', 'title' => 'Sales force app dengan kanban pipeline', 'text' => 'Aplikasi sales force dengan kanban drag-and-drop antar-tahap pipeline, multi-tenant, dan multi-role RBAC. Frontend dibangun dengan React dan shadcn/ui.', 'stack' => ['React', 'Laravel', 'shadcn/ui', 'PostgreSQL'], 'client' => 'Software House Klien Eropa', 'location' => 'Remote · Tim Internasional'],
        ],
    ],
    'process' => [
        'eyebrow' => 'PROSES',
        'title' => 'Tiga langkah menuju CRM yang tepat.',
        'steps' => [
            ['title' => 'Mapping pipeline', 'text' => 'Kami petakan alur penjualan Anda dari lead masuk hingga closing, lalu merancang pipeline kustom sesuai proses tim sales.'],
            ['title' => 'Integrasi & otomatisasi', 'text' => 'WhatsApp API, email, dan aturan otomatisasi dihubungkan agar follow-up berjalan sendiri dan tim fokus menutup deal.'],
            ['title' => 'Deploy & adopsi', 'text' => 'Deploy sistem, migrasi data pelanggan, dan pelatihan tim sales, dengan pendampingan 90 hari pasca-launch.'],
        ],
    ],
    'stack' => ['React', 'Laravel', 'Express.js', 'PostgreSQL', 'shadcn/ui', 'WhatsApp API', 'WebSocket', 'REST API'],
    'faq' => [
        ['q' => 'Berapa biaya dan lama pengerjaan CRM kustom?', 'a' => 'Proyek CRM dimulai dari Rp80 juta dengan estimasi pengerjaan 8–12 minggu, tergantung jumlah modul dan integrasi yang dibutuhkan.'],
        ['q' => 'Apakah CRM bisa terhubung ke WhatsApp?', 'a' => 'Bisa. Kami mengintegrasikan WhatsApp API untuk pesan template, notifikasi otomatis, dan bridging chat real-time langsung dari dashboard CRM.'],
        ['q' => 'Bisakah CRM diintegrasikan dengan sistem akuntansi atau ERP kami?', 'a' => 'Ya. Data dapat disinkronkan via REST API dan webhook, serta diekspor ke CSV atau XLSX untuk kebutuhan akuntansi.'],
        ['q' => 'Apa yang terjadi setelah sistem live?', 'a' => 'Kami melakukan migrasi data pelanggan, melatih tim sales, dan memberikan pendampingan selama 90 hari pasca-launch. Maintenance lanjutan tersedia untuk update, perbaikan bug, dan fitur baru.'],
    ],
    'cta' => ['title' => 'Siap membangun CRM Anda?', 'text' => 'Ceritakan proses penjualan Anda. Kami jelaskan bagaimana CRM kustom bisa meningkatkan closing rate tim Anda — tanpa sales pitch, tanpa kewajiban.'],
];
