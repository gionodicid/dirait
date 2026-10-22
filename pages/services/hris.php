<?php

$page = [
    'layout' => 'brand',
    'title' => 'HRIS Kustom — DIRAIT',
    'description' => 'Platform HRIS yang dibangun sesuai kebijakan perusahaan Anda. Payroll, absensi, cuti, kinerja — dalam satu sistem terpadu dengan PWA dan push notifications.',
    'canonical' => 'https://dirait.id/services/hris',
];
?>
      <!-- ========== HERO ========== -->
      <section class="relative overflow-hidden border-b border-border" aria-label="Hero">
        <div class="pointer-events-none absolute inset-0 network-grid" aria-hidden="true"></div>
        <div class="node-float n1" aria-hidden="true"></div>
        <div class="node-float n2" aria-hidden="true"></div>
        <div class="node-float n3" aria-hidden="true"></div>
        <div class="node-float n4" aria-hidden="true"></div>
        <div class="node-float n5" aria-hidden="true"></div>
        <div class="node-float n6" aria-hidden="true"></div>
        <svg class="hero-lines" aria-hidden="true" preserveAspectRatio="none">
          <line x1="68%" y1="12%" x2="82%" y2="30%" /><line x1="82%" y1="30%" x2="70%" y2="50%" /><line x1="70%" y1="50%" x2="78%" y2="68%" /><line x1="78%" y1="68%" x2="62%" y2="80%" /><line x1="48%" y1="18%" x2="68%" y2="12%" /><line x1="42%" y1="58%" x2="70%" y2="50%" />
        </svg>
        <div class="pointer-events-none absolute -right-40 -top-40 h-[500px] w-[500px] rounded-full bg-brand/[.06] blur-3xl" aria-hidden="true"></div>
        <div class="pointer-events-none absolute -left-20 bottom-0 h-64 w-64 rounded-full bg-brand/[.03] blur-3xl" aria-hidden="true"></div>
        <div class="brand-line hidden sm:block" aria-hidden="true" style="left: max(1rem, calc((100vw - 80rem) / 2 + 1rem))"></div>
        <div class="relative mx-auto max-w-7xl px-4 py-20 sm:px-6 sm:py-28 lg:px-8 lg:py-36">
          <div class="max-w-3xl sm:pl-8">
            <p class="mb-4 font-body text-sm font-medium uppercase tracking-widest text-brand">HRIS Kustom</p>
            <h1 class="font-heading text-4xl font-bold tracking-tight text-balance text-primary sm:text-5xl lg:text-6xl">
              Platform HR yang Mengelola Seluruh Siklus Karyawan
            </h1>
            <p class="mt-6 max-w-xl font-body text-lg leading-relaxed text-muted-fg">
              Payroll, absensi, cuti, dan manajemen kinerja dalam satu sistem terpadu — dibangun sesuai kebijakan unik perusahaan Anda, bukan dipaksa menyesuaikan.
            </p>
            <div class="mt-10 flex flex-wrap items-center gap-4">
              <a href="<?= e(url('/')) ?>#cta" class="inline-flex h-12 items-center rounded-md bg-brand px-8 text-base font-semibold text-brand-fg transition-colors hover:bg-brand-hover shadow-sm shadow-brand/20">Diskusikan Proyek HRIS</a>
            </div>
          </div>
        </div>
      </section>

      <!-- ========== WHAT WE BUILD ========== -->
      <section class="relative border-b border-border py-20 sm:py-24">
        <div class="pointer-events-none absolute inset-0 network-grid-light opacity-60" aria-hidden="true"></div>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="reveal mb-12 max-w-2xl">
            <p class="mb-3 font-body text-sm font-medium uppercase tracking-widest text-brand">Modul</p>
            <h2 class="font-heading text-3xl font-semibold tracking-tight text-primary sm:text-4xl">Apa yang Kami Bangun dalam HRIS Anda</h2>
          </div>
          <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 sm:gap-5">
            <div class="reveal group relative flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:0ms">
              <span class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              </span>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">Payroll &amp; Kompensasi</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Perhitungan gaji otomatis berdasarkan kehadiran, lembur, dan komponen tunjangan. Terintegrasi dengan sistem bank dan ketentuan UMP.</p>
            </div>
            <div class="reveal group relative flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:60ms">
              <span class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              </span>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">Absensi &amp; Kehadiran</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Check-in via QR, geolokasi, atau biometric. Rekap kehadiran real-time dengan toleransi keterlambatan yang bisa diatur per divisi.</p>
            </div>
            <div class="reveal group relative flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:120ms">
              <span class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"/></svg>
              </span>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">Cuti &amp; Izin</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Pengajuan cuti online dengan approval flow bertingkat. Saldo cuti otomatis, kalender tim, dan pelacakan sisa kuota tahunan.</p>
            </div>
            <div class="reveal group relative flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:180ms">
              <span class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/></svg>
              </span>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">Manajemen &amp; RBAC</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Role-based access control untuk admin HR, manajer, dan karyawan. Setiap level memiliki hak akses yang sesuai dengan kebutuhan.</p>
            </div>
            <div class="reveal group relative flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:240ms">
              <span class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"/></svg>
              </span>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">PWA &amp; Mobile</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Akses HRIS dari mana saja via Progressive Web App. Karyawan bisa absen, ajukan cuti, dan lihat slip gaji langsung dari smartphone.</p>
            </div>
            <div class="reveal group relative flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:300ms">
              <span class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/></svg>
              </span>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">Laporan &amp; Analitik</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Dashboard real-time untuk headcount, biaya SDM, turnover, dan tren kehadiran. Ekspor data ke Excel untuk kebutuhan akuntansi.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- ========== CASE STUDY ========== -->
      <section class="border-t border-border bg-surface py-20 sm:py-24" aria-label="Studi Kasus">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="reveal mb-12 max-w-2xl">
            <p class="mb-3 font-body text-sm font-medium uppercase tracking-widest text-brand">Studi Kasus</p>
            <h2 class="font-heading text-3xl font-semibold tracking-tight text-primary sm:text-4xl">Sistem Koperasi Kredit dengan PWA untuk Organisasi</h2>
          </div>
          <div class="reveal border border-border bg-background p-8 sm:p-10">
            <div class="grid gap-8 lg:grid-cols-3 lg:gap-12">
              <div class="lg:col-span-2">
                <div class="flex flex-wrap gap-2 mb-5">
                  <span class="rounded-md bg-brand-soft px-3 py-1 font-body text-xs font-medium text-brand">PWA</span>
                  <span class="rounded-md bg-brand-soft px-3 py-1 font-body text-xs font-medium text-brand">Multi-Role</span>
                  <span class="rounded-md bg-brand-soft px-3 py-1 font-body text-xs font-medium text-brand">Push Notification</span>
                  <span class="rounded-md bg-brand-soft px-3 py-1 font-body text-xs font-medium text-brand">React</span>
                  <span class="rounded-md bg-brand-soft px-3 py-1 font-body text-xs font-medium text-brand">Laravel</span>
                  <span class="rounded-md bg-brand-soft px-3 py-1 font-body text-xs font-medium text-brand">PostgreSQL</span>
                </div>
                <p class="font-body text-sm leading-relaxed text-muted-fg sm:text-base">
                  Kami membangun sistem HRIS dan manajemen organisasi untuk koperasi kredit di Indonesia. Sistem ini mengelola data lebih dari 12.000 anggota, pencatatan simpan pinjam, pembagian SHU, serta absensi dan penggajian pengurus koperasi.
                </p>
                <p class="mt-4 font-body text-sm leading-relaxed text-muted-fg sm:text-base">
                  Aplikasi dibangun sebagai PWA sehingga pengurus di kantor cabang dan lapangan tetap bisa mengakses sistem meskipun dalam kondisi koneksi terbatas. Notifikasi push real-time dikirim untuk pengajuan pinjaman baru, jatuh tempo angsuran, dan pengumuman RAT.
                </p>
                <p class="mt-4 font-body text-sm leading-relaxed text-muted-fg sm:text-base">
                  Sistem multi-role memisahkan akses antara pengurus pusat, pengurus cabang, bendahara, dan anggota — masing-masing dengan hak akses yang berbeda. Seluruh transaksi tercatat lengkap dengan audit trail untuk kebutuhan pengawasan dan pelaporan ke Kementerian.
                </p>
              </div>
              <div class="border-t border-border pt-6 lg:border-l lg:border-t-0 lg:pl-10 lg:pt-0">
                <h3 class="mb-4 font-heading text-sm font-semibold uppercase tracking-wider text-muted">Hasil</h3>
                <ul class="space-y-4">
                  <li>
                    <p class="font-heading text-2xl font-bold text-brand">12.000+</p>
                    <p class="font-body text-sm text-muted-fg">Anggota terkelola</p>
                  </li>
                  <li>
                    <p class="font-heading text-2xl font-bold text-brand">&lt; 2 dtk</p>
                    <p class="font-body text-sm text-muted-fg">Waktu muat PWA</p>
                  </li>
                  <li>
                    <p class="font-heading text-2xl font-bold text-brand">100%</p>
                    <p class="font-body text-sm text-muted-fg">Offline capability</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ========== APPROACH ========== -->
      <section class="relative border-t border-border py-20 sm:py-24" aria-label="Pendekatan">
        <div class="pointer-events-none absolute inset-0 network-grid-light opacity-60" aria-hidden="true"></div>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="reveal mb-12 max-w-2xl">
            <p class="mb-3 font-body text-sm font-medium uppercase tracking-widest text-brand">Pendekatan</p>
            <h2 class="font-heading text-3xl font-semibold tracking-tight text-primary sm:text-4xl">Cara Kami Membangun HRIS Anda</h2>
          </div>
          <div class="grid gap-4 sm:grid-cols-3 sm:gap-6">
            <div class="reveal relative border border-border bg-surface p-6 sm:p-8" style="transition-delay:0ms">
              <span class="absolute -top-4 left-6 flex h-8 w-8 items-center justify-center rounded-full bg-brand text-sm font-bold text-brand-fg">1</span>
              <h3 class="mb-3 mt-2 font-heading text-lg font-semibold text-primary">Discover Kebijakan</h3>
              <p class="font-body text-sm leading-relaxed text-muted-fg">Kami pelajari kebijakan SDM, struktur organisasi, aturan payroll, dan alur kerja Anda. Hasilnya adalah dokumen spesifikasi yang menjadi cetak biru sistem.</p>
            </div>
            <div class="reveal relative border border-border bg-surface p-6 sm:p-8" style="transition-delay:100ms">
              <span class="absolute -top-4 left-6 flex h-8 w-8 items-center justify-center rounded-full bg-brand text-sm font-bold text-brand-fg">2</span>
              <h3 class="mb-3 mt-2 font-heading text-lg font-semibold text-primary">Bangun &amp; Uji</h3>
              <p class="font-body text-sm leading-relaxed text-muted-fg">Tim kami mengembangkan sistem secara iteratif. Setiap modul diuji bersama tim HR Anda untuk memastikan perhitungan payroll, kebijakan cuti, dan alur approval berjalan tepat.</p>
            </div>
            <div class="reveal relative border border-border bg-surface p-6 sm:p-8" style="transition-delay:200ms">
              <span class="absolute -top-4 left-6 flex h-8 w-8 items-center justify-center rounded-full bg-brand text-sm font-bold text-brand-fg">3</span>
              <h3 class="mb-3 mt-2 font-heading text-lg font-semibold text-primary">Deploy &amp; Training</h3>
              <p class="font-body text-sm leading-relaxed text-muted-fg">Kami luncurkan sistem, migrasi data karyawan, dan berikan pelatihan untuk tim HR dan pengguna. Dukungan penuh selama masa transisi dan periode pasca-launch.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- ========== CTA ========== -->
      <section class="relative overflow-hidden border-t border-border bg-primary py-20 sm:py-24" aria-label="CTA">
        <div class="pointer-events-none absolute inset-0" style="background-image: radial-gradient(circle, rgba(45,107,255,0.12) 1px, transparent 1px); background-size: 40px 40px;" aria-hidden="true"></div>
        <div class="pointer-events-none absolute left-1/2 top-1/2 h-96 w-96 -translate-x-1/2 -translate-y-1/2 rounded-full bg-brand/10 blur-3xl" aria-hidden="true"></div>
        <div class="relative mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
          <h2 class="font-heading text-3xl font-bold tracking-tight text-brand-fg sm:text-4xl">Siap Modernisasi HR Anda?</h2>
          <p class="mx-auto mt-4 max-w-lg font-body text-base leading-relaxed text-brand-fg/60">
            Ceritakan kebijakan SDM Anda. Kami akan jelaskan bagaimana sistem HRIS kustom bisa mengotomatisasi seluruh siklus karyawan.
          </p>
          <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
            <a href="https://wa.me/6281234567890" target="_blank" rel="noopener noreferrer" class="inline-flex h-12 items-center gap-2 rounded-md bg-brand px-8 text-base font-semibold text-brand-fg transition-colors hover:bg-brand-hover shadow-lg shadow-brand/20">
              <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" /></svg>
              Mulai di WhatsApp
            </a>
            <a href="mailto:hello@dirait.id" class="inline-flex h-12 items-center gap-2 rounded-md border border-brand-fg/15 px-8 text-base font-medium text-brand-fg transition-colors hover:bg-brand-fg/10">
              <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
              Kirim Email
            </a>
          </div>
        </div>
      </section>

    
