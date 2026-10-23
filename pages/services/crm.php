<?php

$page = [
    'layout' => 'brand',
    'title' => 'Sistem CRM Kustom — DIRAIT',
    'description' => 'CRM dengan pipeline Kanban, integrasi WhatsApp API, dashboard real-time, dan multi-role RBAC. Dibangun untuk tim sales dan perusahaan jasa.',
    'canonical' => 'https://dirait.com/services/crm',
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
            <h1 class="font-heading text-4xl font-bold tracking-tight text-balance text-primary sm:text-5xl lg:text-6xl">CRM yang Bekerja Sesuai Pipeline Penjualan Anda</h1>
            <p class="mt-6 max-w-xl font-body text-lg leading-relaxed text-muted-fg">Integrasi WhatsApp API, kanban drag-and-drop, dashboard real-time, dan otomatisasi sales — dibangun untuk tim penjualan dan perusahaan jasa yang ingin closing lebih cepat.</p>
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
            <h2 class="font-heading text-3xl font-semibold tracking-tight text-primary sm:text-4xl">Apa yang Kami Bangun dalam CRM Anda</h2>
          </div>
          <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 sm:gap-5">
            <!-- 1. Pipeline & Kanban -->
            <div class="reveal group relative flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:0ms">
              <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2"/></svg>
              </div>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">Pipeline &amp; Kanban</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Kelola prospek dengan papan Kanban yang sepenuhnya drag-and-drop. Pindahkan lead antar-tahap pipeline secara visual — dari prospecting hingga closing.</p>
            </div>
            <!-- 2. WhatsApp Integration -->
            <div class="reveal group relative flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:60ms">
              <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
              </div>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">WhatsApp Integration</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Integrasi WhatsApp API untuk mengirim pesan template, notifikasi otomatis, dan bridging chat real-time langsung dari dashboard CRM ke nomor pelanggan.</p>
            </div>
            <!-- 3. Dashboard & Report -->
            <div class="reveal group relative flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:120ms">
              <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
              </div>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">Dashboard &amp; Report</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Dashboard interaktif dengan grafik pipeline, scorecard tim, konversi lead, dan analitik penjualan. Ekspor laporan dalam format CSV atau XLSX.</p>
            </div>
            <!-- 4. Multi-Role & RBAC -->
            <div class="reveal group relative flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:180ms">
              <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/></svg>
              </div>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">Multi-Role &amp; RBAC</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Atur hak akses berdasarkan peran — sales, manager, dan admin. Setiap pengguna hanya melihat data dan fitur yang relevan dengan tanggung jawabnya.</p>
            </div>
            <!-- 5. Real-Time Updates -->
            <div class="reveal group relative flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:240ms">
              <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
              </div>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">Real-Time Updates</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Semua perubahan — lead baru, perpindahan pipeline, dan update deal — terlihat instan di seluruh tim berkat koneksi WebSocket real-time.</p>
            </div>
            <!-- 6. Export & Integrasi -->
            <div class="reveal group relative flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:300ms">
              <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
              </div>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">Export &amp; Integrasi</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Ekspor data ke CSV/XLSX, integrasikan dengan sistem akuntansi atau ERP via REST API. Webhook untuk notifikasi otomatis ke aplikasi eksternal.</p>
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
              <span class="mb-3 inline-block rounded-md bg-brand-soft px-3 py-1 font-body text-xs font-semibold text-brand">CRM · WhatsApp API</span>
              <h3 class="mb-3 font-heading text-xl font-semibold tracking-tight text-primary">CRM dengan Integrasi WhatsApp untuk Perusahaan Jasa</h3>
              <p class="mb-4 font-body text-sm leading-relaxed text-muted-fg">WhatsApp API terintegrasi langsung dengan CRM untuk mengirim pesan otomatis, bridging chat real-time via Express.js, dashboard monitoring. Seluruh data tersimpan di PostgreSQL.</p>
              <div class="mb-5 flex flex-wrap gap-2">
                <span class="rounded-md bg-background px-2.5 py-1 font-body text-xs font-medium text-muted-fg">Laravel</span>
                <span class="rounded-md bg-background px-2.5 py-1 font-body text-xs font-medium text-muted-fg">Express.js</span>
                <span class="rounded-md bg-background px-2.5 py-1 font-body text-xs font-medium text-muted-fg">PostgreSQL</span>
              </div>
              <div class="mt-auto flex items-center gap-3 border-t border-border pt-4">
                <div class="flex h-10 w-10 items-center justify-center rounded-full bg-primary text-white font-heading text-sm font-bold">PJ</div>
                <div>
                  <p class="font-heading text-sm font-semibold text-primary">Perusahaan Jasa Keuangan</p>
                  <p class="font-body text-xs text-muted-fg">Jakarta, Indonesia</p>
                </div>
              </div>
            </div>
            <!-- Case Study 2 -->
            <div class="reveal flex flex-col border border-border p-6 sm:p-8" style="transition-delay:100ms">
              <span class="mb-3 inline-block rounded-md bg-brand-soft px-3 py-1 font-body text-xs font-semibold text-brand">Sales Force · Kanban</span>
              <h3 class="mb-3 font-heading text-xl font-semibold tracking-tight text-primary">Sales Force App dengan Kanban Pipeline</h3>
              <p class="mb-4 font-body text-sm leading-relaxed text-muted-fg">Aplikasi sales force dengan Kanban drag-and-drop antar-tahap pipeline, multi-tenant, multi-role RBAC. Dibangun dengan React dan shadcn/ui di frontend.</p>
              <div class="mb-5 flex flex-wrap gap-2">
                <span class="rounded-md bg-background px-2.5 py-1 font-body text-xs font-medium text-muted-fg">React</span>
                <span class="rounded-md bg-background px-2.5 py-1 font-body text-xs font-medium text-muted-fg">Laravel</span>
                <span class="rounded-md bg-background px-2.5 py-1 font-body text-xs font-medium text-muted-fg">shadcn/ui</span>
                <span class="rounded-md bg-background px-2.5 py-1 font-body text-xs font-medium text-muted-fg">PostgreSQL</span>
              </div>
              <div class="mt-auto flex items-center gap-3 border-t border-border pt-4">
                <div class="flex h-10 w-10 items-center justify-center rounded-full bg-primary text-white font-heading text-sm font-bold">SP</div>
                <div>
                  <p class="font-heading text-sm font-semibold text-primary">Software House Klien Eropa</p>
                  <p class="font-body text-xs text-muted-fg">Remote · Tim Internasional</p>
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
            <h2 class="font-heading text-3xl font-semibold tracking-tight text-primary sm:text-4xl">Tiga langkah menuju CRM yang tepat.</h2>
          </div>
          <div class="grid gap-6 sm:grid-cols-3">
            <div class="reveal text-center" style="transition-delay:0ms">
              <div class="mx-auto mb-5 flex h-14 w-14 items-center justify-center rounded-full bg-brand text-white font-heading text-xl font-bold shadow-sm shadow-brand/20">1</div>
              <h3 class="mb-2 font-heading text-lg font-semibold text-primary">Mapping Pipeline</h3>
              <p class="font-body text-sm leading-relaxed text-muted-fg">Kami petakan alur penjualan Anda — dari lead masuk hingga closing — lalu merancang pipeline kustom yang sesuai dengan proses bisnis tim sales Anda.</p>
            </div>
            <div class="reveal text-center" style="transition-delay:100ms">
              <div class="mx-auto mb-5 flex h-14 w-14 items-center justify-center rounded-full bg-brand text-white font-heading text-xl font-bold shadow-sm shadow-brand/20">2</div>
              <h3 class="mb-2 font-heading text-lg font-semibold text-primary">Integrasi &amp; Otomatisasi</h3>
              <p class="font-body text-sm leading-relaxed text-muted-fg">Kami menghubungkan WhatsApp API, integrasi email, dan aturan otomatisasi — sehingga follow-up berjalan otomatis dan tim bisa fokus menutup deal.</p>
            </div>
            <div class="reveal text-center" style="transition-delay:200ms">
              <div class="mx-auto mb-5 flex h-14 w-14 items-center justify-center rounded-full bg-brand text-white font-heading text-xl font-bold shadow-sm shadow-brand/20">3</div>
              <h3 class="mb-2 font-heading text-lg font-semibold text-primary">Deploy &amp; Adopsi</h3>
              <p class="font-body text-sm leading-relaxed text-muted-fg">Kami deploy sistem, migrasi data pelanggan, dan melatih tim sales Anda. Dukungan penuh selama masa transisi dengan pendampingan 90 hari pasca-launch.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- ========== CTA (primary dark) ========== -->
      <section class="relative overflow-hidden border-t border-border bg-primary py-20 sm:py-24" aria-label="CTA">
        <div class="pointer-events-none absolute inset-0" style="background-image: radial-gradient(circle, rgba(45,107,255,0.12) 1px, transparent 1px); background-size: 40px 40px;" aria-hidden="true"></div>
        <div class="pointer-events-none absolute left-1/2 top-1/2 h-96 w-96 -translate-x-1/2 -translate-y-1/2 rounded-full bg-brand/10 blur-3xl" aria-hidden="true"></div>
        <div class="relative mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
          <h2 class="font-heading text-3xl font-bold tracking-tight text-brand-fg sm:text-4xl">Siap membangun CRM Anda?</h2>
          <p class="mx-auto mt-4 max-w-lg font-body text-base leading-relaxed text-brand-fg/60">Ceritakan proses penjualan Anda. Kami akan jelaskan bagaimana CRM kustom bisa meningkatkan closing rate tim Anda — tanpa sales pitch, tanpa kewajiban.</p>
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
    
