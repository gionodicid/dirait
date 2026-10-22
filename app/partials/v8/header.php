<?php
$isHome = $layout === 'home';
$link = static fn (string $hash): string => $isHome ? $hash : url('/') . $hash;
?>
    <a class="skip" href="#main-content">Skip to content</a>

    <header class="nav wrap">
      <a class="brand" href="<?= e(url('/')) ?>">DIRAIT</a>
      <nav aria-label="Main navigation">
        <a href="<?= e($link('#services')) ?>">Services</a>
        <a href="<?= e($link('#work')) ?>">Work</a>
        <a href="<?= e($link('#pricing')) ?>">Pricing</a>
        <a href="<?= e($link('#faq')) ?>">FAQ</a>
        <a class="nav-btn" href="<?= e($link('#contact')) ?>">Start a project</a>
      </nav>
    </header>
