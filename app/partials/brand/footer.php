<?php $contact = site()['contact']['brand']; ?>
    <footer class="border-t border-border bg-surface" role="contentinfo">
      <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-4 lg:gap-8">
          <div class="sm:col-span-2 lg:col-span-1">
            <a href="<?= e(url('/')) ?>" class="flex items-center gap-2">
              <svg class="h-7 w-7" viewBox="0 0 32 32" fill="none" aria-hidden="true">
                <circle cx="16" cy="6" r="2.5" fill="#2D6BFF" /><circle cx="6" cy="16" r="2" fill="#2D6BFF" opacity=".6" /><circle cx="26" cy="16" r="2" fill="#2D6BFF" opacity=".6" /><circle cx="16" cy="16" r="2.5" fill="#2D6BFF" opacity=".8" />
                <line x1="16" y1="6" x2="6" y2="16" stroke="#2D6BFF" stroke-width=".8" opacity=".4" /><line x1="16" y1="6" x2="26" y2="16" stroke="#2D6BFF" stroke-width=".8" opacity=".4" /><line x1="6" y1="16" x2="16" y2="16" stroke="#2D6BFF" stroke-width=".8" opacity=".3" /><line x1="26" y1="16" x2="16" y2="16" stroke="#2D6BFF" stroke-width=".8" opacity=".3" />
              </svg>
              <div class="flex flex-col leading-none">
                <span class="font-heading text-lg font-bold tracking-tight text-primary">DIRAIT</span>
                <span class="font-body text-[8px] font-medium uppercase tracking-[.18em] text-muted">Est. 2023</span>
              </div>
            </a>
            <p class="mt-3 max-w-xs font-body text-sm leading-relaxed text-muted-fg">Software house berbasis Jakarta yang membangun platform bisnis kustom untuk perusahaan di Asia Tenggara dan Eropa.</p>
          </div>
          <div>
            <h3 class="mb-4 font-heading text-sm font-semibold uppercase tracking-wider text-muted">Layanan</h3>
            <ul class="space-y-2.5">
<?php foreach (site()['brand_services'] as $service): ?>
              <li><a href="<?= e(url('/services/' . $service['slug'])) ?>" class="font-body text-sm text-foreground/70 transition-colors hover:text-brand"><?= e($service['label']) ?></a></li>
<?php endforeach; ?>
            </ul>
          </div>
          <div>
            <h3 class="mb-4 font-heading text-sm font-semibold uppercase tracking-wider text-muted">Perusahaan</h3>
            <ul class="space-y-2.5">
              <li><a href="<?= e(url('/')) ?>" class="font-body text-sm text-foreground/70 transition-colors hover:text-brand">Tentang</a></li>
              <li><a href="#" class="font-body text-sm text-foreground/70 transition-colors hover:text-brand">Blog</a></li>
              <li><a href="#" class="font-body text-sm text-foreground/70 transition-colors hover:text-brand">Kebijakan Privasi</a></li>
            </ul>
          </div>
          <div>
            <h3 class="mb-4 font-heading text-sm font-semibold uppercase tracking-wider text-muted">Kontak</h3>
            <address class="not-italic space-y-2.5">
              <p class="font-body text-sm text-foreground/70"><?= e($contact['address']) ?></p>
              <p><a href="mailto:<?= e($contact['email']) ?>" class="font-body text-sm text-foreground/70 transition-colors hover:text-brand"><?= e($contact['email']) ?></a></p>
              <p><a href="<?= e($contact['whatsapp']) ?>" target="_blank" rel="noopener noreferrer" class="font-body text-sm text-foreground/70 transition-colors hover:text-brand"><?= e($contact['phone']) ?></a></p>
            </address>
          </div>
        </div>
        <div class="mt-12 border-t border-border pt-6">
          <p class="font-body text-xs text-muted-fg">&copy; 2025 DIRAIT. Hak cipta dilindungi.</p>
        </div>
      </div>
    </footer>

    <a href="<?= e($contact['whatsapp']) ?>" target="_blank" rel="noopener noreferrer" class="wa-float fixed bottom-6 right-6 z-50 flex h-14 w-14 items-center justify-center rounded-full bg-[#25D366] text-white transition-transform hover:scale-110" aria-label="Hubungi kami via WhatsApp">
      <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
      </svg>
    </a>
