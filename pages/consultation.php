<?php
// Ad landing page for paid traffic ("Manual to automatic" campaign). One job: start a WhatsApp chat.
// Renders its own document in the service-page design; noindex because it only exists for ads.

$page = [
    'title' => 'Free Consultation: Business System + Free Company Profile Website | DIRAIT',
    'description' => 'Replace manual bookkeeping with one automated system for sales, stock, staff and customers. Get a company profile website free. Free consultation on WhatsApp.',
    'canonical' => 'https://dirait.com/consultation',
];

$waNumber = '6281384934615';
$wa = fn (string $text) => 'https://wa.me/' . $waNumber . '?text=' . rawurlencode($text);
$defaultMessage = 'Hi dirait, I saw your ad and would like a free consultation about a business system.';
$email = 'mailto:hello@dirait.id';

// What the visitor wants automated; each choice pre-fills a different WhatsApp message.
$needs = [
    ['icon' => 'shopping-cart', 'label' => 'Sales & stock', 'message' => 'Hi dirait, I would like a free consultation. I want sales and stock to be recorded automatically.'],
    ['icon' => 'users', 'label' => 'Staff & payroll', 'message' => 'Hi dirait, I would like a free consultation. I want attendance and payroll to be calculated automatically.'],
    ['icon' => 'contact', 'label' => 'Customers (CRM)', 'message' => 'Hi dirait, I would like a free consultation. I want customer follow-ups and invoices to run automatically.'],
    ['icon' => 'layout-grid', 'label' => 'All of it', 'message' => 'Hi dirait, I would like a free consultation. I want sales, stock, staff and customers in one system.'],
];

$benefits = [
    ['icon' => 'trending-up', 'title' => 'Sales & reports', 'text' => 'Daily revenue, charts and reports are ready the moment a sale happens — no more re-typing into Excel every night.'],
    ['icon' => 'package', 'title' => 'Stock', 'text' => 'Stock goes down automatically with every sale, and you get an alert before an item runs out.'],
    ['icon' => 'user-check', 'title' => 'Staff & payroll', 'text' => 'Attendance is recorded and payroll is calculated every month, without spreadsheets.'],
    ['icon' => 'bell-ring', 'title' => 'Customers', 'text' => 'Follow-up reminders and invoice due dates go out on their own, so no customer slips through.'],
];

$steps = [
    ['title' => 'Chat on WhatsApp', 'text' => 'Tell us how your business runs today and which part takes the most manual work.'],
    ['title' => 'Free consultation', 'text' => 'We map your workflow and recommend the right system — no cost, no obligation.'],
    ['title' => 'Proposal & build', 'text' => 'You get the scope, timeline and price in writing. If it fits, we start building.'],
];

$faq = [
    ['q' => 'Is the consultation really free?', 'a' => 'Yes. Message us on WhatsApp, tell us what you need, and we will help you map the right system. There is no cost and no obligation to continue.'],
    ['q' => 'What is included in the free company profile website?', 'a' => 'Every business system order comes with a company profile website for your business — about, services and contact pages that look sharp on mobile and are ready for Google — so new customers trust you faster.'],
    ['q' => 'My business is still small. Is this a good fit?', 'a' => 'Yes. The system is built around how you already work, so you can start with what you need most (for example sales and stock) and add modules as you grow.'],
    ['q' => 'How long does it take to build?', 'a' => 'It depends on the modules you need. After the consultation you get a clear estimate of time and cost before you decide anything.'],
];

$siblings = [];
foreach (site()['services'] as $items) {
    foreach ($items as $slug => $s) {
        $siblings[] = ['href' => '/services/' . $slug, 'label' => $s['label']];
    }
}
?>
<!doctype html>
<html lang="en">
<head>
<?php readfile(APP_ROOT . '/app/partials/analytics.html'); ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title><?= e($page['title']) ?></title>
    <meta name="description" content="<?= e($page['description']) ?>" />
    <meta name="robots" content="noindex, follow" />
    <link rel="canonical" href="<?= e($page['canonical']) ?>" />
<?php require APP_ROOT . '/app/partials/meta.php'; ?>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700&family=Geist+Mono:wght@400;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?= e(url('/assets/css/homepage.css')) ?>?v=<?= @filemtime(APP_ROOT . '/assets/css/homepage.css') ?>" />
</head>
<body class="pb-24 desk:pb-0">
<?php $navCurrent = ''; require APP_ROOT . '/app/partials/header.php'; ?>

