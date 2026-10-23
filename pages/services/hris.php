<?php

$page = [
    'layout' => 'service',
    'lang' => 'id',
    'title' => 'HRIS Kustom — DIRAIT',
    'description' => 'Platform HRIS yang dibangun sesuai kebijakan perusahaan Anda. Payroll, absensi, cuti, kinerja — dalam satu sistem terpadu dengan PWA dan push notifications.',
    'canonical' => 'https://dirait.com/services/hris',
    'hero' => [
        'eyebrow' => 'LAYANAN · HRIS',
        'title' => 'HRIS yang mengikuti *kebijakan* Anda.',
        'lead' => 'Payroll, absensi, cuti, dan manajemen kinerja dalam satu sistem terpadu — dibangun sesuai kebijakan unik perusahaan Anda, bukan dipaksa menyesuaikan.',
        'image' => 'id-hris',
        'image_alt' => 'Dashboard HRIS dengan rekap kehadiran harian, daftar pengajuan cuti, ringkasan payroll bulanan, dan check-in karyawan.',
    ],
    'features' => [
        'eyebrow' => 'MODUL',
        'title' => 'Apa yang kami bangun dalam HRIS Anda.',
        'lead' => 'Seluruh siklus karyawan — dari absen pagi hingga slip gaji — dalam satu platform.',
        'items' => [
            ['icon' => 'wallet', 'title' => 'Payroll & Kompensasi', 'text' => 'Gaji dihitung otomatis dari kehadiran, lembur, dan tunjangan, terintegrasi dengan sistem bank dan ketentuan UMP.'],
            ['icon' => 'scan-face', 'title' => 'Absensi & Kehadiran', 'text' => 'Check-in via QR, geolokasi, atau biometrik, dengan toleransi keterlambatan yang bisa diatur per divisi.'],
            ['icon' => 'calendar-days', 'title' => 'Cuti & Izin', 'text' => 'Pengajuan cuti online dengan approval bertingkat, saldo cuti otomatis, dan kalender tim.'],
            ['icon' => 'shield-check', 'title' => 'Manajemen & RBAC', 'text' => 'Hak akses berbeda untuk admin HR, manajer, dan karyawan sesuai kebutuhan masing-masing.'],
            ['icon' => 'smartphone', 'title' => 'PWA & Mobile', 'text' => 'Karyawan bisa absen, mengajukan cuti, dan melihat slip gaji dari smartphone lewat Progressive Web App.'],
            ['icon' => 'chart-pie', 'title' => 'Laporan & Analitik', 'text' => 'Headcount, biaya SDM, turnover, dan tren kehadiran real-time, dengan ekspor ke Excel.'],
        ],
    ],
    'work' => [
        'eyebrow' => 'STUDI KASUS',
        'title' => 'Sistem koperasi kredit dengan PWA.',
        'items' => [
            ['tag' => 'PWA · Multi-Role · Push Notification', 'title' => 'HRIS dan manajemen organisasi untuk koperasi kredit', 'text' => 'Mengelola data 12.000+ anggota, simpan pinjam, pembagian SHU, serta absensi dan penggajian pengurus. Dibangun sebagai PWA dengan waktu muat di bawah 2 detik dan kemampuan offline, push notification untuk pinjaman, jatuh tempo, dan pengumuman RAT, serta audit trail lengkap untuk pelaporan ke Kementerian.', 'stack' => ['React', 'Laravel', 'PostgreSQL'], 'client' => 'Koperasi Kredit', 'location' => 'Indonesia'],
        ],
    ],
    'process' => [
        'eyebrow' => 'PROSES',
        'title' => 'Cara kami membangun HRIS Anda.',
        'steps' => [
            ['title' => 'Pelajari kebijakan', 'text' => 'Kami pelajari kebijakan SDM, struktur organisasi, aturan payroll, dan alur kerja Anda menjadi dokumen spesifikasi.'],
            ['title' => 'Bangun & uji', 'text' => 'Pengembangan iteratif; setiap modul diuji bersama tim HR agar payroll, cuti, dan approval berjalan tepat.'],
            ['title' => 'Deploy & training', 'text' => 'Peluncuran, migrasi data karyawan, dan pelatihan tim HR, dengan dukungan penuh selama masa transisi.'],
        ],
    ],
    'stack' => ['React', 'Laravel', 'PostgreSQL', 'PWA', 'Push Notification', 'Docker', 'Nginx'],
    'faq' => [
        ['q' => 'Apakah perhitungan payroll bisa mengikuti aturan perusahaan kami?', 'a' => 'Ya. Komponen gaji, lembur, tunjangan, dan toleransi keterlambatan dikonfigurasi sesuai kebijakan Anda, dan diuji bersama tim HR sebelum go-live.'],
        ['q' => 'Bisakah karyawan mengakses HRIS dari ponsel?', 'a' => 'Bisa. HRIS dibangun sebagai PWA sehingga karyawan dapat absen, mengajukan cuti, dan melihat slip gaji dari smartphone, termasuk saat koneksi terbatas.'],
        ['q' => 'Berapa lama pengerjaan HRIS kustom?', 'a' => 'Aplikasi web kustom umumnya memakan 8–16 minggu tergantung cakupan modul. Timeline detail kami berikan setelah tahap discovery.'],
        ['q' => 'Apakah ada dukungan setelah launch?', 'a' => 'Setiap proyek mencakup dukungan pasca-launch. Kami juga menyediakan maintenance lanjutan untuk update, perbaikan bug, patch keamanan, dan penambahan fitur.'],
    ],
    'cta' => ['title' => 'Siap modernisasi HR Anda?', 'text' => 'Ceritakan kebijakan SDM Anda. Kami jelaskan bagaimana HRIS kustom bisa mengotomatisasi seluruh siklus karyawan.'],
];
