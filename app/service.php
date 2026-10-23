<?php
// Service page in the homepage design. $page comes from pages/services*/<slug>.php as plain data.

$lang = $page['lang'];
$t = [
    'id' => [
        'nav' => ['Platform' => '/#platform', 'Klien' => '/#customers', 'Harga' => '/#pricing', 'FAQ' => '/#faq'],
        'start' => 'Mulai proyek',
        'call' => 'Diskusikan proyek Anda',
        'see' => 'Lihat fitur',
        'stack' => 'Dibangun dengan',
        'faq_title' => 'Sebelum panggilan pertama.',
        'faq_lead' => 'Jawaban singkat untuk pertanyaan yang paling sering kami terima.',
        'help_title' => 'Masih ada pertanyaan?',
        'help_text' => 'Bicara langsung dengan engineer yang akan membangunnya — biasanya dibalas dalam sehari.',
        'chat' => 'Chat di WhatsApp →',
        'more' => 'Layanan lainnya',
        'more_title' => 'Sistem lain yang kami bangun.',
        'email' => 'Kirim email',
        'reply' => 'Konsultasi gratis — kami balas dalam satu hari kerja.',
    ],
    'en' => [
        'nav' => ['Platform' => '/#platform', 'Customers' => '/#customers', 'Pricing' => '/#pricing', 'FAQ' => '/#faq'],
        'start' => 'Start a project',
        'call' => 'Book a free call',
        'see' => 'See what we build',
        'stack' => 'Built with',
        'faq_title' => 'Before the first call.',
        'faq_lead' => 'Straight answers to what clients ask us most.',
        'help_title' => 'Still have questions?',
        'help_text' => 'Talk to the engineers who will build it — usually within a day.',
        'chat' => 'Chat on WhatsApp →',
        'more' => 'More services',
        'more_title' => 'Other systems we build.',
        'email' => 'Send an email',
        'reply' => 'Free consultation — we reply within one business day.',
    ],
][$lang];

$whatsapp = 'https://wa.me/6281384934615';
$email = 'mailto:hello@dirait.id';

// Sibling services in the same language, for the "more services" grid and the footer.
$siblings = $lang === 'id'
    ? array_map(fn ($s) => ['href' => '/services/' . $s['slug'], 'label' => $s['label']], site()['brand_services'])
    : array_map(fn ($s) => ['href' => '/services-swiss/' . $s['slug'], 'label' => $s['title']], site()['services']);
$current = '/' . trim((string) parse_url($page['canonical'], PHP_URL_PATH), '/');

function accent(string $text): string
{
    return preg_replace('/\*(.+?)\*/', '<span class="text-gradient">$1</span>', e($text));
}

$hero = $page['hero'];
$img = fn (string $name) => url('/images/services/' . $name . '.webp') . '?v=' . @filemtime(APP_ROOT . '/images/services/' . $name . '.webp');
?>
<!doctype html>
<html lang="<?= e($lang) ?>">
<head>
<?php readfile(APP_ROOT . '/app/partials/analytics.html'); ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title><?= e($page['title']) ?></title>
    <meta name="description" content="<?= e($page['description']) ?>" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="<?= e($page['canonical']) ?>" />
<?php require APP_ROOT . '/app/partials/meta.php'; ?>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700&family=Geist+Mono:wght@400;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?= e(url('/assets/css/homepage.css')) ?>?v=<?= @filemtime(APP_ROOT . '/assets/css/homepage.css') ?>" />
</head>
<body>
<header class="sticky top-3 z-10 mx-auto mt-3 flex max-w-[1100px] items-center justify-between rounded-[14px] border border-line bg-surface/80 py-2 pr-2 pl-[18px] backdrop-blur-md max-desk:mx-3">
  <a class="flex items-center gap-2 text-[17px] font-bold" href="<?= e(url('/')) ?>"><img class="size-[22px]" src="<?= e(url('/favicon.svg')) ?>" width="22" height="22" alt="">dirait</a>
  <nav class="hidden gap-1 text-sm desk:flex">
