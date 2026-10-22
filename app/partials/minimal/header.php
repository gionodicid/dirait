<?php
$isHome = $layout === 'home';
$link = static fn (string $hash): string => $isHome ? $hash : url('/') . $hash;
?>
    <header class="border-b border-black bg-white">
      <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-6 sm:px-8">
        <a href="<?= $isHome ? '#' : e(url('/')) ?>" class="flex items-center gap-3">
          <svg class="h-7 w-7" viewBox="0 0 32 32" fill="none" aria-hidden="true">
            <circle cx="16" cy="6" r="2.5" fill="#000" />
            <circle cx="6" cy="16" r="2" fill="#002FA7" />
            <circle cx="26" cy="16" r="2" fill="#002FA7" />
            <circle cx="10" cy="26" r="1.8" fill="#000" opacity=".4" />
            <circle cx="22" cy="26" r="1.8" fill="#000" opacity=".4" />
            <circle cx="16" cy="16" r="2.5" fill="#000" />
            <line x1="16" y1="6" x2="6" y2="16" stroke="#000" stroke-width=".6" opacity=".3" />
            <line x1="16" y1="6" x2="26" y2="16" stroke="#000" stroke-width=".6" opacity=".3" />
            <line x1="6" y1="16" x2="10" y2="26" stroke="#000" stroke-width=".6" opacity=".25" />
            <line x1="26" y1="16" x2="22" y2="26" stroke="#000" stroke-width=".6" opacity=".25" />
            <line x1="10" y1="26" x2="22" y2="26" stroke="#000" stroke-width=".6" opacity=".25" />
            <line x1="16" y1="6" x2="16" y2="16" stroke="#000" stroke-width=".6" opacity=".4" />
            <line x1="6" y1="16" x2="16" y2="16" stroke="#000" stroke-width=".6" opacity=".25" />
            <line x1="26" y1="16" x2="16" y2="16" stroke="#000" stroke-width=".6" opacity=".25" />
          </svg>
          <div class="flex flex-col leading-none">
            <span class="text-sm font-bold tracking-tight text-black">DIRAIT</span>
            <span class="text-[9px] font-medium uppercase tracking-[.2em] text-gray-500">Est. 2023</span>
          </div>
        </a>
        <nav class="hidden items-center gap-8 lg:flex" aria-label="Main navigation">
          <a href="<?= e($link('#services')) ?>" class="text-xs font-medium uppercase tracking-widest text-gray-600 transition-colors hover:text-black">Services</a>
          <a href="<?= e($link('#pricing')) ?>" class="text-xs font-medium uppercase tracking-widest text-gray-600 transition-colors hover:text-black">Pricing</a>
          <a href="#" class="text-xs font-medium uppercase tracking-widest text-gray-600 transition-colors hover:text-black">About</a>
          <a href="#" class="text-xs font-medium uppercase tracking-widest text-gray-600 transition-colors hover:text-black">Blog</a>
        </nav>
        <div class="flex items-center gap-4">
          <a href="<?= e($link('#cta')) ?>" class="hidden border border-ikb bg-ikb px-5 py-2 text-xs font-medium uppercase tracking-wider text-white transition-colors hover:bg-ikb-dark lg:inline-flex">Get in Touch</a>
          <button id="mobile-menu-btn" class="inline-flex h-8 w-8 items-center justify-center text-black lg:hidden" aria-label="Open menu" aria-expanded="false">
            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
              <path stroke-linecap="square" stroke-linejoin="miter" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </header>

    <div id="mobile-nav" class="fixed inset-0 z-[60] lg:hidden" role="dialog" aria-modal="true" aria-label="Navigation menu" style="display:none">
      <div id="mobile-backdrop" class="mobile-backdrop absolute inset-0 bg-black/80"></div>
      <div id="mobile-panel" class="mobile-panel absolute right-0 top-0 flex h-full w-full max-w-xs flex-col bg-black">
        <div class="flex items-center justify-between border-b border-white/10 px-6 py-5">
          <span class="text-sm font-bold tracking-tight text-white">DIRAIT</span>
          <button id="mobile-close-btn" class="inline-flex h-8 w-8 items-center justify-center text-white" aria-label="Close menu">
            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
              <path stroke-linecap="square" stroke-linejoin="miter" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <nav class="flex-1 px-6 py-8" aria-label="Mobile navigation">
          <ul class="space-y-2">
            <li><a href="<?= e($link('#services')) ?>" class="mobile-link block py-3 text-base font-medium uppercase tracking-wider text-white transition-opacity hover:opacity-60">Services</a></li>
            <li><a href="<?= e($link('#pricing')) ?>" class="mobile-link block py-3 text-base font-medium uppercase tracking-wider text-white transition-opacity hover:opacity-60">Pricing</a></li>
            <li><a href="#" class="mobile-link block py-3 text-base font-medium uppercase tracking-wider text-white transition-opacity hover:opacity-60">About</a></li>
            <li><a href="#" class="mobile-link block py-3 text-base font-medium uppercase tracking-wider text-white transition-opacity hover:opacity-60">Blog</a></li>
          </ul>
        </nav>
        <div class="border-t border-white/10 px-6 py-6 space-y-4">
          <a href="<?= e($link('#cta')) ?>" class="mobile-link block w-full border border-ikb bg-ikb px-4 py-2.5 text-center text-xs font-medium uppercase tracking-wider text-white">Get in Touch</a>
        </div>
      </div>
    </div>
