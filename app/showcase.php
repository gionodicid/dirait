<?php
// Showcase detail page in the homepage design. $page comes from pages/showcases/<slug>.php as plain data.

$whatsapp = 'https://wa.me/6281384934615';
$email = 'mailto:hello@dirait.id';

$others = array_filter(site()['showcases'], fn ($slug) => $slug !== $page['slug'], ARRAY_FILTER_USE_KEY);

function accent(string $text): string
{
    return preg_replace('/\*(.+?)\*/', '<span class="text-gradient">$1</span>', e($text));
}

$hero = $page['hero'];
$img = fn (string $name) => url('/images/showcases/' . $name . '.webp') . '?v=' . @filemtime(APP_ROOT . '/images/showcases/' . $name . '.webp');
$frame = 'overflow-hidden rounded-[18px] border border-line bg-surface p-[clamp(6px,1vw,10px)] shadow-[0_0_0_6px_rgb(255_255_255/.6),0_40px_90px_-30px_rgb(7_21_48/.35)]';
$dots = '<div class="flex items-center gap-1.5 px-2 pt-1 pb-[clamp(6px,1vw,10px)]"><i class="size-2.5 rounded-full bg-line-strong"></i><i class="size-2.5 rounded-full bg-line-strong"></i><i class="size-2.5 rounded-full bg-line-strong"></i></div>';
?>
<!doctype html>
<html lang="en">
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
<?php $navCurrent = '/showcases'; require APP_ROOT . '/app/partials/header.php'; ?>

<main class="mx-auto max-w-[1180px] px-gutter">
  <div class="relative pt-[clamp(60px,8vw,100px)] text-center before:absolute before:inset-x-0 before:top-0 before:-z-10 before:h-[600px] before:bg-[linear-gradient(var(--color-line)_1px,transparent_1px),linear-gradient(90deg,var(--color-line)_1px,transparent_1px)] before:bg-size-[48px_48px] before:mask-[radial-gradient(60%_60%_at_50%_30%,#000,transparent)]">
    <a class="font-mono text-xs text-muted hover:text-brand" href="<?= e(url('/showcases')) ?>">← All showcases</a>
    <div class="mt-4"><span class="inline-flex items-center gap-2 rounded-full border border-line bg-surface px-3 py-1 font-mono text-xs text-brand"><i class="size-1.5 rounded-full bg-brand-accent"></i><?= e($hero['eyebrow']) ?></span></div>
    <h1 class="mx-auto mt-[22px] max-w-[16ch] text-[clamp(40px,6vw,76px)] leading-[1.02] font-semibold tracking-[-.045em]"><?= accent($hero['title']) ?></h1>
    <p class="mx-auto mt-5 max-w-[58ch] text-[clamp(16px,1.3vw,19px)] text-muted"><?= e($hero['lead']) ?></p>
    <div class="mt-7 flex flex-wrap justify-center gap-2.5"><a class="btn-brand" href="<?= e($whatsapp) ?>">Build something like this</a><?php if (!empty($page['url'])): ?><a class="btn-secondary" href="<?= e($page['url']) ?>" target="_blank" rel="noopener">Visit live site ↗</a><?php else: ?><a class="btn-secondary" href="#brief">Read the case study</a><?php endif; ?></div>
    <div class="relative mx-auto mt-14 max-w-[1080px] [clip-path:inset(-120px_-120px_0_-120px)]">
      <div class="<?= $frame ?> rounded-b-none border-b-0 pb-0"><?= $dots ?>
        <img class="block h-auto w-full rounded-t-[10px] border border-b-0 border-line" src="<?= e($img($hero['image'])) ?>" width="1600" height="1000" alt="<?= e($hero['image_alt']) ?>" fetchpriority="high">
      </div>
      <div class="pointer-events-none absolute inset-x-[-4%] -bottom-1 h-[22%] bg-linear-to-t from-canvas from-10% to-transparent"></div>
    </div>
  </div>

  <div class="grid grid-cols-2 gap-3.5 pt-4 desk:grid-cols-4">
<?php foreach ($page['stats'] as $stat): ?>
    <div class="rounded-[18px] border border-line bg-surface p-6"><b class="block text-[clamp(28px,3vw,40px)] leading-none font-semibold tracking-[-.04em] text-brand"><?= e($stat[0]) ?></b><span class="mt-2 block text-sm text-muted"><?= e($stat[1]) ?></span></div>
