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
    echo str_replace('{{BASE}}', base_path(), (string) file_get_contents(__DIR__ . '/pages/home.html'));
    exit;
}

$pageFile = null;

if ($pageFile === null && preg_match('#^services/([a-z0-9-]+)$#', $path, $matches)) {
    $pageFile = __DIR__ . '/pages/services/' . $matches[1] . '.php';
}

if ($pageFile === null && preg_match('#^services-swiss/([a-z0-9-]+)$#', $path, $matches)) {
    $pageFile = __DIR__ . '/pages/services-swiss/' . $matches[1] . '.php';
}

if ($pageFile === null || !is_file($pageFile)) {
    http_response_code(404);
    exit('Not found');
}

ob_start();
require $pageFile;
$content = ob_get_clean();

render_page($page, $content);
