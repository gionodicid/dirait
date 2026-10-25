<?php

declare(strict_types=1);

require __DIR__ . '/app/bootstrap.php';

$path = trim(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '', '/');
$base = trim(base_path(), '/');

if ($base !== '' && ($path === $base || str_starts_with($path, $base . '/'))) {
    $path = trim(substr($path, strlen($base)), '/');
}

if (PHP_SAPI === 'cli-server') {
    $file = __DIR__ . '/' . $path;
    if ($path !== '' && $path[0] !== '.' && is_file($file) && !str_ends_with($file, '.php')) {
        return false;
    }
}

if ($path === 'index.php') {
    $path = '';
}

if ($path === 'index.html') {
    header('Location: ' . url('/'), true, 301);
    exit;
}

if (str_ends_with($path, '.html')) {
    header('Location: ' . url('/' . substr($path, 0, -5)), true, 301);
    exit;
}

if ($path === '') {
    ob_start();
    require __DIR__ . '/app/partials/header.php';
    $header = ob_get_clean();

    echo str_replace(
        ['{{BASE}}', '{{CSS_VERSION}}', '{{ANALYTICS}}', '{{HEADER}}'],
        [base_path(), (string) @filemtime(__DIR__ . '/assets/css/homepage.css'), (string) file_get_contents(__DIR__ . '/app/partials/analytics.html'), $header],
        (string) file_get_contents(__DIR__ . '/pages/home.html')
    );
    exit;
}

// Ad landing page: renders its own full document.
if ($path === 'consultation') {
    require __DIR__ . '/pages/consultation.php';
    exit;
}

if ($path === 'konsultasi') {
    header('Location: ' . url('/consultation'), true, 301);
    exit;
}

if ($path === 'services' || $path === 'services-swiss') {
    header('Location: ' . url('/#platform'), true, 301);
    exit;
}

$pageFile = null;

if ($pageFile === null && preg_match('#^services/([a-z0-9-]+)$#', $path, $matches)) {
    $pageFile = __DIR__ . '/pages/services/' . $matches[1] . '.php';
}

// The English /services-swiss/ pages were merged into /services/.
if (preg_match('#^services-swiss/([a-z0-9-]+)$#', $path, $matches)) {
    header('Location: ' . url('/services/' . ($matches[1] === 'crm-erp' ? 'crm' : $matches[1])), true, 301);
    exit;
}

if ($pageFile === null || !is_file($pageFile)) {
    http_response_code(404);
    exit('Not found');
}

ob_start();
require $pageFile;
$content = ob_get_clean();

render_page($page, $content);
