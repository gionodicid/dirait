    <header class="sticky top-0 z-50 border-b border-border bg-background/90 backdrop-blur-md">
      <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
        <a href="<?= e(url('/')) ?>" class="flex items-center gap-2.5">
          <svg class="h-8 w-8" viewBox="0 0 32 32" fill="none" aria-hidden="true">
            <circle cx="16" cy="6" r="2.5" fill="#2D6BFF" /><circle cx="6" cy="16" r="2" fill="#2D6BFF" opacity=".6" /><circle cx="26" cy="16" r="2" fill="#2D6BFF" opacity=".6" /><circle cx="10" cy="26" r="1.8" fill="#2D6BFF" opacity=".4" /><circle cx="22" cy="26" r="1.8" fill="#2D6BFF" opacity=".4" /><circle cx="16" cy="16" r="2.5" fill="#2D6BFF" opacity=".8" />
            <line x1="16" y1="6" x2="6" y2="16" stroke="#2D6BFF" stroke-width=".8" opacity=".4" /><line x1="16" y1="6" x2="26" y2="16" stroke="#2D6BFF" stroke-width=".8" opacity=".4" /><line x1="6" y1="16" x2="10" y2="26" stroke="#2D6BFF" stroke-width=".8" opacity=".3" /><line x1="26" y1="16" x2="22" y2="26" stroke="#2D6BFF" stroke-width=".8" opacity=".3" /><line x1="10" y1="26" x2="22" y2="26" stroke="#2D6BFF" stroke-width=".8" opacity=".3" /><line x1="16" y1="6" x2="16" y2="16" stroke="#2D6BFF" stroke-width=".8" opacity=".5" /><line x1="6" y1="16" x2="16" y2="16" stroke="#2D6BFF" stroke-width=".8" opacity=".3" /><line x1="26" y1="16" x2="16" y2="16" stroke="#2D6BFF" stroke-width=".8" opacity=".3" /><line x1="16" y1="16" x2="10" y2="26" stroke="#2D6BFF" stroke-width=".8" opacity=".3" /><line x1="16" y1="16" x2="22" y2="26" stroke="#2D6BFF" stroke-width=".8" opacity=".3" />
          </svg>
          <div class="flex flex-col leading-none">
            <span class="font-heading text-lg font-bold tracking-tight text-primary">DIRAIT</span>
            <span class="font-body text-[9px] font-medium uppercase tracking-[.2em] text-muted">Est. 2023</span>
          </div>
        </a>
        <nav class="hidden items-center gap-8 lg:flex" aria-label="Navigasi utama">
          <a href="<?= e(url('/#services')) ?>" class="font-body text-sm font-medium text-muted-fg transition-colors hover:text-brand">Layanan</a>
          <a href="<?= e(url('/#pricing')) ?>" class="font-body text-sm font-medium text-muted-fg transition-colors hover:text-brand">Harga</a>
        </nav>
        <div class="flex items-center gap-3">
          <a href="<?= e(url('/#cta')) ?>" class="hidden rounded-md bg-brand px-4 py-2 font-body text-sm font-semibold text-brand-fg transition-colors hover:bg-brand-hover lg:inline-flex">Hubungi Kami</a>
          <button id="mobile-menu-btn" class="inline-flex h-10 w-10 items-center justify-center rounded-md border border-border text-foreground lg:hidden" aria-label="Buka menu" aria-expanded="false">
            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
          </button>
        </div>
      </div>
    </header>

    <div id="mobile-nav" class="fixed inset-0 z-[60] lg:hidden" role="dialog" aria-modal="true" aria-label="Menu navigasi" style="display:none">
      <div id="mobile-backdrop" class="mobile-backdrop absolute inset-0 bg-primary/30 backdrop-blur-sm"></div>
      <div id="mobile-panel" class="mobile-panel absolute right-0 top-0 flex h-full w-full max-w-sm flex-col border-l border-border bg-background">
        <div class="flex items-center justify-between border-b border-border px-4 py-4">
          <div class="flex items-center gap-2">
            <svg class="h-7 w-7" viewBox="0 0 32 32" fill="none" aria-hidden="true">
              <circle cx="16" cy="6" r="2.5" fill="#2D6BFF" /><circle cx="6" cy="16" r="2" fill="#2D6BFF" opacity=".6" /><circle cx="26" cy="16" r="2" fill="#2D6BFF" opacity=".6" /><circle cx="16" cy="16" r="2.5" fill="#2D6BFF" opacity=".8" />
              <line x1="16" y1="6" x2="6" y2="16" stroke="#2D6BFF" stroke-width=".8" opacity=".4" /><line x1="16" y1="6" x2="26" y2="16" stroke="#2D6BFF" stroke-width=".8" opacity=".4" /><line x1="6" y1="16" x2="16" y2="16" stroke="#2D6BFF" stroke-width=".8" opacity=".3" /><line x1="26" y1="16" x2="16" y2="16" stroke="#2D6BFF" stroke-width=".8" opacity=".3" />
            </svg>
            <span class="font-heading text-lg font-bold text-primary">DIRAIT</span>
          </div>
          <button id="mobile-close-btn" class="inline-flex h-10 w-10 items-center justify-center rounded-md border border-border" aria-label="Tutup menu">
            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
          </button>
        </div>
        <nav class="flex-1 px-4 py-6" aria-label="Navigasi mobile">
          <ul class="space-y-1">
            <li><a href="<?= e(url('/')) ?>" class="mobile-link block rounded-md px-3 py-3 font-body text-base font-medium text-foreground transition-colors hover:bg-brand-soft">Beranda</a></li>
            <li><a href="<?= e(url('/#services')) ?>" class="mobile-link block rounded-md px-3 py-3 font-body text-base font-medium text-foreground transition-colors hover:bg-brand-soft">Layanan</a></li>
            <li><a href="<?= e(url('/#pricing')) ?>" class="mobile-link block rounded-md px-3 py-3 font-body text-base font-medium text-foreground transition-colors hover:bg-brand-soft">Harga</a></li>
          </ul>
        </nav>
        <div class="border-t border-border px-4 py-4">
          <a href="<?= e(url('/#cta')) ?>" class="mobile-link block rounded-md bg-brand px-3 py-2.5 text-center font-body text-sm font-semibold text-brand-fg">Hubungi Kami</a>
        </div>
      </div>
    </div>