<?php foreach ($t['nav'] as $label => $href): ?>
    <a class="rounded-lg px-3 py-1.5 text-muted hover:bg-canvas hover:text-ink" href="<?= e(url($href)) ?>"><?= e($label) ?></a>
<?php endforeach; ?>
  </nav>
  <a class="btn-primary" href="#contact"><?= e($t['start']) ?></a>
</header>

<main class="mx-auto max-w-[1180px] px-gutter">
  <div class="relative pt-[clamp(60px,8vw,100px)] text-center before:absolute before:inset-x-0 before:top-0 before:-z-10 before:h-[600px] before:bg-[linear-gradient(var(--color-line)_1px,transparent_1px),linear-gradient(90deg,var(--color-line)_1px,transparent_1px)] before:bg-size-[48px_48px] before:mask-[radial-gradient(60%_60%_at_50%_30%,#000,transparent)]">
    <span class="inline-flex items-center gap-2 rounded-full border border-line bg-surface px-3 py-1 font-mono text-xs text-brand"><i class="size-1.5 rounded-full bg-brand-accent"></i><?= e($hero['eyebrow']) ?></span>
    <h1 class="mx-auto mt-[22px] max-w-[16ch] text-[clamp(40px,6vw,76px)] leading-[1.02] font-semibold tracking-[-.045em]"><?= accent($hero['title']) ?></h1>
    <p class="mx-auto mt-5 max-w-[56ch] text-[clamp(16px,1.3vw,19px)] text-muted"><?= e($hero['lead']) ?></p>
    <div class="mt-7 flex flex-wrap justify-center gap-2.5"><a class="btn-brand" href="<?= e($whatsapp) ?>"><?= e($t['call']) ?></a><a class="btn-secondary" href="#features"><?= e($t['see']) ?></a></div>
<?php if (!empty($hero['note'])): ?>
    <p class="mt-[22px] font-mono text-[13px] text-muted"><?= e($hero['note']) ?></p>
<?php endif; ?>
    <div class="relative mx-auto mt-14 max-w-[1080px] [clip-path:inset(-120px_-120px_0_-120px)]">
      <div class="overflow-hidden rounded-t-[18px] border border-b-0 border-line bg-surface p-[clamp(6px,1vw,10px)] pb-0 shadow-[0_0_0_6px_rgb(255_255_255/.6),0_40px_90px_-30px_rgb(7_21_48/.35)]">
        <div class="flex items-center gap-1.5 px-2 pt-1 pb-[clamp(6px,1vw,10px)]"><i class="size-2.5 rounded-full bg-line-strong"></i><i class="size-2.5 rounded-full bg-line-strong"></i><i class="size-2.5 rounded-full bg-line-strong"></i></div>
        <img class="block h-auto w-full rounded-t-[10px] border border-b-0 border-line" src="<?= e($img($hero['image'])) ?>" width="1600" height="1000" alt="<?= e($hero['image_alt']) ?>" fetchpriority="high">
      </div>
      <div class="pointer-events-none absolute inset-x-[-4%] -bottom-1 h-[22%] bg-linear-to-t from-canvas from-10% to-transparent"></div>
    </div>
  </div>

<?php if (!empty($page['stack'])): ?>
  <div class="flex flex-wrap items-center justify-center gap-2 pt-4">
    <span class="mr-2 text-[13px] text-muted"><?= e($t['stack']) ?></span>
<?php foreach ($page['stack'] as $tech): ?>
    <span class="tag bg-surface px-2.5 py-1"><?= e($tech) ?></span>
<?php endforeach; ?>
  </div>
<?php endif; ?>

  <section id="features" class="scroll-mt-24 pt-section">
    <div class="mb-10 max-w-[640px]"><span class="eyebrow"><?= e($page['features']['eyebrow']) ?></span><h2 class="heading-section"><?= e($page['features']['title']) ?></h2><p class="mt-3 text-muted"><?= e($page['features']['lead']) ?></p></div>
    <div class="grid gap-3.5 sm:grid-cols-2 desk:grid-cols-3">