<main class="mx-auto max-w-[1180px] px-gutter">
  <div class="relative pt-[clamp(60px,8vw,100px)] text-center before:absolute before:inset-x-0 before:top-0 before:-z-10 before:h-[600px] before:bg-[linear-gradient(var(--color-line)_1px,transparent_1px),linear-gradient(90deg,var(--color-line)_1px,transparent_1px)] before:bg-size-[48px_48px] before:mask-[radial-gradient(60%_60%_at_50%_30%,#000,transparent)]">
    <span class="inline-flex items-center gap-2 rounded-full border border-line bg-surface px-3 py-1 font-mono text-xs text-brand"><i class="size-1.5 rounded-full bg-brand-accent"></i>FREE CONSULTATION · BUSINESS SYSTEMS</span>
    <h1 class="mx-auto mt-[22px] max-w-[16ch] text-[clamp(40px,6vw,76px)] leading-[1.02] font-semibold tracking-[-.045em]">From manual bookkeeping to an <span class="text-gradient">automated system.</span></h1>
    <p class="mx-auto mt-5 max-w-[56ch] text-[clamp(16px,1.3vw,19px)] text-muted">Sales, stock, staff and customers in one dashboard, built around how your business already works. Plus a <b class="font-semibold text-ink">free company profile website</b>.</p>

    <div class="mx-auto mt-10 max-w-[640px] rounded-[18px] border border-line bg-surface p-[clamp(16px,2.5vw,24px)] text-left shadow-[0_0_0_6px_rgb(255_255_255/.6),0_40px_90px_-30px_rgb(7_21_48/.35)]">
      <p class="text-[15px] font-semibold">What would you like to automate first?</p>
      <p class="mt-0.5 text-[13.5px] text-muted">Pick one — we will prepare the WhatsApp message, you just press send.</p>
      <div class="mt-4 grid grid-cols-2 gap-2" role="radiogroup" aria-label="What to automate">
<?php foreach ($needs as $i => $n): ?>
        <button class="flex items-center gap-2.5 rounded-xl border border-line bg-canvas px-3 py-3 text-left text-[14.5px] font-medium transition-colors hover:border-line-strong aria-checked:border-brand aria-checked:bg-brand-soft aria-checked:text-brand" type="button" role="radio" aria-checked="<?= $i === 3 ? 'true' : 'false' ?>" data-need="<?= e($n['message']) ?>"><span class="faq-icon size-8 rounded-[9px] text-[15px]"><i data-lucide="<?= e($n['icon']) ?>"></i></span><?= e($n['label']) ?></button>
<?php endforeach; ?>
      </div>
      <a class="btn-brand mt-4 w-full py-3.5 text-[15.5px]" href="<?= e($wa($needs[3]['message'])) ?>" data-wa-main><i data-lucide="message-circle"></i>Chat on WhatsApp — it's free</a>
      <p class="mt-3 flex items-center justify-center gap-1.5 text-center text-[12.5px] text-muted"><i data-lucide="shield-check" class="text-success"></i>No cost, no obligation. You talk directly to the engineers who build it.</p>
    </div>
  </div>

  <section id="features" class="scroll-mt-24 pt-section">
    <div class="mb-10 max-w-[640px]"><span class="eyebrow">WHAT GETS AUTOMATED</span><h2 class="heading-section">Everything you currently track by hand.</h2><p class="mt-3 text-muted">One system replaces the spreadsheets, paper notes and chat reminders.</p></div>
    <div class="grid gap-3.5 sm:grid-cols-2">
<?php foreach ($benefits as $b): ?>
      <div class="card-bento gap-1"><span class="faq-icon mb-4"><i data-lucide="<?= e($b['icon']) ?>"></i></span><h3 class="card-bento-title"><?= e($b['title']) ?></h3><p class="card-bento-text"><?= e($b['text']) ?></p></div>
