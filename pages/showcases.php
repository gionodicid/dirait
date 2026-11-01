<?php
// Showcase index: renders its own full document from site()['showcases'].

$page = [
    'title' => 'Showcases — Custom Software We Shipped | DIRAIT',
    'description' => 'Case studies of web, mobile and e-commerce systems DIRAIT designed and built: MOOC POGI, POGI Store, APMOSS 2027 and KSP Software.',
    'canonical' => 'https://dirait.com/showcases',
];
$img = fn (string $name) => url('/images/showcases/' . $name . '.webp') . '?v=' . @filemtime(APP_ROOT . '/images/showcases/' . $name . '.webp');
$showcases = site()['showcases'];
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
    <span class="inline-flex items-center gap-2 rounded-full border border-line bg-surface px-3 py-1 font-mono text-xs text-brand"><i class="size-1.5 rounded-full bg-brand-accent"></i>SHOWCASES · <?= count($showcases) ?> LIVE PROJECTS</span>
    <h1 class="mx-auto mt-[22px] max-w-[16ch] text-[clamp(40px,6vw,76px)] leading-[1.02] font-semibold tracking-[-.045em]">Real systems, <span class="text-gradient">running today.</span></h1>
    <p class="mx-auto mt-5 max-w-[56ch] text-[clamp(16px,1.3vw,19px)] text-muted">Learning platforms, marketplaces, congress sites and member apps — designed, built and shipped by one team.</p>
  </div>

  <div class="grid gap-3.5 pt-14 desk:grid-cols-2">
<?php foreach ($showcases as $slug => $s): $wide = false; ?>
    <a class="group flex flex-col overflow-hidden rounded-3xl border border-line bg-surface transition-colors hover:border-brand <?= $wide ? 'desk:col-span-2 desk:grid desk:grid-cols-[1fr_1.4fr]' : '' ?>" href="<?= e(url('/showcases/' . $slug)) ?>">
      <div class="flex flex-col p-[clamp(24px,3vw,36px)] <?= $wide ? 'desk:order-1 justify-center' : '' ?>">
        <span class="font-mono text-xs text-brand"><?= e($s['tag']) ?></span>
        <h2 class="mt-3 text-[clamp(22px,2.4vw,32px)] leading-[1.15] font-semibold tracking-[-.03em]"><?= e($s['title']) ?></h2>
        <p class="mt-3 text-muted"><?= e($s['blurb']) ?></p>
        <div class="mt-6 flex items-center justify-between gap-4 text-sm"><span><b class="block font-semibold"><?= e($s['name']) ?></b><span class="text-muted"><?= e($s['client']) ?></span></span><span class="shrink-0 font-medium text-brand">Case study <span class="inline-block transition-transform group-hover:translate-x-0.5">→</span></span></div>
      </div>
      <div class="mt-auto bg-canvas px-[clamp(16px,3vw,36px)] pt-[clamp(16px,3vw,36px)] <?= $wide ? 'desk:order-2' : '' ?>">
        <img class="block h-auto w-full rounded-t-[12px] border border-b-0 border-line shadow-[0_30px_60px_-30px_rgb(7_21_48/.35)] transition-transform duration-300 group-hover:-translate-y-1" src="<?= e($img($slug)) ?>" width="1600" height="1000" alt="<?= e($s['name']) ?> homepage" <?= $wide ? 'fetchpriority="high"' : 'loading="lazy"' ?>>
      </div>
    </a>
<?php endforeach; ?>
  </div>

<?php require APP_ROOT . '/app/partials/showcase-footer.php'; ?>
</main>
<script src="https://unpkg.com/lucide@0.468.0/dist/umd/lucide.min.js"></script><script>lucide.createIcons()</script>
</body>
</html>