<?php endforeach; ?>
  </div>

  <section id="brief" class="grid scroll-mt-24 items-start gap-[clamp(28px,5vw,64px)] pt-section desk:grid-cols-[1.5fr_1fr]">
    <div><span class="eyebrow">THE BRIEF</span><h2 class="heading-section"><?= e($page['brief']['title']) ?></h2>
<?php foreach ($page['brief']['text'] as $para): ?>
      <p class="mt-4 text-[17px] text-muted"><?= e($para) ?></p>
<?php endforeach; ?>
    </div>
    <dl class="rounded-[18px] border border-line bg-surface p-6 desk:sticky desk:top-24">
<?php foreach ($page['facts'] as $label => $value): ?>
      <div class="flex justify-between gap-6 border-b border-line py-3 text-sm last:border-0"><dt class="text-muted"><?= e($label) ?></dt><dd class="text-right font-medium"><?= e($value) ?></dd></div>
<?php endforeach; ?>
    </dl>
  </section>

  <section id="features" class="pt-section">
    <div class="mb-10 max-w-[640px]"><span class="eyebrow">WHAT WE BUILT</span><h2 class="heading-section"><?= e($page['features']['title']) ?></h2><p class="mt-3 text-muted"><?= e($page['features']['lead']) ?></p></div>
    <div class="grid gap-3.5 sm:grid-cols-2 desk:grid-cols-3">
<?php foreach ($page['features']['items'] as $item): ?>
      <div class="card-bento gap-1"><span class="faq-icon mb-4"><i data-lucide="<?= e($item['icon']) ?>"></i></span><h3 class="card-bento-title"><?= e($item['title']) ?></h3><p class="card-bento-text"><?= e($item['text']) ?></p></div>
<?php endforeach; ?>
    </div>
  </section>

  <section id="screens" class="pt-section">
    <div class="mb-10 max-w-[640px]"><span class="eyebrow">SCREENS</span><h2 class="heading-section">Inside the product.</h2></div>
    <div class="grid gap-[clamp(24px,3vw,36px)] desk:grid-cols-2">
<?php foreach ($page['screens'] as $screen): ?>
      <figure><div class="<?= $frame ?>"><?= $dots ?><img class="block h-auto w-full rounded-[10px] border border-line" src="<?= e($img($screen['image'])) ?>" width="1600" height="1000" alt="<?= e($screen['alt']) ?>" loading="lazy"></div>
        <figcaption class="mt-4 text-sm text-muted"><b class="font-semibold text-ink"><?= e($screen['title']) ?></b> — <?= e($screen['caption']) ?></figcaption></figure>
<?php endforeach; ?>
    </div>
  </section>

  <div class="flex flex-wrap items-center justify-center gap-2 pt-section">
    <span class="mr-2 text-[13px] text-muted">Built with</span>
<?php foreach ($page['stack'] as $tech): ?>
    <span class="tag bg-surface px-2.5 py-1"><?= e($tech) ?></span>
<?php endforeach; ?>
  </div>

  <section class="pt-section">
    <div class="mb-8 flex flex-wrap items-end justify-between gap-4"><div class="max-w-[640px]"><span class="eyebrow">MORE SHOWCASES</span><h2 class="heading-section">Other systems we shipped.</h2></div><a class="btn-secondary" href="<?= e(url('/showcases')) ?>">All showcases</a></div>
    <div class="grid gap-3.5 desk:grid-cols-3">
<?php foreach ($others as $slug => $s): ?>
      <a class="group overflow-hidden rounded-[18px] border border-line bg-surface transition-colors hover:border-brand" href="<?= e(url('/showcases/' . $slug)) ?>">
        <img class="block aspect-[16/10] w-full border-b border-line object-cover object-top" src="<?= e($img($slug)) ?>" width="1600" height="1000" alt="<?= e($s['name']) ?> homepage" loading="lazy">
        <div class="p-5"><span class="font-mono text-xs text-brand"><?= e($s['tag']) ?></span><h3 class="mt-2 card-bento-title"><?= e($s['name']) ?></h3><p class="card-bento-text"><?= e($s['blurb']) ?></p><span class="mt-3 inline-block text-sm font-medium text-brand">View case study <span class="inline-block transition-transform group-hover:translate-x-0.5">→</span></span></div>
      </a>
<?php endforeach; ?>
    </div>
  </section>

<?php require APP_ROOT . '/app/partials/showcase-footer.php'; ?>
</main>
<script src="https://unpkg.com/lucide@0.468.0/dist/umd/lucide.min.js"></script><script>lucide.createIcons()</script>
</body>
</html>
