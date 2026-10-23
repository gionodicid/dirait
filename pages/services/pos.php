<?php

$page = [
    'layout' => 'brand',
    'title' => 'Sistem POS Kustom — DIRAIT',
    'description' => 'Sistem POS yang menangani transaksi, inventaris, dan multi-store dari satu dashboard. Integrasi MidTrans, Duitku, Mollie. Dibangun untuk ritel, F&B, dan retail modern.',
    'canonical' => 'https://dirait.com/services/pos',
    'styles' => <<<'CSS'
.text-balance { text-wrap: balance; }
      @keyframes nd1 { 0%,100% { transform: translate(0,0); } 25% { transform: translate(12px,-8px); } 50% { transform: translate(-6px,-14px); } 75% { transform: translate(-10px,4px); } }
      @keyframes nd2 { 0%,100% { transform: translate(0,0); } 25% { transform: translate(-10px,6px); } 50% { transform: translate(8px,12px); } 75% { transform: translate(14px,-6px); } }
      @keyframes nd3 { 0%,100% { transform: translate(0,0); } 33% { transform: translate(8px,10px); } 66% { transform: translate(-12px,-4px); } }
      @keyframes ndp { 0%,100% { opacity: 0.5; transform: scale(1); } 50% { opacity: 1; transform: scale(1.15); } }
      .node-float { border-radius: 50%; position: absolute; pointer-events: none; }
      .n1 { width: 6px; height: 6px; background: rgba(45,107,255,0.4); top: 18%; right: 20%; animation: nd1 18s ease-in-out infinite; }
      .n2 { width: 4px; height: 4px; background: rgba(45,107,255,0.3); top: 35%; right: 35%; animation: nd2 22s ease-in-out infinite; }
      .n3 { width: 8px; height: 8px; background: rgba(45,107,255,0.2); top: 55%; right: 15%; animation: nd3 20s ease-in-out infinite; }
      .n4 { width: 5px; height: 5px; background: rgba(45,107,255,0.35); top: 70%; right: 40%; animation: nd1 24s ease-in-out infinite reverse; }
      .n5 { width: 3px; height: 3px; background: rgba(45,107,255,0.5); top: 25%; right: 50%; animation: ndp 4s ease-in-out infinite; }
      .n6 { width: 5px; height: 5px; background: rgba(45,107,255,0.25); top: 80%; right: 25%; animation: nd2 16s ease-in-out infinite reverse; }
      .hero-lines { position: absolute; inset: 0; pointer-events: none; overflow: hidden; }
      .hero-lines line { stroke: rgba(45,107,255,0.08); stroke-width: 1; }
CSS,
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
          <line x1="75%" y1="15%" x2="85%" y2="35%" /><line x1="85%" y1="35%" x2="65%" y2="55%" /><line x1="65%" y1="55%" x2="80%" y2="72%" /><line x1="80%" y1="72%" x2="60%" y2="82%" /><line x1="50%" y1="20%" x2="75%" y2="15%" /><line x1="40%" y1="60%" x2="65%" y2="55%" />
        </svg>
        <div class="pointer-events-none absolute -right-40 -top-40 h-[500px] w-[500px] rounded-full bg-brand/[.06] blur-3xl" aria-hidden="true"></div>
        <div class="pointer-events-none absolute -left-20 bottom-0 h-64 w-64 rounded-full bg-brand/[.03] blur-3xl" aria-hidden="true"></div>
        <div class="brand-line hidden sm:block" aria-hidden="true" style="left: max(1rem, calc((100vw - 80rem) / 2 + 1rem))"></div>
        <div class="relative mx-auto max-w-7xl px-4 py-20 sm:px-6 sm:py-28 lg:px-8 lg:py-36">
          <div class="max-w-3xl sm:pl-8">
            <p class="mb-4 font-body text-sm font-medium uppercase tracking-widest text-brand">Software House · Jakarta</p>
            <h1 class="font-heading text-4xl font-bold tracking-tight text-balance text-primary sm:text-5xl lg:text-6xl">Sistem POS yang Menangani Transaksi, Stok, dan Multi-Store</h1>
            <p class="mt-6 max-w-xl font-body text-lg leading-relaxed text-muted-fg">Platform kasir yang memproses pembayaran, mengelola inventaris real-time, dan menghubungkan banyak toko dalam satu dashboard — dirancang untuk ritel, F&B, dan retail modern.</p>
            <div class="mt-10 flex flex-wrap items-center gap-4">
              <a href="<?= e(url('/')) ?>#cta" class="inline-flex h-12 items-center rounded-md bg-brand px-8 text-base font-semibold text-brand-fg transition-colors hover:bg-brand-hover shadow-sm shadow-brand/20">Diskusikan Proyek Anda</a>
              <a href="#features" class="inline-flex h-12 items-center rounded-md border border-primary/15 bg-transparent px-8 text-base font-medium text-primary transition-colors hover:bg-brand-soft hover:border-brand/30">Lihat Fitur</a>
            </div>
            <p class="mt-8 font-body text-sm text-muted">Mulai dari Rp80 juta — estimasi 8–12 minggu pengerjaan</p>
          </div>
        </div>
      </section>

      <!-- ========== WHAT WE BUILD (6 Feature Cards) ========== -->
      <section id="features" class="relative border-b border-border py-20 sm:py-24">
        <div class="pointer-events-none absolute inset-0 network-grid-light opacity-60" aria-hidden="true"></div>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="reveal mb-12 max-w-2xl">
            <p class="mb-3 font-body text-sm font-medium uppercase tracking-widest text-brand">Fitur Unggulan</p>
            <h2 class="font-heading text-3xl font-semibold tracking-tight text-primary sm:text-4xl">Apa yang Kami Bangun dalam Sistem POS Anda</h2>
          </div>
          <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 sm:gap-5">
            <!-- 1. Transaksi & Kasir -->
            <div class="reveal group relative flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:0ms">
              <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
              </div>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">Transaksi &amp; Kasir</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Proses checkout cepat dengan dukungan berbagai metode pembayaran — tunai, kartu, QRIS, dan e-wallet. Antarmuka kasir yang responsif dan mudah digunakan.</p>
            </div>
            <!-- 2. Manajemen Inventaris -->
            <div class="reveal group relative flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:60ms">
              <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
              </div>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">Manajemen Inventaris</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Pantau stok secara real-time di berbagai lokasi. Terima notifikasi otomatis saat stok menipis, kelola varian produk, dan lakukan stock opname tanpa mengganggu operasional.</p>
            </div>
            <!-- 3. Multi-Store -->
            <div class="reveal group relative flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:120ms">
              <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
              </div>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">Multi-Store</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Kelola puluhan toko dari satu dashboard pusat. Lihat performa setiap cabang secara real-time, sinkronkan harga dan promo, serta transfer stok antar-toko dengan mudah.</p>
            </div>
            <!-- 4. Payment Gateway -->
            <div class="reveal group relative flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:180ms">
              <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>
              </div>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">Payment Gateway</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Integrasi langsung dengan MidTrans, Duitku, dan Mollie. Proses pembayaran online dan offline, cicilan, refund otomatis, serta rekonsiliasi yang lebih efisien.</p>
            </div>
            <!-- 5. Laporan & Analitik -->
            <div class="reveal group relative flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:240ms">
              <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
              </div>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">Laporan &amp; Analitik</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Laporan penjualan harian, margin laba, produk terlaris, dan tren musiman. Dashboard interaktif yang membantu Anda mengambil keputusan bisnis berbasis data.</p>
            </div>
            <!-- 6. Multi-Peran -->
            <div class="reveal group relative flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:300ms">
              <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/></svg>
              </div>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">Multi-Peran</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Kelola akses pengguna dengan tiga tingkatan peran — kasir, supervisor, dan owner. Setiap peran memiliki hak akses berbeda sesuai kebutuhan operasional.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- ========== CASE STUDIES (surface) ========== -->
      <section class="border-t border-border bg-surface py-20 sm:py-24" aria-label="Studi Kasus">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="reveal mb-12 max-w-2xl">
            <p class="mb-3 font-body text-sm font-medium uppercase tracking-widest text-brand">Studi Kasus</p>
            <h2 class="font-heading text-3xl font-semibold tracking-tight text-primary sm:text-4xl">Proyek nyata, hasil nyata.</h2>
          </div>
          <div class="grid gap-6 lg:grid-cols-2">
            <!-- Case Study 1 -->
            <div class="reveal flex flex-col border border-border p-6 sm:p-8" style="transition-delay:0ms">
              <span class="mb-3 inline-block rounded-md bg-brand-soft px-3 py-1 font-body text-xs font-semibold text-brand">E-Commerce · Healthcare</span>
              <h3 class="mb-3 font-heading text-xl font-semibold tracking-tight text-primary">Platform E-Commerce untuk Rumah Sakit</h3>
              <p class="mb-4 font-body text-sm leading-relaxed text-muted-fg">Sistem multi-peran dengan WebSocket real-time notifications, integrasi payment processing, dan aplikasi web + mobile untuk memudahkan transaksi logistik rumah sakit.</p>
              <div class="mb-5 flex flex-wrap gap-2">
                <span class="rounded-md bg-background px-2.5 py-1 font-body text-xs font-medium text-muted-fg">Laravel</span>
                <span class="rounded-md bg-background px-2.5 py-1 font-body text-xs font-medium text-muted-fg">Next.js</span>
                <span class="rounded-md bg-background px-2.5 py-1 font-body text-xs font-medium text-muted-fg">React Native</span>
                <span class="rounded-md bg-background px-2.5 py-1 font-body text-xs font-medium text-muted-fg">PostgreSQL</span>
              </div>
              <div class="mt-auto flex items-center gap-3 border-t border-border pt-4">
                <div class="flex h-10 w-10 items-center justify-center rounded-full bg-primary text-white font-heading text-sm font-bold">RS</div>
                <div>
                  <p class="font-heading text-sm font-semibold text-primary">Rumah Sakit Swasta</p>
                  <p class="font-body text-xs text-muted-fg">Jakarta, Indonesia</p>
                </div>
              </div>
            </div>
            <!-- Case Study 2 -->
            <div class="reveal flex flex-col border border-border p-6 sm:p-8" style="transition-delay:100ms">
              <span class="mb-3 inline-block rounded-md bg-brand-soft px-3 py-1 font-body text-xs font-semibold text-brand">Hospitality · Booking</span>
              <h3 class="mb-3 font-heading text-xl font-semibold tracking-tight text-primary">Booking System untuk Windmill Company Belanda</h3>
              <p class="mb-4 font-body text-sm leading-relaxed text-muted-fg">Sistem booking berbasis split-day availability dengan session-based scheduling dan custom business logic untuk mengelola penyewaan kincir angin sebagai akomodasi wisata.</p>
              <div class="mb-5 flex flex-wrap gap-2">
                <span class="rounded-md bg-background px-2.5 py-1 font-body text-xs font-medium text-muted-fg">Laravel</span>
                <span class="rounded-md bg-background px-2.5 py-1 font-body text-xs font-medium text-muted-fg">SvelteKit</span>
                <span class="rounded-md bg-background px-2.5 py-1 font-body text-xs font-medium text-muted-fg">PostgreSQL</span>
              </div>
              <div class="mt-auto flex items-center gap-3 border-t border-border pt-4">
                <div class="flex h-10 w-10 items-center justify-center rounded-full bg-primary text-white font-heading text-sm font-bold">WM</div>
                <div>
                  <p class="font-heading text-sm font-semibold text-primary">Logeren bij de Molen</p>
                  <p class="font-body text-xs text-muted-fg">Noord-Holland, Belanda</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ========== APPROACH (bg + dots-light) ========== -->
      <section class="relative border-t border-border py-20 sm:py-24" aria-label="Pendekatan">
        <div class="pointer-events-none absolute inset-0 network-grid-light opacity-60" aria-hidden="true"></div>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="reveal mx-auto mb-12 max-w-2xl text-center">
            <p class="mb-3 font-body text-sm font-medium uppercase tracking-widest text-brand">Pendekatan Kami</p>
            <h2 class="font-heading text-3xl font-semibold tracking-tight text-primary sm:text-4xl">Tiga langkah menuju sistem POS yang tepat.</h2>
          </div>
          <div class="grid gap-6 sm:grid-cols-3">
            <div class="reveal text-center" style="transition-delay:0ms">
              <div class="mx-auto mb-5 flex h-14 w-14 items-center justify-center rounded-full bg-brand text-white font-heading text-xl font-bold shadow-sm shadow-brand/20">1</div>
              <h3 class="mb-2 font-heading text-lg font-semibold text-primary">Discovery &amp; Mapping</h3>
              <p class="font-body text-sm leading-relaxed text-muted-fg">Kami mempelajari alur kasir, alur stok, dan kebutuhan multi-toko Anda. Deliverable: dokumen spesifikasi teknis dan mockup interaktif.</p>
            </div>
            <div class="reveal text-center" style="transition-delay:100ms">
              <div class="mx-auto mb-5 flex h-14 w-14 items-center justify-center rounded-full bg-brand text-white font-heading text-xl font-bold shadow-sm shadow-brand/20">2</div>
              <h3 class="mb-2 font-heading text-lg font-semibold text-primary">Pengembangan &amp; Iterasi</h3>
              <p class="font-body text-sm leading-relaxed text-muted-fg">Sprint mingguan dengan build progresif. Anda melihat hasil setiap akhir sprint dan memberikan feedback langsung.</p>
            </div>
            <div class="reveal text-center" style="transition-delay:200ms">
              <div class="mx-auto mb-5 flex h-14 w-14 items-center justify-center rounded-full bg-brand text-white font-heading text-xl font-bold shadow-sm shadow-brand/20">3</div>
              <h3 class="mb-2 font-heading text-lg font-semibold text-primary">Launch &amp; Dukungan</h3>
              <p class="font-body text-sm leading-relaxed text-muted-fg">Deploy ke production, migrasi data, training tim, dan pendampingan penuh selama masa transisi. Dukungan teknis 90 hari pasca-launch.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- ========== CTA (primary dark) ========== -->
      <section class="relative overflow-hidden border-t border-border bg-primary py-20 sm:py-24" aria-label="CTA">
        <div class="pointer-events-none absolute inset-0" style="background-image: radial-gradient(circle, rgba(45,107,255,0.12) 1px, transparent 1px); background-size: 40px 40px;" aria-hidden="true"></div>
        <div class="pointer-events-none absolute left-1/2 top-1/2 h-96 w-96 -translate-x-1/2 -translate-y-1/2 rounded-full bg-brand/10 blur-3xl" aria-hidden="true"></div>
        <div class="relative mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
          <h2 class="font-heading text-3xl font-bold tracking-tight text-brand-fg sm:text-4xl">Siap membangun sistem POS Anda?</h2>
          <p class="mx-auto mt-4 max-w-lg font-body text-base leading-relaxed text-brand-fg/60">Ceritakan kebutuhan toko Anda. Kami akan jelaskan pendekatan kami — tanpa sales pitch, tanpa kewajiban.</p>
          <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
            <a href="https://wa.me/6281234567890" target="_blank" rel="noopener noreferrer" class="inline-flex h-12 items-center gap-2 rounded-md bg-brand px-8 text-base font-semibold text-brand-fg transition-colors hover:bg-brand-hover shadow-lg shadow-brand/20">
              <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
              Mulai di WhatsApp
            </a>
            <a href="mailto:hello@dirait.id" class="inline-flex h-12 items-center gap-2 rounded-md border border-brand-fg/15 px-8 text-base font-medium text-brand-fg transition-colors hover:bg-brand-fg/10">
              <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
              Kirim Email
            </a>
          </div>
        </div>
      </section>
    
