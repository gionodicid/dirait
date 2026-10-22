<?php

$page = [
    'layout' => 'brand',
    'title' => 'Platform IoT Kustom — DIRAIT',
    'description' => 'Dashboard IoT yang mengubah data sensor menjadi keputusan operasional. Integrasi MQTT, WebSocket, multi-tenant, dan widget kustom untuk monitoring real-time.',
    'canonical' => 'https://dirait.id/services/iot',
];
?>
      <!-- ========== HERO ========== -->
      <section class="relative overflow-hidden border-b border-border" aria-label="Hero">
        <div class="pointer-events-none absolute inset-0 network-grid" aria-hidden="true"></div>
        <div class="pointer-events-none absolute -right-40 -top-40 h-[500px] w-[500px] rounded-full bg-brand/[.06] blur-3xl" aria-hidden="true"></div>
        <div class="pointer-events-none absolute -left-20 bottom-0 h-64 w-64 rounded-full bg-brand/[.03] blur-3xl" aria-hidden="true"></div>
        <div class="brand-line hidden sm:block" aria-hidden="true" style="left: max(1rem, calc((100vw - 80rem) / 2 + 1rem))"></div>
        <div class="relative mx-auto max-w-7xl px-4 py-20 sm:px-6 sm:py-28 lg:px-8 lg:py-36">
          <div class="max-w-3xl sm:pl-8">
            <p class="mb-4 font-body text-sm font-medium uppercase tracking-widest text-brand">Platform IoT</p>
            <h1 class="font-heading text-4xl font-bold tracking-tight text-balance text-primary sm:text-5xl lg:text-6xl">
              Dashboard IoT yang Mengubah Data Sensor Menjadi Keputusan
            </h1>
            <p class="mt-6 max-w-xl font-body text-lg leading-relaxed text-muted-fg">
              Platform monitoring real-time dengan integrasi MQTT, WebSocket, dan arsitektur multi-tenant — menghubungkan hardware dan software dalam satu ekosistem yang andal.
            </p>
            <div class="mt-10 flex flex-wrap items-center gap-4">
              <a href="<?= e(url('/')) ?>#cta" class="inline-flex h-12 items-center rounded-md bg-brand px-8 text-base font-semibold text-brand-fg transition-colors hover:bg-brand-hover shadow-sm shadow-brand/20">Diskusikan Proyek IoT</a>
              <a href="#features" class="inline-flex h-12 items-center rounded-md border border-primary/15 bg-transparent px-8 text-base font-medium text-primary transition-colors hover:bg-brand-soft hover:border-brand/30">Lihat Fitur</a>
            </div>
          </div>
        </div>
      </section>

      <!-- ========== FEATURES / WHAT WE BUILD ========== -->
      <section id="features" class="relative border-b border-border py-20 sm:py-24">
        <div class="pointer-events-none absolute inset-0 network-grid-light opacity-60" aria-hidden="true"></div>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="reveal mb-12 max-w-2xl">
            <p class="mb-3 font-body text-sm font-medium uppercase tracking-widest text-brand">Apa yang Kami Bangun</p>
            <h2 class="font-heading text-3xl font-semibold tracking-tight text-primary sm:text-4xl">Fitur Unggulan Platform IoT</h2>
            <p class="mt-3 font-body text-base leading-relaxed text-muted-fg">Dashboard, integrasi protokol, dan sistem alert yang dirancang untuk kebutuhan monitoring dan kontrol perangkat IoT Anda.</p>
          </div>
          <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 sm:gap-5">
            <div class="reveal group flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8">
              <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
              </div>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">Dashboard Real-Time</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Visualisasi data sensor secara langsung dengan grafik dan widget yang dapat dikustomisasi. Pantau suhu, kelembaban, tekanan, dan metrik lainnya dalam hitungan detik.</p>
            </div>
            <div class="reveal group flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:60ms">
              <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
              </div>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">Integrasi MQTT</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Koneksi broker-based menggunakan Mosquitto untuk komunikasi device-to-cloud yang ringan dan andal. Mendukung publish/subscribe pattern dengan QoS bertingkat.</p>
            </div>
            <div class="reveal group flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:120ms">
              <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
              </div>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">WebSocket Events</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Pengiriman event secara real-time ke browser dan aplikasi client melalui Laravel Echo Server. Data sensor dan notifikasi langsung sampai tanpa perlu polling.</p>
            </div>
            <div class="reveal group flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:180ms">
              <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
              </div>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">Multi-Tenant</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Struktur data berbasis tenant yang memungkinkan satu instance melayani banyak klien dengan isolasi data penuh. Setiap tenant memiliki device, user, dan konfigurasi sendiri.</p>
            </div>
            <div class="reveal group flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:240ms">
              <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
              </div>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">Alert & Monitoring</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Notifikasi berbasis threshold yang dapat dikonfigurasi. Kirim alert otomatis melalui Telegram, email, atau WebSocket ketika nilai sensor melebihi batas yang ditentukan.</p>
            </div>
            <div class="reveal group flex flex-col border border-border bg-surface p-6 transition-all duration-200 hover:border-brand/40 hover:bg-brand-soft/50 hover:shadow-sm hover:shadow-brand/5 sm:p-8" style="transition-delay:300ms">
              <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg>
              </div>
              <h3 class="mb-2 font-heading text-xl font-semibold tracking-tight text-primary">Widget Kustom</h3>
              <p class="flex-1 font-body text-sm leading-relaxed text-muted-fg">Drag-and-resize widget yang memungkinkan pengguna menyusun dashboard sesuai preferensi. Tampilan fleksibel dengan chart, gauge, indikator, dan tabel yang bisa diatur ulang.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- ========== CASE STUDIES ========== -->
      <section id="case-studies" class="border-t border-border bg-surface py-20 sm:py-24" aria-label="Studi Kasus">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="reveal mb-12 max-w-2xl">
            <p class="mb-3 font-body text-sm font-medium uppercase tracking-widest text-brand">Studi Kasus</p>
            <h2 class="font-heading text-3xl font-semibold tracking-tight text-primary sm:text-4xl">Proyek IoT yang Telah Kami Selesaikan</h2>
            <p class="mt-3 font-body text-base leading-relaxed text-muted-fg">Dua implementasi nyata yang menunjukkan kemampuan tim dalam menghubungkan hardware dan software.</p>
          </div>
          <div class="grid gap-6 sm:gap-8 lg:grid-cols-2">
            <article class="reveal flex flex-col border border-border bg-background p-6 transition-all duration-200 hover:border-brand/30 sm:p-8">
              <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2"/></svg>
              </div>
              <h3 class="mb-3 font-heading text-xl font-semibold text-primary">IoT Data Observer Dashboard</h3>
              <p class="mb-4 font-body text-sm leading-relaxed text-muted-fg">Dashboard IoT dinamis dengan widget yang dapat dikustomisasi oleh pengguna. Menggabungkan protokol MQTT untuk pengiriman data sensor dan WebSocket untuk update real-time ke browser. Dilengkapi RBAC (Role-Based Access Control) dan autentikasi dua faktor (2FA).</p>
              <ul class="mb-6 space-y-2">
                <li class="flex items-start gap-2.5">
                  <svg class="mt-0.5 h-4 w-4 shrink-0 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                  <span class="font-body text-sm text-foreground">Kolaborasi erat dengan hardware engineer untuk integrasi sensor</span>
                </li>
                <li class="flex items-start gap-2.5">
                  <svg class="mt-0.5 h-4 w-4 shrink-0 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                  <span class="font-body text-sm text-foreground">Tumpukan teknologi: React, PostgreSQL, MQTT, WebSocket</span>
                </li>
                <li class="flex items-start gap-2.5">
                  <svg class="mt-0.5 h-4 w-4 shrink-0 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                  <span class="font-body text-sm text-foreground">Widget drag-and-resize untuk tampilan dashboard yang fleksibel</span>
                </li>
              </ul>
              <div class="mt-auto flex flex-wrap gap-2">
                <span class="rounded-md bg-brand-soft px-2.5 py-1 font-body text-xs font-medium text-brand">React</span>
                <span class="rounded-md bg-brand-soft px-2.5 py-1 font-body text-xs font-medium text-brand">PostgreSQL</span>
                <span class="rounded-md bg-brand-soft px-2.5 py-1 font-body text-xs font-medium text-brand">MQTT</span>
                <span class="rounded-md bg-brand-soft px-2.5 py-1 font-body text-xs font-medium text-brand">WebSocket</span>
              </div>
            </article>
            <article class="reveal flex flex-col border border-border bg-background p-6 transition-all duration-200 hover:border-brand/30 sm:p-8" style="transition-delay:80ms">
              <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              </div>
              <h3 class="mb-3 font-heading text-xl font-semibold text-primary">Uptime Monitoring & Alert System</h3>
              <p class="mb-4 font-body text-sm leading-relaxed text-muted-fg">Sistem monitoring uptime terjadwal yang secara otomatis memeriksa ketersediaan layanan dan perangkat. Mengirimkan notifikasi langsung ke Telegram ketika terjadi downtime atau anomali, dengan otomatisasi berbasis cron.</p>
              <ul class="mb-6 space-y-2">
                <li class="flex items-start gap-2.5">
                  <svg class="mt-0.5 h-4 w-4 shrink-0 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                  <span class="font-body text-sm text-foreground">Pengecekan uptime otomatis dengan jadwal cron yang fleksibel</span>
                </li>
                <li class="flex items-start gap-2.5">
                  <svg class="mt-0.5 h-4 w-4 shrink-0 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                  <span class="font-body text-sm text-foreground">Notifikasi real-time via Telegram Bot untuk respons cepat</span>
                </li>
                <li class="flex items-start gap-2.5">
                  <svg class="mt-0.5 h-4 w-4 shrink-0 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                  <span class="font-body text-sm text-foreground">Dibangun dengan shell scripting dan Playwright untuk pengujian</span>
                </li>
              </ul>
              <div class="mt-auto flex flex-wrap gap-2">
                <span class="rounded-md bg-brand-soft px-2.5 py-1 font-body text-xs font-medium text-brand">Shell Scripting</span>
                <span class="rounded-md bg-brand-soft px-2.5 py-1 font-body text-xs font-medium text-brand">Playwright</span>
                <span class="rounded-md bg-brand-soft px-2.5 py-1 font-body text-xs font-medium text-brand">Telegram Bot API</span>
                <span class="rounded-md bg-brand-soft px-2.5 py-1 font-body text-xs font-medium text-brand">Cron</span>
              </div>
            </article>
          </div>
        </div>
      </section>

      <!-- ========== APPROACH ========== -->
      <section class="relative border-y border-border py-20 sm:py-24" aria-label="Pendekatan">
        <div class="pointer-events-none absolute inset-0 network-grid-light opacity-60" aria-hidden="true"></div>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="reveal mx-auto mb-14 max-w-2xl text-center">
            <p class="mb-3 font-body text-sm font-medium uppercase tracking-widest text-brand">Pendekatan Kami</p>
            <h2 class="font-heading text-3xl font-semibold tracking-tight text-primary sm:text-4xl">Tiga Langkah Menuju Platform IoT</h2>
          </div>
          <div class="grid gap-5 sm:grid-cols-3 sm:gap-6">
            <div class="reveal flex flex-col items-center text-center">
              <div class="mb-5 flex h-16 w-16 items-center justify-center rounded-full bg-brand text-white shadow-lg shadow-brand/20">
                <span class="font-heading text-2xl font-bold">1</span>
              </div>
              <h3 class="mb-2 font-heading text-lg font-semibold text-primary">Discovery & Arsitektur</h3>
              <p class="font-body text-sm leading-relaxed text-muted-fg">Kami mempelajari kebutuhan sensor dan perangkat Anda, lalu merancang arsitektur sistem — mulai dari protokol komunikasi hingga struktur database tenant.</p>
            </div>
            <div class="reveal flex flex-col items-center text-center" style="transition-delay:80ms">
              <div class="mb-5 flex h-16 w-16 items-center justify-center rounded-full bg-brand text-white shadow-lg shadow-brand/20">
                <span class="font-heading text-2xl font-bold">2</span>
              </div>
              <h3 class="mb-2 font-heading text-lg font-semibold text-primary">Integrasi & Dashboard</h3>
              <p class="font-body text-sm leading-relaxed text-muted-fg">Koneksikan hardware dengan platform melalui MQTT, bangun dashboard real-time, dan konfigurasikan sistem alert sesuai threshold operasional Anda.</p>
            </div>
            <div class="reveal flex flex-col items-center text-center" style="transition-delay:160ms">
              <div class="mb-5 flex h-16 w-16 items-center justify-center rounded-full bg-brand text-white shadow-lg shadow-brand/20">
                <span class="font-heading text-2xl font-bold">3</span>
              </div>
              <h3 class="mb-2 font-heading text-lg font-semibold text-primary">Deploy & Monitoring</h3>
              <p class="font-body text-sm leading-relaxed text-muted-fg">Deploy ke production, konfigurasi monitoring uptime, dan pastikan sistem berjalan dengan dokumentasi lengkap serta pelatihan tim operasional Anda.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- ========== CTA ========== -->
      <section class="relative overflow-hidden border-t border-border bg-primary py-20 sm:py-24" aria-label="CTA">
        <div class="pointer-events-none absolute inset-0" style="background-image: radial-gradient(circle, rgba(45,107,255,0.12) 1px, transparent 1px); background-size: 40px 40px;" aria-hidden="true"></div>
        <div class="pointer-events-none absolute left-1/2 top-1/2 h-96 w-96 -translate-x-1/2 -translate-y-1/2 rounded-full bg-brand/10 blur-3xl" aria-hidden="true"></div>
        <div class="relative mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
          <h2 class="font-heading text-3xl font-bold tracking-tight text-brand-fg sm:text-4xl">Siap Membangun Platform IoT?</h2>
          <p class="mx-auto mt-4 max-w-lg font-body text-base leading-relaxed text-brand-fg/60">
            Ceritakan kebutuhan hardware dan data yang ingin Anda monitor. Kami akan rancang solusi yang tepat — tanpa kewajiban.
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
    