<?php endforeach; ?>
    </div>
  </section>

  <section class="pt-section">
    <article class="relative grid items-center gap-8 overflow-hidden rounded-3xl bg-ink p-[clamp(24px,4vw,48px)] text-white *:relative *:z-1 after:absolute after:-top-[80px] after:-right-[80px] after:size-[260px] after:bg-[radial-gradient(closest-side,rgb(61_107_255/.55),transparent)] desk:grid-cols-[1.1fr_1fr]">
      <div>
        <span class="font-mono text-xs text-code-accent">BONUS · FREE</span>
        <h2 class="mt-3 text-[clamp(28px,3.6vw,44px)] leading-[1.05] font-semibold tracking-[-.04em]">A company profile website, on us.</h2>
        <p class="mt-3 max-w-[46ch] text-[#aab3cc]">Every business system order includes a company profile website: about, services and contact pages that look sharp on mobile and are ready for Google — so new customers trust you faster.</p>
        <a class="btn mt-6 bg-surface text-ink" href="<?= e($wa('Hi dirait, I would like a free consultation and to ask about the free company profile website.')) ?>">Ask about the bonus →</a>
      </div>
      <div class="rounded-[14px] bg-surface p-2 text-ink shadow-[0_30px_60px_-20px_rgb(0_0_0/.5)]">
        <div class="flex items-center gap-1.5 px-1.5 pb-2"><i class="size-2 rounded-full bg-line-strong"></i><i class="size-2 rounded-full bg-line-strong"></i><i class="size-2 rounded-full bg-line-strong"></i><span class="ml-2 rounded-full bg-canvas px-2.5 py-0.5 font-mono text-[11px] text-muted">yourbusiness.com</span></div>
        <div class="rounded-[10px] bg-linear-135 from-brand to-brand-accent p-5 text-white">
          <p class="font-mono text-[11px] text-white/70">YOUR BUSINESS</p>
          <p class="mt-2 max-w-[16ch] text-[22px] leading-tight font-semibold">The partner your customers can trust.</p>
          <span class="mt-4 inline-block rounded-lg bg-white px-3 py-1.5 text-[12px] font-semibold text-brand">Contact us</span>
        </div>
        <div class="mt-2 grid grid-cols-3 gap-2">
          <div class="rounded-lg bg-canvas p-2.5"><b class="block text-[15px]">About</b><span class="text-[11px] text-muted">your story</span></div>
          <div class="rounded-lg bg-canvas p-2.5"><b class="block text-[15px]">Services</b><span class="text-[11px] text-muted">what you offer</span></div>
          <div class="rounded-lg bg-canvas p-2.5"><b class="block text-[15px]">Contact</b><span class="text-[11px] text-muted">WhatsApp & map</span></div>
        </div>
      </div>
    </article>
  </section>

  <section id="process" class="pt-section">
    <div class="mb-10 max-w-[640px]"><span class="eyebrow">PROCESS</span><h2 class="heading-section">Three steps, starting with one chat.</h2></div>
    <ol class="grid gap-3.5 sm:grid-cols-2 desk:grid-cols-3">
<?php foreach ($steps as $i => $step): ?>
      <li class="relative rounded-[18px] border border-line bg-surface p-6">
        <div class="flex items-center gap-3"><span class="grid size-8 place-items-center rounded-full bg-brand font-mono text-xs font-medium text-white"><?= sprintf('%02d', $i + 1) ?></span><i class="h-px flex-1 bg-[repeating-linear-gradient(90deg,var(--color-line-strong)_0_6px,transparent_6px_12px)]"></i></div>
        <h3 class="mt-5 card-bento-title"><?= e($step['title']) ?></h3><p class="card-bento-text"><?= e($step['text']) ?></p>
      </li>
<?php endforeach; ?>
    </ol>
  </section>

  <section class="pt-section">
    <div class="mb-10 max-w-[640px]"><span class="eyebrow">CUSTOMERS</span><h2 class="heading-section">What clients say.</h2></div>
    <div class="grid gap-3.5 desk:grid-cols-3">
<?php foreach (site()['testimonials'] as $i => $tm): ?>
      <figure class="card-bento"><blockquote class="text-[15px]">“<?= e($tm['quote']) ?>”</blockquote><figcaption class="mt-auto flex items-center gap-3 pt-6 text-sm leading-tight"><i class="avatar avatar-<?= $i % 3 + 1 ?> ml-0 size-9"></i><span><b class="block font-semibold"><?= e($tm['name']) ?></b><span class="text-muted"><?= e($tm['role']) ?></span></span></figcaption></figure>
