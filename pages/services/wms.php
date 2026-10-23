<?php

$page = [
    'layout' => 'service',
    'lang' => 'id',
    'title' => 'WMS Kustom — DIRAIT',
    'description' => 'Sistem Manajemen Gudang (WMS) yang melacak stok secara real-time di berbagai lokasi, zona, dan channel. Integrasi API, pelaporan, geolokasi, dan mobile support.',
    'canonical' => 'https://dirait.com/services/wms',
    'hero' => [
        'eyebrow' => 'LAYANAN · WMS',
        'title' => 'Stok gudang terpantau *real-time*.',
        'lead' => 'Pantau stok secara langsung, kelola multi-gudang dan zona, serta integrasikan dengan POS, e-commerce, dan akuntansi — dalam satu WMS yang dibangun sesuai kebutuhan Anda.',
        'image' => 'id-wms',
        'image_alt' => 'Dashboard WMS dengan denah zona dan bin location gudang, daftar penerimaan barang masuk, dan ringkasan stok per SKU.',
    ],
    'features' => [
        'eyebrow' => 'FITUR',
        'title' => 'Fitur WMS unggulan.',
        'lead' => 'Setiap modul dirancang untuk alur kerja gudang Anda, bukan sebaliknya.',
        'items' => [
            ['icon' => 'boxes', 'title' => 'Real-Time Stock', 'text' => 'Setiap pergerakan inventaris masuk dan keluar di seluruh lokasi tercatat otomatis tanpa jeda.'],
            ['icon' => 'warehouse', 'title' => 'Multi-Lokasi & Zona', 'text' => 'Kelola beberapa gudang, zona, dan bin location dalam satu antarmuka, lengkap dengan optimasi picking route.'],
            ['icon' => 'plug', 'title' => 'Integration API', 'text' => 'Sinkron otomatis dengan POS, e-commerce, marketplace, software akuntansi, dan ERP tanpa duplikasi data.'],
            ['icon' => 'file-spreadsheet', 'title' => 'Reporting & Export', 'text' => 'Laporan pergerakan stok, reorder point alert, dan analisis inventaris, ekspor ke CSV atau XLSX.'],
            ['icon' => 'map-pin', 'title' => 'Mapping & Geolokasi', 'text' => 'Visualisasi gudang dan aset di peta Leaflet untuk memantau inventaris dan armada secara geografis.'],
            ['icon' => 'smartphone', 'title' => 'Mobile Support', 'text' => 'Receiving, picking, packing, dan stock opname langsung dari smartphone untuk operasi lapangan.'],
        ],
    ],
    'work' => [
        'eyebrow' => 'STUDI KASUS',
        'title' => 'Spraying Module Reporting Application.',
        'items' => [
            ['tag' => 'Mapping · BLE · Multi-Tenant', 'title' => 'Aplikasi pelaporan modul penyemprotan lapangan', 'text' => 'Operator lapangan mencatat data penyemprotan pestisida/pupuk secara real-time dari lokasi terpencil lewat aplikasi Android dengan koneksi BLE ke modul hardware, sementara manajer memantau lokasi, rute, dan area coverage di dashboard web berbasis peta Leaflet. Arsitektur multi-tenant memisahkan data, pengaturan, dan branding tiap klien.', 'stack' => ['React', 'React Native', 'Node.js', 'PostgreSQL', 'Leaflet', 'BLE'], 'client' => 'Klien agrikultur', 'location' => 'Web + Android'],
        ],
    ],
    'process' => [
        'eyebrow' => 'PROSES',
        'title' => 'Bagaimana kami membangun WMS Anda.',
        'steps' => [
            ['title' => 'Discovery & mapping', 'text' => 'Kami pelajari alur gudang dari receiving hingga shipping, dan memetakan integrasi dengan sistem yang sudah ada.'],
            ['title' => 'Build & iterate', 'text' => 'Sprint mingguan dengan demo tiap akhir sprint; feedback Anda menentukan prioritas fitur berikutnya.'],
            ['title' => 'Deploy & optimize', 'text' => 'Setelah UAT, sistem di-deploy ke production dan performanya terus dipantau untuk optimasi lanjutan.'],
        ],
    ],
    'stack' => ['React', 'React Native', 'Node.js', 'Laravel', 'PostgreSQL', 'Leaflet', 'BLE', 'REST API'],
    'faq' => [
        ['q' => 'Apakah WMS bisa terhubung ke POS dan marketplace?', 'a' => 'Bisa. WMS kami integrasikan dengan POS, e-commerce, marketplace, software akuntansi, dan ERP sehingga data stok sinkron otomatis.'],
        ['q' => 'Apakah petugas gudang bisa bekerja dari ponsel?', 'a' => 'Ya. Receiving, picking, packing, dan stock opname bisa dilakukan dari smartphone, termasuk aplikasi React Native untuk Android dengan dukungan BLE dan GPS.'],
        ['q' => 'Berapa lama pengerjaan WMS kustom?', 'a' => 'Aplikasi web dan mobile kustom umumnya memakan 8–16 minggu tergantung cakupan. Timeline detail kami berikan setelah discovery.'],
        ['q' => 'Apakah ada dukungan setelah sistem live?', 'a' => 'Setiap proyek mencakup dukungan pasca-launch, dan performa sistem terus kami pantau. Maintenance lanjutan tersedia untuk update, perbaikan bug, dan fitur baru.'],
    ],
    'cta' => ['title' => 'Siap mengelola gudang secara real-time?', 'text' => 'Ceritakan tantangan gudang Anda. Kami rancang sistem yang tepat — tanpa sales pitch, tanpa kewajiban.'],
];
