<?php

ini_set('display_errors', '0');

// Remove stale local bootstrap cache files if present
@unlink(__DIR__ . '/../bootstrap/cache/services.php');
@unlink(__DIR__ . '/../bootstrap/cache/packages.php');
@unlink(__DIR__ . '/../bootstrap/cache/config.php');
@unlink(__DIR__ . '/../bootstrap/cache/routes-v7.php');

// Prepare writable /tmp storage paths for Vercel Serverless environment
$storagePath = '/tmp/storage';
@mkdir($storagePath . '/framework/views', 0755, true);
@mkdir($storagePath . '/framework/cache/data', 0755, true);
@mkdir($storagePath . '/framework/sessions', 0755, true);
@mkdir($storagePath . '/logs', 0755, true);

$_ENV['APP_STORAGE'] = $storagePath;
$_ENV['VIEW_COMPILED_PATH'] = $storagePath . '/framework/views';
$_ENV['SESSION_DRIVER'] = 'array';
$_ENV['CACHE_STORE'] = 'array';
$_ENV['LOG_CHANNEL'] = 'stderr';
$_ENV['DB_CONNECTION'] = 'sqlite';
$_ENV['DB_DATABASE'] = ':memory:';
$_ENV['APP_MAINTENANCE_DRIVER'] = 'array';

putenv("APP_STORAGE={$storagePath}");
putenv("VIEW_COMPILED_PATH={$storagePath}/framework/views");
putenv("SESSION_DRIVER=array");
putenv("CACHE_STORE=array");
putenv("LOG_CHANNEL=stderr");
putenv("DB_CONNECTION=sqlite");
putenv("DB_DATABASE=:memory:");
putenv("APP_MAINTENANCE_DRIVER=array");

try {
    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    http_response_code(500);
    echo "<h1>Vercel Deployment Error</h1>";
    echo "<p><strong>Message:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "<p><strong>Location:</strong> " . htmlspecialchars($e->getFile()) . " (line " . $e->getLine() . ")</p>";
    echo "<pre>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
}