<?php endforeach; ?>
    </div>
  </section>

  <section id="faq" class="grid items-start gap-[clamp(28px,5vw,64px)] pt-section desk:grid-cols-[1fr_1.5fr]">
    <div class="desk:sticky desk:top-24"><span class="eyebrow">FAQ</span><h2 class="heading-section">Before you message us.</h2><p class="mt-3 text-muted">Straight answers to what people ask us most.</p>
      <div class="relative mt-7 overflow-hidden rounded-[18px] bg-ink p-[22px] text-white after:absolute after:-top-[60px] after:-right-[60px] after:size-[200px] after:bg-[radial-gradient(closest-side,rgb(61_107_255/.6),transparent)]">
        <span class="mb-3 flex"><i class="avatar avatar-1 size-[34px] border-ink"></i><i class="avatar avatar-2 size-[34px] border-ink"></i><i class="avatar avatar-3 size-[34px] border-ink"></i></span>
        <h3 class="text-lg font-semibold">Still have questions?</h3><p class="mt-1 mb-4 text-sm text-[#aab3cc]">Talk to the engineers who will build it — usually within a day.</p>
        <a class="btn relative z-1 bg-surface text-ink" href="<?= e($wa($defaultMessage)) ?>">Chat on WhatsApp →</a></div></div>
    <div class="flex flex-col gap-2.5">
<?php foreach ($faq as $i => $item): ?>
      <details class="faq-item"<?= $i === 0 ? ' open' : '' ?>><summary class="faq-question"><span class="faq-icon"><i data-lucide="message-circle-question"></i></span><?= e($item['q']) ?></summary><div class="faq-answer"><?= e($item['a']) ?></div></details>
<?php endforeach; ?>
    </div>
  </section>

  <div id="contact" class="relative mt-section overflow-hidden rounded-3xl border border-line bg-surface px-6 py-[clamp(48px,7vw,90px)] text-center before:absolute before:-top-[120px] before:left-1/2 before:h-[300px] before:w-[600px] before:-translate-x-1/2 before:bg-[radial-gradient(closest-side,rgb(0_47_167/.25),transparent)]">
    <h2 class="heading-section relative mx-auto mt-0 max-w-[18ch]">Ready to stop doing it by hand?</h2><p class="relative mx-auto mt-3 max-w-[56ch] text-muted">One chat is all it takes. Tell us about your business and we will help you design the system — free.</p>
    <div class="relative mt-7 flex flex-wrap justify-center gap-2.5"><a class="btn-brand" href="<?= e($wa($defaultMessage)) ?>">WhatsApp</a><a class="btn-secondary" href="<?= e($email) ?>">Send an email</a></div>
    <p class="relative mt-5 text-[13px] text-muted">Free consultation — we reply within one business day.</p></div>

  <footer class="flex flex-col gap-6 py-10 text-[13px] text-muted desk:flex-row desk:justify-between">
    <span>© <?= date('Y') ?> Dirait · Cibubur, Jawa Barat — Indonesia</span>
    <nav class="flex flex-wrap gap-x-4 gap-y-2"><?php foreach ($siblings as $s): ?><a class="hover:text-ink" href="<?= e(url($s['href'])) ?>"><?= e($s['label']) ?></a><?php endforeach; ?></nav>
  </footer>
</main>

<div class="fixed inset-x-3 bottom-3 z-30 desk:hidden">
  <a class="btn-brand w-full py-3.5 text-[15.5px] shadow-[0_18px_40px_-12px_rgb(0_47_167/.6)]" href="<?= e($wa($needs[3]['message'])) ?>" data-wa-main><i data-lucide="message-circle"></i>Chat on WhatsApp — free consultation</a>
</div>

<script src="https://unpkg.com/lucide@0.468.0/dist/umd/lucide.min.js"></script><script>lucide.createIcons()</script>
<script>
  // Picking what to automate swaps the pre-filled WhatsApp message on the main buttons.
  (() => {
    const base = 'https://wa.me/<?= $waNumber ?>?text=';
    const choices = document.querySelectorAll('[data-need]');
    choices.forEach((btn) => btn.addEventListener('click', () => {
      choices.forEach((b) => b.setAttribute('aria-checked', b === btn));
      document.querySelectorAll('[data-wa-main]').forEach((a) => { a.href = base + encodeURIComponent(btn.dataset.need); });
    }));
  })();
</script>
</body>
</html>
