<?php

$page = [
    'layout' => 'service',
    'lang' => 'id',
    'title' => 'Sistem POS Kustom — DIRAIT',
    'description' => 'Sistem POS yang menangani transaksi, inventaris, dan multi-store dari satu dashboard. Integrasi MidTrans, Duitku, Mollie. Dibangun untuk ritel, F&B, dan retail modern.',
    'canonical' => 'https://dirait.com/services/pos',
    'hero' => [
        'eyebrow' => 'LAYANAN · POS',
        'title' => 'Kasir, stok, dan cabang dalam *satu sistem*.',
        'lead' => 'Platform kasir yang memproses pembayaran, mengelola inventaris real-time, dan menghubungkan banyak toko dalam satu dashboard — untuk ritel, F&B, dan retail modern.',
        'note' => 'Mulai dari Rp80 juta · 8–12 minggu',
        'image' => 'id-pos',
        'image_alt' => 'Layar kasir POS dengan katalog menu, keranjang belanja, total pembayaran QRIS, dan struk transaksi.',
    ],
    'features' => [
        'eyebrow' => 'FITUR',
        'title' => 'Apa yang kami bangun dalam sistem POS Anda.',
        'lead' => 'Dari checkout di kasir hingga laporan margin di kantor pusat.',
        'items' => [
            ['icon' => 'scan-barcode', 'title' => 'Transaksi & Kasir', 'text' => 'Checkout cepat dengan tunai, kartu, QRIS, dan e-wallet lewat antarmuka kasir yang responsif dan mudah digunakan.'],
            ['icon' => 'package', 'title' => 'Manajemen Inventaris', 'text' => 'Stok real-time di semua lokasi, notifikasi stok menipis, varian produk, dan stock opname tanpa mengganggu operasional.'],
            ['icon' => 'store', 'title' => 'Multi-Store', 'text' => 'Kelola banyak toko dari satu dashboard: performa cabang, sinkronisasi harga dan promo, serta transfer stok antar-toko.'],
            ['icon' => 'credit-card', 'title' => 'Payment Gateway', 'text' => 'Integrasi MidTrans, Duitku, dan Mollie untuk pembayaran online dan offline, cicilan, refund, dan rekonsiliasi.'],
            ['icon' => 'chart-line', 'title' => 'Laporan & Analitik', 'text' => 'Penjualan harian, margin laba, produk terlaris, dan tren musiman untuk keputusan berbasis data.'],
            ['icon' => 'users', 'title' => 'Multi-Peran', 'text' => 'Tiga tingkatan akses — kasir, supervisor, dan owner — sesuai kebutuhan operasional.'],
        ],
    ],
    'work' => [
        'eyebrow' => 'STUDI KASUS',
        'title' => 'Proyek nyata, hasil nyata.',
        'items' => [
            ['tag' => 'E-Commerce · Healthcare', 'title' => 'Platform e-commerce untuk rumah sakit', 'text' => 'Sistem multi-peran dengan notifikasi real-time WebSocket, payment processing, serta aplikasi web dan mobile untuk transaksi logistik rumah sakit.', 'stack' => ['Laravel', 'Next.js', 'React Native', 'PostgreSQL'], 'client' => 'Rumah Sakit Swasta', 'location' => 'Jakarta, Indonesia'],
            ['tag' => 'Hospitality · Booking', 'title' => 'Booking system untuk penyewaan kincir angin', 'text' => 'Booking berbasis split-day availability dengan session-based scheduling dan logika bisnis kustom untuk menyewakan kincir angin sebagai akomodasi wisata.', 'stack' => ['Laravel', 'SvelteKit', 'PostgreSQL'], 'client' => 'Logeren bij de Molen', 'location' => 'Noord-Holland, Belanda'],
        ],
    ],
    'process' => [
        'eyebrow' => 'PROSES',
        'title' => 'Tiga langkah menuju sistem POS yang tepat.',
        'steps' => [
            ['title' => 'Discovery & mapping', 'text' => 'Kami pelajari alur kasir, stok, dan kebutuhan multi-toko Anda. Hasilnya: spesifikasi teknis dan mockup interaktif.'],
            ['title' => 'Pengembangan & iterasi', 'text' => 'Sprint mingguan dengan build progresif. Anda melihat hasil tiap akhir sprint dan memberi feedback langsung.'],
            ['title' => 'Launch & dukungan', 'text' => 'Deploy ke production, migrasi data, training tim, dan dukungan teknis 90 hari pasca-launch.'],
        ],
    ],
    'stack' => ['Laravel', 'Next.js', 'React Native', 'SvelteKit', 'PostgreSQL', 'WebSocket', 'MidTrans', 'Duitku', 'Mollie'],
    'faq' => [
        ['q' => 'Berapa biaya dan lama pengerjaan sistem POS?', 'a' => 'Proyek POS dimulai dari Rp80 juta dengan estimasi 8–12 minggu, tergantung jumlah toko, modul, dan integrasi.'],
        ['q' => 'Metode pembayaran apa saja yang didukung?', 'a' => 'Tunai, kartu, QRIS, dan e-wallet. Untuk pembayaran online kami mengintegrasikan payment gateway seperti MidTrans, Duitku, dan Mollie.'],
        ['q' => 'Apakah POS bisa dipakai di banyak cabang?', 'a' => 'Bisa. Semua cabang terhubung ke satu dashboard pusat dengan stok real-time, sinkronisasi harga dan promo, serta transfer stok antar-toko.'],
        ['q' => 'Dukungan apa yang didapat setelah launch?', 'a' => 'Kami melakukan migrasi data, training tim, dan memberikan dukungan teknis 90 hari pasca-launch. Maintenance lanjutan tersedia untuk update dan fitur baru.'],
    ],
    'cta' => ['title' => 'Siap membangun sistem POS Anda?', 'text' => 'Ceritakan kebutuhan toko Anda. Kami jelaskan pendekatan kami — tanpa sales pitch, tanpa kewajiban.'],
];
