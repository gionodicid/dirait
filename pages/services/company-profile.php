<?php

$page = [
    'layout' => 'brand',
    'title' => 'Company Profile Website — DIRAIT',
    'description' => 'Company Profile Website berbasis Next.js dengan CMS internal. Desain pixel-perfect dari Figma, SEO optimal, multi-perangkat, dan performa tinggi.',
    'canonical' => 'https://dirait.com/services/company-profile',
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
            <h1 class="font-heading text-4xl font-bold tracking-tight text-balance text-primary sm:text-5xl lg:text-6xl">Company Profile Website yang Membangun Kredibilitas Bisnis Anda</h1>
            <p class="mt-6 max-w-xl font-body text-lg leading-relaxed text-muted-fg">
              Website company profile modern berbasis Next.js dengan CMS internal yang mudah dikelola. Desain pixel-perfect dari Figma, dioptimalkan untuk SEO, dan performa tinggi di semua perangkat.
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
            <h2 class="font-heading text-3xl font-semibold tracking-tight text-primary sm:text-4xl">Website Profile yang Membuat Bisnis Anda Tampil Profesional</h2>
            <p class="mt-3 font-body text-base leading-relaxed text-muted-fg">Kami membangun company profile website yang tidak hanya indah, tetapi juga fungsional dan mudah dikelola.</p>
          </div>
          <div id="features-grid" class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 sm:gap-5">
            <!-- 1. Desain Pixel-Perfect -->
            <div class="reveal group relative flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:0ms">
              <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
              </div>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">Desain Pixel-Perfect</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Hasil akhir sesuai persis dengan desain Figma Anda. Setiap detail — tipografi, spasi, warna — diterjemahkan tanpa kompromi.</p>
            </div>
            <!-- 2. CMS Internal -->
            <div class="reveal group relative flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:60ms">
              <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                </svg>
              </div>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">CMS Internal</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Kelola konten website secara mandiri. Ubah teks, gambar, dan halaman kapan saja tanpa perlu campur tangan developer.</p>
            </div>
            <!-- 3. SEO & Performa -->
            <div class="reveal group relative flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:120ms">
              <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                </svg>
              </div>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">SEO & Performa</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Dioptimalkan untuk mesin pencari dengan struktur semantic HTML, meta tags, sitemap, dan kecepatan load yang tinggi.</p>
            </div>
            <!-- 4. Responsif Multi-Perangkat -->
            <div class="reveal group relative flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:180ms">
              <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                </svg>
              </div>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">Responsif Multi-Perangkat</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Tampil sempurna di desktop, tablet, dan smartphone. Pengalaman pengguna yang konsisten di semua ukuran layar.</p>
            </div>
            <!-- 5. Cepat & Ringan -->
            <div class="reveal group relative flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:240ms">
              <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                </svg>
              </div>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">Cepat & Ringan</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Dibangun dengan Next.js untuk performa maksimal. Image optimization, lazy loading, dan code splitting untuk waktu muat yang minimal.</p>
            </div>
            <!-- 6. Keamanan Standar -->
            <div class="reveal group relative flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:300ms">
              <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                </svg>
              </div>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">Keamanan Standar</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">HTTPS, validasi input, proteksi CSRF, dan penyimpanan data yang aman. Website Anda terlindungi dari ancaman umum.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- ========== 3. CASE STUDY ========== -->
      <section class="border-t border-border bg-surface py-20 sm:py-24" aria-label="Studi Kasus">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="reveal mb-12 max-w-2xl">
            <p class="mb-3 font-body text-sm font-medium uppercase tracking-widest text-brand">Studi Kasus</p>
            <h2 class="font-heading text-3xl font-semibold tracking-tight text-primary sm:text-4xl">Company Profile + CMS untuk Perusahaan Logistik</h2>
            <p class="mt-3 font-body text-base leading-relaxed text-muted-fg">Website company profile lengkap dengan CMS internal untuk perusahaan logistik nasional. Dari Figma ke production dalam waktu 5 minggu.</p>
          </div>
          <div class="reveal grid gap-6 lg:grid-cols-5 lg:gap-10">
            <div class="lg:col-span-3">
              <div class="flex h-full flex-col border border-border bg-background p-6 sm:p-8">
                <h3 class="mb-4 font-heading text-lg font-semibold text-primary">Ringkasan Proyek</h3>
                <p class="mb-4 font-body text-sm leading-relaxed text-muted-fg">
                  Klien kami — perusahaan logistik dengan armada 200+ kendaraan — membutuhkan website company profile yang modern, informatif, dan mudah diperbarui secara mandiri. Mereka ingin menampilkan layanan, armada, coverage area, dan artikel secara profesional.
                </p>
                <p class="mb-4 font-body text-sm leading-relaxed text-muted-fg">
                  Kami membangun website berbasis <strong>Next.js</strong> dengan <strong>CMS internal</strong> untuk mengelola konten secara mandiri. Desain dibuat <strong>pixel-perfect dari Figma</strong> dan di-deploy menggunakan <strong>Ubuntu + Docker + Nginx</strong> untuk performa dan keandalan server. Database menggunakan <strong>PostgreSQL</strong> untuk menyimpan data halaman dan artikel.
                </p>
                <div class="mt-auto flex flex-wrap gap-2">
                  <span class="rounded-md bg-brand-soft px-3 py-1 font-body text-xs font-medium text-brand">Next.js</span>
                  <span class="rounded-md bg-brand-soft px-3 py-1 font-body text-xs font-medium text-brand">PostgreSQL</span>
                  <span class="rounded-md bg-brand-soft px-3 py-1 font-body text-xs font-medium text-brand">CMS Internal</span>
                  <span class="rounded-md bg-brand-soft px-3 py-1 font-body text-xs font-medium text-brand">Figma</span>
                  <span class="rounded-md bg-brand-soft px-3 py-1 font-body text-xs font-medium text-brand">Ubuntu</span>
                  <span class="rounded-md bg-brand-soft px-3 py-1 font-body text-xs font-medium text-brand">Docker</span>
                  <span class="rounded-md bg-brand-soft px-3 py-1 font-body text-xs font-medium text-brand">Nginx</span>
                </div>
              </div>
            </div>
            <div class="lg:col-span-2 space-y-4">
              <div class="flex items-start gap-4 border border-border bg-background p-5">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-brand-soft">
                  <svg class="h-5 w-5 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-heading text-sm font-semibold text-primary">Pixel-Perfect dari Figma</h4>
                  <p class="mt-1 font-body text-sm leading-relaxed text-muted-fg">Desain Figma diterjemahkan ke kode dengan presisi tinggi — setiap margin, warna, dan tipografi sesuai persis dengan mockup.</p>
                </div>
              </div>
              <div class="flex items-start gap-4 border border-border bg-background p-5">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-brand-soft">
                  <svg class="h-5 w-5 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-heading text-sm font-semibold text-primary">CMS Mudah Digunakan</h4>
                  <p class="mt-1 font-body text-sm leading-relaxed text-muted-fg">Tim konten klien dapat menambah, mengedit, dan menghapus halaman serta artikel tanpa menyentuh kode — cukup melalui dashboard CMS internal.</p>
                </div>
              </div>
              <div class="flex items-start gap-4 border border-border bg-background p-5">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-brand-soft">
                  <svg class="h-5 w-5 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-heading text-sm font-semibold text-primary">Deploy Enterprise</h4>
                  <p class="mt-1 font-body text-sm leading-relaxed text-muted-fg">Website di-deploy di server Ubuntu menggunakan Docker dan Nginx — memberikan stabilitas, keamanan, dan kemudahan maintenance jangka panjang.</p>
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
            <h2 class="font-heading text-3xl font-semibold tracking-tight text-primary sm:text-4xl">Bagaimana Kami Membangun Website Profil Anda</h2>
          </div>
          <div class="grid gap-4 sm:grid-cols-3 sm:gap-6">
            <div class="reveal relative border border-border bg-surface p-6 sm:p-8" style="transition-delay:0ms">
              <span class="mb-6 flex h-12 w-12 items-center justify-center rounded-full bg-brand text-lg font-bold text-brand-fg font-heading">1</span>
              <h3 class="mb-2 font-heading text-lg font-semibold text-primary">Discovery & Desain</h3>
              <p class="font-body text-sm leading-relaxed text-muted-fg">Kami memahami brand, target audiens, dan tujuan website Anda. Tim desainer membuat mockup Figma yang merepresentasikan identitas bisnis Anda.</p>
            </div>
            <div class="reveal relative border border-border bg-surface p-6 sm:p-8" style="transition-delay:80ms">
              <span class="mb-6 flex h-12 w-12 items-center justify-center rounded-full bg-brand text-lg font-bold text-brand-fg font-heading">2</span>
              <h3 class="mb-2 font-heading text-lg font-semibold text-primary">Development & CMS</h3>
              <p class="font-body text-sm leading-relaxed text-muted-fg">Next.js dikembangkan dengan desain pixel-perfect dan CMS internal terintegrasi. Anda dapat preview perubahan sebelum go-live.</p>
            </div>
            <div class="reveal relative border border-border bg-surface p-6 sm:p-8" style="transition-delay:160ms">
              <span class="mb-6 flex h-12 w-12 items-center justify-center rounded-full bg-brand text-lg font-bold text-brand-fg font-heading">3</span>
              <h3 class="mb-2 font-heading text-lg font-semibold text-primary">Deploy & Training</h3>
              <p class="font-body text-sm leading-relaxed text-muted-fg">Deploy ke server production (Ubuntu/Docker/Nginx) dengan SSL. Kami berikan pelatihan penggunaan CMS agar tim Anda dapat mengelola konten secara mandiri.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- ========== 5. CTA ========== -->
      <section id="cta" class="relative overflow-hidden border-t border-border bg-primary py-20 sm:py-24" aria-label="CTA">
        <div class="pointer-events-none absolute inset-0" style="background-image: radial-gradient(circle, rgba(45,107,255,0.12) 1px, transparent 1px); background-size: 40px 40px;" aria-hidden="true"></div>
        <div class="pointer-events-none absolute left-1/2 top-1/2 h-96 w-96 -translate-x-1/2 -translate-y-1/2 rounded-full bg-brand/10 blur-3xl" aria-hidden="true"></div>
        <div class="relative mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
          <h2 class="font-heading text-3xl font-bold tracking-tight text-brand-fg sm:text-4xl">Siap Membangun Company Profile Website?</h2>
          <p class="mx-auto mt-4 max-w-lg font-body text-base leading-relaxed text-brand-fg/60">
            Ceritakan visi website Anda. Kami bantu wujudkan company profile yang profesional dan kredibel — tanpa sales pitch, tanpa kewajiban.
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
    