<?php foreach ($page['features']['items'] as $item): ?>
      <div class="card-bento gap-1"><span class="faq-icon mb-4"><i data-lucide="<?= e($item['icon']) ?>"></i></span><h3 class="card-bento-title"><?= e($item['title']) ?></h3><p class="card-bento-text"><?= e($item['text']) ?></p></div>
<?php endforeach; ?>
    </div>
  </section>

<?php if (!empty($page['work'])): ?>
  <section id="work" class="pt-section">
    <div class="mb-10 max-w-[640px]"><span class="eyebrow"><?= e($page['work']['eyebrow']) ?></span><h2 class="heading-section"><?= e($page['work']['title']) ?></h2></div>
    <div class="grid gap-3.5 <?= count($page['work']['items']) > 1 ? 'desk:grid-cols-2' : '' ?>">
<?php foreach ($page['work']['items'] as $i => $item): $dark = $i === 0; ?>
      <article class="relative flex flex-col overflow-hidden rounded-3xl p-[clamp(24px,3vw,36px)] <?= $dark ? 'bg-ink text-white *:relative *:z-1 after:absolute after:-top-[80px] after:-right-[80px] after:size-[260px] after:bg-[radial-gradient(closest-side,rgb(61_107_255/.55),transparent)]' : 'border border-line bg-surface' ?>">
        <span class="font-mono text-xs <?= $dark ? 'text-code-accent' : 'text-brand' ?>"><?= e($item['tag']) ?></span>
        <h3 class="mt-3 text-[clamp(20px,2vw,26px)] leading-[1.2] font-semibold tracking-[-.02em]"><?= e($item['title']) ?></h3>
        <p class="mt-3 <?= $dark ? 'text-[#aab3cc]' : 'text-muted' ?>"><?= e($item['text']) ?></p>
        <div class="mt-5 flex flex-wrap gap-1.5">
<?php foreach ($item['stack'] ?? [] as $tech): ?>
          <span class="rounded-md px-2 py-[3px] font-mono text-xs font-medium <?= $dark ? 'bg-white/10 text-white' : 'border border-line bg-canvas text-ink' ?>"><?= e($tech) ?></span>
<?php endforeach; ?>
        </div>
<?php if (!empty($item['client'])): ?>
        <div class="mt-auto flex items-center gap-3 pt-7"><i class="avatar avatar-<?= $i % 3 + 1 ?> ml-0 size-9 <?= $dark ? 'border-ink' : '' ?>"></i><div class="text-sm leading-tight"><b class="block font-semibold"><?= e($item['client']) ?></b><span class="<?= $dark ? 'text-subtle' : 'text-muted' ?>"><?= e($item['location'] ?? '') ?></span></div></div>
<?php endif; ?>
      </article>
<?php endforeach; ?>
    </div>
  </section>
<?php endif; ?>

  <section id="process" class="pt-section">
    <div class="mb-10 max-w-[640px]"><span class="eyebrow"><?= e($page['process']['eyebrow']) ?></span><h2 class="heading-section"><?= e($page['process']['title']) ?></h2></div>
    <ol class="grid gap-3.5 sm:grid-cols-2 <?= count($page['process']['steps']) === 4 ? 'desk:grid-cols-4' : 'desk:grid-cols-3' ?>">
<?php foreach ($page['process']['steps'] as $i => $step): ?>
      <li class="relative rounded-[18px] border border-line bg-surface p-6">
        <div class="flex items-center gap-3"><span class="grid size-8 place-items-center rounded-full bg-brand font-mono text-xs font-medium text-white"><?= sprintf('%02d', $i + 1) ?></span><i class="h-px flex-1 bg-[repeating-linear-gradient(90deg,var(--color-line-strong)_0_6px,transparent_6px_12px)]"></i></div>
        <h3 class="mt-5 card-bento-title"><?= e($step['title']) ?></h3><p class="card-bento-text"><?= e($step['text']) ?></p>
      </li>
