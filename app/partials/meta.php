<?php
// Social share and icon tags. The share image is images/og/<path with / as ->.png, rendered by og/render.sh.
$metaPath = trim((string) parse_url($page['canonical'], PHP_URL_PATH), '/');
$metaImage = 'https://dirait.com/images/og/' . str_replace('/', '-', $metaPath) . '.png';
?>
    <meta name="theme-color" content="#071530" />
    <link rel="icon" href="<?= e(url('/favicon.svg')) ?>" type="image/svg+xml" />
    <link rel="apple-touch-icon" href="<?= e(url('/apple-touch-icon.png')) ?>" />
    <link rel="manifest" href="<?= e(url('/site.webmanifest')) ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="DIRAIT" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:title" content="<?= e($page['title']) ?>" />
    <meta property="og:description" content="<?= e($page['description']) ?>" />
    <meta property="og:url" content="<?= e($page['canonical']) ?>" />
    <meta property="og:image" content="<?= e($metaImage) ?>" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="<?= e($page['title']) ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?= e($page['title']) ?>" />
    <meta name="twitter:description" content="<?= e($page['description']) ?>" />
    <meta name="twitter:image" content="<?= e($metaImage) ?>" />
