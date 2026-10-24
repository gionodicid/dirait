<?php
// Site header shared by the homepage and the service pages: Services dropdown on desktop, full-screen menu on mobile.
$navCurrent = $navCurrent ?? '';
$navLinks = ['Platform' => '/#platform', 'Customers' => '/#customers', 'Pricing' => '/#pricing', 'FAQ' => '/#faq'];
?>
<header class="sticky top-3 z-20 mx-3 mt-3 desk:mx-auto desk:max-w-[1100px]" data-nav>
  <div class="relative flex items-center justify-between rounded-[14px] border border-line bg-surface/85 py-2 pr-2 pl-[18px] backdrop-blur-md">
    <a class="flex items-center gap-2 text-[17px] font-bold" href="<?= e(url('/')) ?>"><img class="size-[22px]" src="<?= e(url('/favicon.svg')) ?>" width="22" height="22" alt="">dirait</a>

    <nav class="hidden items-center gap-1 text-sm desk:flex" aria-label="Main">
      <div class="relative" data-dropdown>
        <button class="group flex items-center gap-1 rounded-lg px-3 py-1.5 text-muted hover:bg-canvas hover:text-ink aria-expanded:bg-canvas aria-expanded:text-ink" type="button" aria-expanded="false" aria-controls="services-menu" data-dropdown-button>Services<i class="size-3.5 transition-transform group-aria-expanded:rotate-180" data-lucide="chevron-down"></i></button>
        <div id="services-menu" class="invisible absolute top-[calc(100%+14px)] left-1/2 w-[640px] -translate-x-1/2 translate-y-1 rounded-[18px] border border-line bg-surface p-3 opacity-0 shadow-[0_30px_70px_-25px_rgb(7_21_48/.35)] transition duration-150 data-open:visible data-open:translate-y-0 data-open:opacity-100" data-dropdown-panel>
          <div class="grid grid-cols-2 gap-2">
<?php foreach (site()['services'] as $group => $items): ?>
            <div>
              <p class="px-3 pt-2 pb-1.5 font-mono text-[11px] text-subtle uppercase"><?= e($group) ?></p>
<?php foreach ($items as $slug => $s): $href = '/services/' . $slug; ?>
              <a class="flex items-start gap-3 rounded-xl px-3 py-2.5 hover:bg-canvas <?= $href === $navCurrent ? 'bg-canvas' : '' ?>" href="<?= e(url($href)) ?>"<?= $href === $navCurrent ? ' aria-current="page"' : '' ?>>
                <span class="faq-icon size-8 rounded-[9px] text-[15px]"><i data-lucide="<?= e($s['icon']) ?>"></i></span>
                <span class="leading-tight"><b class="block text-[14px] font-semibold text-ink"><?= e($s['label']) ?></b><span class="text-[12.5px] text-muted"><?= e($s['blurb']) ?></span></span>
              </a>
<?php endforeach; ?>
            </div>
<?php endforeach; ?>
          </div>
        </div>
      </div>
<?php foreach ($navLinks as $label => $href): ?>
      <a class="rounded-lg px-3 py-1.5 text-muted hover:bg-canvas hover:text-ink" href="<?= e(url($href)) ?>"><?= e($label) ?></a>
<?php endforeach; ?>
    </nav>

    <div class="flex items-center gap-2">
      <a class="btn-primary max-[420px]:hidden" href="<?= e(url('/#contact')) ?>">Start a project</a>
      <button class="grid size-10 place-items-center rounded-[10px] border border-line bg-surface desk:hidden" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-menu" data-menu-button><i class="size-5" data-lucide="menu"></i></button>
    </div>
  </div>

  <div id="mobile-menu" class="mt-2 hidden max-h-[calc(100dvh-90px)] overflow-y-auto rounded-[18px] border border-line bg-surface p-3 shadow-[0_30px_70px_-25px_rgb(7_21_48/.35)] data-open:block desk:hidden!" data-menu-panel>
<?php foreach (site()['services'] as $group => $items): ?>
    <p class="px-3 pt-2 pb-1.5 font-mono text-[11px] text-subtle uppercase"><?= e($group) ?></p>
    <div class="grid gap-0.5 sm:grid-cols-2">
<?php foreach ($items as $slug => $s): $href = '/services/' . $slug; ?>
      <a class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-[15px] font-medium hover:bg-canvas <?= $href === $navCurrent ? 'bg-canvas text-brand' : '' ?>" href="<?= e(url($href)) ?>"><span class="faq-icon size-8 rounded-[9px] text-[15px]"><i data-lucide="<?= e($s['icon']) ?>"></i></span><?= e($s['label']) ?></a>
<?php endforeach; ?>
    </div>
<?php endforeach; ?>
    <div class="mt-2 grid grid-cols-2 gap-1 border-t border-line pt-3">
<?php foreach ($navLinks as $label => $href): ?>
      <a class="rounded-xl px-3 py-2.5 text-[15px] text-muted hover:bg-canvas hover:text-ink" href="<?= e(url($href)) ?>"><?= e($label) ?></a>
<?php endforeach; ?>
    </div>
    <a class="btn-brand mt-3 w-full" href="<?= e(url('/#contact')) ?>">Start a project</a>
  </div>
</header>
<script>
  // Open/close the Services dropdown (click, hover on desktop, Escape, outside click) and the mobile menu.
  (() => {
    const nav = document.querySelector('[data-nav]');
    const pairs = [
      [nav.querySelector('[data-dropdown-button]'), nav.querySelector('[data-dropdown-panel]')],
      [nav.querySelector('[data-menu-button]'), nav.querySelector('[data-menu-panel]')],
    ];
    const set = ([button, panel], open) => {
      button.setAttribute('aria-expanded', open);
      panel.toggleAttribute('data-open', open);
    };
    const closeAll = () => pairs.forEach((p) => set(p, false));
    pairs.forEach((p) => p[0].addEventListener('click', (e) => {
      e.stopPropagation();
      const open = p[0].getAttribute('aria-expanded') !== 'true';
      closeAll();
      set(p, open);
    }));
    const dropdown = nav.querySelector('[data-dropdown]');
    let timer;
    if (matchMedia('(hover: hover)').matches) {
      dropdown.addEventListener('mouseenter', () => { clearTimeout(timer); set(pairs[0], true); });
      dropdown.addEventListener('mouseleave', () => { timer = setTimeout(() => set(pairs[0], false), 150); });
    }
    document.addEventListener('click', (e) => { if (!nav.contains(e.target)) closeAll(); });
    document.addEventListener('keydown', (e) => { if (e.key === 'Escape') closeAll(); });
  })();
</script>