<?php endforeach; ?>
    </ol>
  </section>

  <section id="faq" class="grid items-start gap-[clamp(28px,5vw,64px)] pt-section desk:grid-cols-[1fr_1.5fr]">
    <div class="desk:sticky desk:top-24"><span class="eyebrow">FAQ</span><h2 class="heading-section"><?= e($t['faq_title']) ?></h2><p class="mt-3 text-muted"><?= e($t['faq_lead']) ?></p>
      <div class="relative mt-7 overflow-hidden rounded-[18px] bg-ink p-[22px] text-white after:absolute after:-top-[60px] after:-right-[60px] after:size-[200px] after:bg-[radial-gradient(closest-side,rgb(61_107_255/.6),transparent)]">
        <span class="mb-3 flex"><i class="avatar avatar-1 size-[34px] border-ink"></i><i class="avatar avatar-2 size-[34px] border-ink"></i><i class="avatar avatar-3 size-[34px] border-ink"></i></span>
        <h3 class="text-lg font-semibold"><?= e($t['help_title']) ?></h3><p class="mt-1 mb-4 text-sm text-[#aab3cc]"><?= e($t['help_text']) ?></p>
        <a class="btn relative z-1 bg-surface text-ink" href="<?= e($whatsapp) ?>"><?= e($t['chat']) ?></a></div></div>
    <div class="flex flex-col gap-2.5">
<?php foreach ($page['faq'] as $i => $item): ?>
      <details class="faq-item"<?= $i === 0 ? ' open' : '' ?>><summary class="faq-question"><span class="faq-icon"><i data-lucide="message-circle-question"></i></span><?= e($item['q']) ?></summary><div class="faq-answer"><?= e($item['a']) ?></div></details>
<?php endforeach; ?>
    </div>
  </section>

  <section class="pt-section">
    <div class="mb-8 max-w-[640px]"><span class="eyebrow"><?= e(mb_strtoupper($t['more'])) ?></span><h2 class="heading-section"><?= e($t['more_title']) ?></h2></div>
    <div class="grid grid-cols-2 gap-2.5 desk:grid-cols-5">
<?php foreach ($siblings as $s): if ($s['href'] === $current) continue; ?>
      <a class="group flex items-center justify-between rounded-[14px] border border-line bg-surface px-4 py-3.5 text-[14.5px] font-medium transition-colors hover:border-brand hover:text-brand" href="<?= e(url($s['href'])) ?>"><?= e($s['label']) ?><span class="text-subtle transition-transform group-hover:translate-x-0.5 group-hover:text-brand">→</span></a>
<?php endforeach; ?>
    </div>
  </section>

  <div id="contact" class="relative mt-section overflow-hidden rounded-3xl border border-line bg-surface px-6 py-[clamp(48px,7vw,90px)] text-center before:absolute before:-top-[120px] before:left-1/2 before:h-[300px] before:w-[600px] before:-translate-x-1/2 before:bg-[radial-gradient(closest-side,rgb(0_47_167/.25),transparent)]">
    <h2 class="heading-section relative mx-auto mt-0 max-w-[18ch]"><?= e($page['cta']['title']) ?></h2><p class="relative mx-auto mt-3 max-w-[56ch] text-muted"><?= e($page['cta']['text']) ?></p>
    <div class="relative mt-7 flex flex-wrap justify-center gap-2.5"><a class="btn-brand" href="<?= e($whatsapp) ?>">WhatsApp</a><a class="btn-secondary" href="<?= e($email) ?>"><?= e($t['email']) ?></a></div>
    <p class="relative mt-5 text-[13px] text-muted"><?= e($t['reply']) ?></p></div>

  <footer class="flex flex-col gap-6 py-10 text-[13px] text-muted desk:flex-row desk:justify-between">
    <span>© <?= date('Y') ?> Dirait · Cibubur, Jawa Barat — Indonesia</span>
    <nav class="flex flex-wrap gap-x-4 gap-y-2"><?php foreach ($siblings as $s): ?><a class="hover:text-ink" href="<?= e(url($s['href'])) ?>"><?= e($s['label']) ?></a><?php endforeach; ?></nav>
  </footer>
</main>
<script src="https://unpkg.com/lucide@0.468.0/dist/umd/lucide.min.js"></script><script>lucide.createIcons()</script>
</body>
</html>
