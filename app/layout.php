<?php

$variants = [
    'home' => ['lang' => 'en', 'body' => '', 'main_id' => 'main-content', 'chrome' => 'v8'],
    'swiss' => ['lang' => 'en', 'body' => 'font-sans antialiased', 'main_id' => null, 'chrome' => 'minimal'],
    'brand' => ['lang' => 'id', 'body' => 'font-body bg-background text-foreground antialiased', 'main_id' => 'main-content', 'chrome' => 'brand'],
];

$layout = $page['layout'];
$variant = $variants[$layout];
?>
<!doctype html>
<html lang="<?= e($variant['lang']) ?>">
  <head>
<?php require APP_ROOT . '/app/partials/' . $layout . '/head.php'; ?>
  </head>

  <body class="<?= e($variant['body']) ?>">
<?php require APP_ROOT . '/app/partials/' . $variant['chrome'] . '/header.php'; ?>

    <main<?= $variant['main_id'] !== null ? ' id="' . $variant['main_id'] . '"' : '' ?>>
<?= $content ?>
    </main>
<?php require APP_ROOT . '/app/partials/' . $variant['chrome'] . '/footer.php'; ?>
<?php if ($variant['chrome'] !== 'v8') {
    require APP_ROOT . '/app/partials/scripts/nav.php';
} ?>
<?php if ($variant['chrome'] === 'brand') {
    require APP_ROOT . '/app/partials/scripts/reveal.php';
} ?>
<?php foreach ($page['scripts'] ?? [] as $script) {
    require APP_ROOT . '/app/partials/scripts/' . $script . '.php';
} ?>
  </body>
</html>
