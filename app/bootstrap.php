<?php

declare(strict_types=1);

define('APP_ROOT', dirname(__DIR__));

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function site(): array
{
    static $data;

    return $data ??= require APP_ROOT . '/app/site.php';
}

function base_path(): string
{
    static $base;

    if ($base !== null) {
        return $base;
    }

    if (PHP_SAPI === 'cli-server') {
        $root = rtrim(str_replace('\\', '/', realpath(getcwd()) ?: getcwd()), '/');
        $dir = rtrim(str_replace('\\', '/', APP_ROOT), '/');
        $base = $root !== '' && str_starts_with($dir, $root) ? substr($dir, strlen($root)) : '';

        return $base;
    }

    $base = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');

    return $base === '/' ? '' : $base;
}

function url(string $path = '/'): string
{
    return base_path() . '/' . ltrim($path, '/');
}

function render_page(array $page, string $content): void
{
    require APP_ROOT . '/app/service.php';
}
