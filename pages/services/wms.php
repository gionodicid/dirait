<?php

$page = [
    'layout' => 'brand',
    'title' => 'WMS Kustom — DIRAIT',
    'description' => 'Sistem Manajemen Gudang (WMS) yang melacak stok secara real-time di berbagai lokasi, zona, dan channel. Integrasi API, pelaporan, geolokasi, dan mobile support.',
    'canonical' => 'https://dirait.id/services/wms',
    'styles' => <<<'CSS'
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
      <!-- ========== 1. HERO ========== -->
      <section class="relative overflow-hidden border-b border-border" aria-label="Hero">
        <div class="pointer-events-none absolute inset-0 network-grid" aria-hidden="true"></div>
        <div class="node-float n1" aria-hidden="true"></div>
        <div class="node-float n2" aria-hidden="true"></div>
        <div class="node-float n3" aria-hidden="true"></div>
        <div class="node-float n4" aria-hidden="true"></div>
        <div class="node-float n5" aria-hidden="true"></div>
        <div class="node-float n6" aria-hidden="true"></div>
        <svg class="hero-lines" aria-hidden="true" preserveAspectRatio="none">
          <line x1="75%" y1="15%" x2="85%" y2="35%" />
          <line x1="85%" y1="35%" x2="65%" y2="55%" />
          <line x1="65%" y1="55%" x2="80%" y2="72%" />
          <line x1="80%" y1="72%" x2="60%" y2="82%" />
          <line x1="50%" y1="20%" x2="75%" y2="15%" />
          <line x1="40%" y1="60%" x2="65%" y2="55%" />
        </svg>
        <div class="pointer-events-none absolute -right-40 -top-40 h-[500px] w-[500px] rounded-full bg-brand/[.06] blur-3xl" aria-hidden="true"></div>
        <div class="pointer-events-none absolute -left-20 bottom-0 h-64 w-64 rounded-full bg-brand/[.03] blur-3xl" aria-hidden="true"></div>
        <div class="brand-line hidden sm:block" aria-hidden="true" style="left: max(1rem, calc((100vw - 80rem) / 2 + 1rem))"></div>
        <div class="relative mx-auto max-w-7xl px-4 py-20 sm:px-6 sm:py-28 lg:px-8 lg:py-36">
          <div class="max-w-3xl sm:pl-8">
            <p class="mb-4 font-body text-sm font-medium uppercase tracking-widest text-brand">Layanan</p>
            <h1 class="font-heading text-4xl font-bold tracking-tight text-balance text-primary sm:text-5xl lg:text-6xl">Manajemen Gudang Real-Time di Seluruh Lokasi</h1>
            <p class="mt-6 max-w-xl font-body text-lg leading-relaxed text-muted-fg">
              Pantau stok secara langsung, kelola multi-gudang dan zona, serta integrasikan dengan POS, e-commerce, dan akuntansi Anda — dalam satu platform WMS yang dibangun sesuai kebutuhan.
            </p>
            <div class="mt-10 flex flex-wrap items-center gap-4">
              <a href="<?= e(url('/')) ?>#cta" class="inline-flex h-12 items-center rounded-md bg-brand px-8 text-base font-semibold text-brand-fg transition-colors hover:bg-brand-hover shadow-sm shadow-brand/20">Diskusikan Proyek Anda</a>
              <a href="#features" class="inline-flex h-12 items-center rounded-md border border-primary/15 bg-transparent px-8 text-base font-medium text-primary transition-colors hover:bg-brand-soft hover:border-brand/30">Lihat Fitur</a>
            </div>
          </div>
        </div>
      </section>

      <!-- ========== 2. FEATURES ========== -->
      <section id="features" class="relative border-b border-border py-20 sm:py-24">
        <div class="pointer-events-none absolute inset-0 network-grid-light opacity-60" aria-hidden="true"></div>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="reveal mb-12 max-w-2xl">
            <p class="mb-3 font-body text-sm font-medium uppercase tracking-widest text-brand">Apa yang Kami Bangun</p>
            <h2 class="font-heading text-3xl font-semibold tracking-tight text-primary sm:text-4xl">Fitur WMS Unggulan</h2>
            <p class="mt-3 font-body text-base leading-relaxed text-muted-fg">Setiap modul dirancang untuk alur kerja gudang Anda, bukan sebaliknya.</p>
          </div>
          <div id="features-grid" class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 sm:gap-5">
            <!-- 1. Real-Time Stock -->
            <div class="reveal group relative flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:0ms">
              <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                </svg>
              </div>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">Real-Time Stock</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Lacak pergerakan inventaris di seluruh lokasi secara langsung. Setiap transaksi masuk dan keluar tercatat otomatis tanpa jeda.</p>
            </div>
            <!-- 2. Multi-Lokasi & Zona -->
            <div class="reveal group relative flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:60ms">
              <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6h16.5M3.75 12h16.5M3.75 18h16.5" />
                </svg>
              </div>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">Multi-Lokasi & Zona</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Kelola beberapa gudang, zona, dan bin location dalam satu antarmuka. Atur tata letak dan optimalkan picking route.</p>
            </div>
            <!-- 3. Integration API -->
            <div class="reveal group relative flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:120ms">
              <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25M6.75 17.25L1.5 12l5.25-5.25M14.25 3.75l-4.5 16.5" />
                </svg>
              </div>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">Integration API</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Hubungkan WMS dengan POS, e-commerce, marketplace, software akuntansi, dan ERP — data sinkron otomatis tanpa duplikasi.</p>
            </div>
            <!-- 4. Reporting & Export -->
            <div class="reveal group relative flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:180ms">
              <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                </svg>
              </div>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">Reporting & Export</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Laporan pergerakan stok, reorder point alerts, dan analisis inventaris. Ekspor ke CSV atau XLSX dalam satu klik.</p>
            </div>
            <!-- 5. Mapping & Geolokasi -->
            <div class="reveal group relative flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:240ms">
              <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z" />
                </svg>
              </div>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">Mapping & Geolokasi</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Visualisasi gudang dan aset berbasis peta Leaflet. Pantau lokasi inventaris dan armada secara geografis real-time.</p>
            </div>
            <!-- 6. Mobile Support -->
            <div class="reveal group relative flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:300ms">
              <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                </svg>
              </div>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">Mobile Support</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Akses WMS dari smartphone. Cocok untuk operasi lapangan — receiving, picking, packing, dan stock opname dari genggaman.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- ========== 3. CASE STUDY ========== -->
      <section class="border-t border-border bg-surface py-20 sm:py-24" aria-label="Studi Kasus">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="reveal mb-12 max-w-2xl">
            <p class="mb-3 font-body text-sm font-medium uppercase tracking-widest text-brand">Studi Kasus</p>
            <h2 class="font-heading text-3xl font-semibold tracking-tight text-primary sm:text-4xl">Spraying Module Reporting Application</h2>
            <p class="mt-3 font-body text-base leading-relaxed text-muted-fg">Aplikasi pelaporan multi-platform untuk modul penyemprotan lapangan dengan pemetaan, BLE, dan arsitektur multi-tenant.</p>
          </div>
          <div class="reveal grid gap-6 lg:grid-cols-5 lg:gap-10">
            <div class="lg:col-span-3">
              <div class="flex h-full flex-col border border-border bg-background p-6 sm:p-8">
                <h3 class="mb-4 font-heading text-lg font-semibold text-primary">Ringkasan Proyek</h3>
                <p class="mb-4 font-body text-sm leading-relaxed text-muted-fg">
                  Klien kami membutuhkan sistem pelaporan untuk modul penyemprotan (spraying module) yang digunakan di lapangan — alat yang dipasang pada kendaraan atau drone untuk aplikasi pestisida/pupuk. Tantangan utamanya: petugas lapangan perlu mencatat dan melaporkan data penyemprotan secara <em>real-time</em> dari lokasi terpencil, sementara manajer di kantor pusat harus bisa memonitor dari dashboard web.
                </p>
                <p class="mb-4 font-body text-sm leading-relaxed text-muted-fg">
                  Kami membangun aplikasi pelaporan lintas platform yang mencakup <strong>web dashboard</strong> (React) untuk manajer, <strong>aplikasi Android</strong> (React Native) untuk operator lapangan, dan backend terpadu (Node.js + PostgreSQL) yang melayani <strong>arsitektur multi-tenant</strong> — setiap klien memiliki data, pengaturan, dan branding terpisah.
                </p>
                <div class="mt-auto flex flex-wrap gap-2">
                  <span class="rounded-md bg-brand-soft px-3 py-1 font-body text-xs font-medium text-brand">React</span>
                  <span class="rounded-md bg-brand-soft px-3 py-1 font-body text-xs font-medium text-brand">React Native</span>
                  <span class="rounded-md bg-brand-soft px-3 py-1 font-body text-xs font-medium text-brand">Node.js</span>
                  <span class="rounded-md bg-brand-soft px-3 py-1 font-body text-xs font-medium text-brand">PostgreSQL</span>
                  <span class="rounded-md bg-brand-soft px-3 py-1 font-body text-xs font-medium text-brand">Leaflet</span>
                  <span class="rounded-md bg-brand-soft px-3 py-1 font-body text-xs font-medium text-brand">BLE</span>
                </div>
              </div>
            </div>
            <div class="lg:col-span-2 space-y-4">
              <div class="flex items-start gap-4 border border-border bg-background p-5">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-brand-soft">
                  <svg class="h-5 w-5 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-heading text-sm font-semibold text-primary">Mapping & Visualisasi</h4>
                  <p class="mt-1 font-body text-sm leading-relaxed text-muted-fg">Peta Leaflet interaktif menampilkan lokasi penyemprotan, rute, dan area coverage secara geografis.</p>
                </div>
              </div>
              <div class="flex items-start gap-4 border border-border bg-background p-5">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-brand-soft">
                  <svg class="h-5 w-5 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17.25v-.328c0-.383.076-.765.223-1.124l.707-2.17a.844.844 0 01.798-.59h.984m0 0c.143 0 .28.046.397.134.116.088.196.212.223.356l.707 2.17c.147.36.223.741.223 1.124v.328M15 17.25v.328c0 .383.076.765.223 1.124l.707 2.17a.844.844 0 00.798.59h.984m0 0c.143 0 .28.046.397.134.116.088.196.212.223.356l.707 2.17c.147.36.223.741.223 1.124v.328M12 6.75a2.25 2.25 0 000-4.5 2.25 2.25 0 000 4.5zm0 0c2.485 0 4.5 1.755 4.5 3.92v.33c0 .248-.046.492-.134.72l-.707 2.17a.844.844 0 01-.798.59h-3.722a.844.844 0 01-.798-.59l-.707-2.17A1.82 1.82 0 017.5 11.05v-.33c0-2.165 2.015-3.92 4.5-3.92z" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-heading text-sm font-semibold text-primary">BLE pada Android</h4>
                  <p class="mt-1 font-body text-sm leading-relaxed text-muted-fg">Koneksi Bluetooth Low Energy ke modul hardware untuk pengambilan data sensor secara nirkabel langsung dari aplikasi React Native.</p>
                </div>
              </div>
              <div class="flex items-start gap-4 border border-border bg-background p-5">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-brand-soft">
                  <svg class="h-5 w-5 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-heading text-sm font-semibold text-primary">Multi-Tenant</h4>
                  <p class="mt-1 font-body text-sm leading-relaxed text-muted-fg">Arsitektur yang memungkinkan setiap klien memiliki data, pengaturan, dan branding terpisah dalam satu basis kode.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ========== 4. APPROACH ========== -->
      <section class="relative border-t border-border py-20 sm:py-24" aria-label="Pendekatan">
        <div class="pointer-events-none absolute inset-0 network-grid-light opacity-60" aria-hidden="true"></div>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="reveal mx-auto mb-14 max-w-2xl text-center">
            <p class="mb-3 font-body text-sm font-medium uppercase tracking-widest text-brand">Pendekatan</p>
            <h2 class="font-heading text-3xl font-semibold tracking-tight text-primary sm:text-4xl">Bagaimana Kami Membangun WMS Anda</h2>
          </div>
          <div class="grid gap-4 sm:grid-cols-3 sm:gap-6">
            <div class="reveal relative border border-border bg-surface p-6 sm:p-8" style="transition-delay:0ms">
              <span class="mb-6 flex h-12 w-12 items-center justify-center rounded-full bg-brand text-lg font-bold text-brand-fg font-heading">1</span>
              <h3 class="mb-2 font-heading text-lg font-semibold text-primary">Discovery & Mapping</h3>
              <p class="font-body text-sm leading-relaxed text-muted-fg">Kami mempelajari alur gudang Anda — dari receiving hingga shipping — dan memetakan kebutuhan integrasi dengan sistem existing.</p>
            </div>
            <div class="reveal relative border border-border bg-surface p-6 sm:p-8" style="transition-delay:80ms">
              <span class="mb-6 flex h-12 w-12 items-center justify-center rounded-full bg-brand text-lg font-bold text-brand-fg font-heading">2</span>
              <h3 class="mb-2 font-heading text-lg font-semibold text-primary">Build & Iterate</h3>
              <p class="font-body text-sm leading-relaxed text-muted-fg">Pengembangan dilakukan dalam sprint mingguan dengan demo tiap akhir sprint. Feedback langsung menentukan prioritas fitur berikutnya.</p>
            </div>
            <div class="reveal relative border border-border bg-surface p-6 sm:p-8" style="transition-delay:160ms">
              <span class="mb-6 flex h-12 w-12 items-center justify-center rounded-full bg-brand text-lg font-bold text-brand-fg font-heading">3</span>
              <h3 class="mb-2 font-heading text-lg font-semibold text-primary">Deploy & Optimize</h3>
              <p class="font-body text-sm leading-relaxed text-muted-fg">Setelah UAT, kami deploy ke production dan memberikan pendampingan. Performa terus dipantau untuk optimasi lanjutan.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- ========== 5. CTA ========== -->
      <section id="cta" class="relative overflow-hidden border-t border-border bg-primary py-20 sm:py-24" aria-label="CTA">
        <div class="pointer-events-none absolute inset-0" style="background-image: radial-gradient(circle, rgba(45,107,255,0.12) 1px, transparent 1px); background-size: 40px 40px;" aria-hidden="true"></div>
        <div class="pointer-events-none absolute left-1/2 top-1/2 h-96 w-96 -translate-x-1/2 -translate-y-1/2 rounded-full bg-brand/10 blur-3xl" aria-hidden="true"></div>
        <div class="relative mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
          <h2 class="font-heading text-3xl font-bold tracking-tight text-brand-fg sm:text-4xl">Siap Mengelola Gudang Secara Real-Time?</h2>
          <p class="mx-auto mt-4 max-w-lg font-body text-base leading-relaxed text-brand-fg/60">
            Ceritakan tantangan gudang Anda. Kami akan rancang sistem yang tepat — tanpa sales pitch, tanpa kewajiban.
          </p>
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
    
