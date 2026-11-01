<?php
// Closing CTA and footer shared by the showcase index and detail pages.
?>
  <div id="contact" class="relative mt-section overflow-hidden rounded-3xl border border-line bg-surface px-6 py-[clamp(48px,7vw,90px)] text-center before:absolute before:-top-[120px] before:left-1/2 before:h-[300px] before:w-[600px] before:-translate-x-1/2 before:bg-[radial-gradient(closest-side,rgb(0_47_167/.25),transparent)]">
    <h2 class="heading-section relative mx-auto mt-0 max-w-[18ch]">Want a system like these?</h2><p class="relative mx-auto mt-3 max-w-[56ch] text-muted">Tell us what your team runs on today. We'll show you how we would build it — no sales pitch, no obligation.</p>
    <div class="relative mt-7 flex flex-wrap justify-center gap-2.5"><a class="btn-brand" href="https://wa.me/6281384934615">WhatsApp</a><a class="btn-secondary" href="mailto:hello@dirait.id">Send an email</a></div>
    <p class="relative mt-5 text-[13px] text-muted">Free consultation — we reply within one business day.</p></div>

  <footer class="flex flex-col gap-6 py-10 text-[13px] text-muted desk:flex-row desk:justify-between">
    <span>© <?= date('Y') ?> Dirait · Cibubur, Jawa Barat — Indonesia</span>
    <nav class="flex flex-wrap gap-x-4 gap-y-2"><a class="hover:text-ink" href="<?= e(url('/showcases')) ?>">Showcases</a><?php foreach (site()['showcases'] as $slug => $s): ?><a class="hover:text-ink" href="<?= e(url('/showcases/' . $slug)) ?>"><?= e($s['name']) ?></a><?php endforeach; ?></nav>
  </footer>
