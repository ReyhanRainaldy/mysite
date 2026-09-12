<?php

$storagePath = '/tmp/storage';
@mkdir($storagePath . '/framework/views', 0755, true);
@mkdir($storagePath . '/framework/cache/data', 0755, true);
@mkdir($storagePath . '/framework/sessions', 0755, true);
@mkdir($storagePath . '/logs', 0755, true);
@mkdir($storagePath . '/bootstrap/cache', 0755, true);

$envVars = [
    'APP_STORAGE' => $storagePath,
    'VIEW_COMPILED_PATH' => "{$storagePath}/framework/views",
    'APP_PACKAGES_CACHE' => "{$storagePath}/bootstrap/cache/packages.php",
    'APP_SERVICES_CACHE' => "{$storagePath}/bootstrap/cache/services.php",
    'APP_CONFIG_CACHE' => "{$storagePath}/bootstrap/cache/config.php",
    'APP_ROUTES_CACHE' => "{$storagePath}/bootstrap/cache/routes-v7.php",
    'APP_EVENTS_CACHE' => "{$storagePath}/bootstrap/cache/events.php",
    'SESSION_DRIVER' => 'array',
    'CACHE_STORE' => 'array',
    'LOG_CHANNEL' => 'stderr',
    'LOG_STACK' => 'stderr',
    'DB_CONNECTION' => 'sqlite',
    'DB_DATABASE' => ':memory:',
    'APP_MAINTENANCE_DRIVER' => 'array',
    'APP_DEBUG' => 'false',
];

foreach ($envVars as $key => $value) {
    putenv("{$key}={$value}");
    $_ENV[$key] = $value;
    $_SERVER[$key] = $value;
}

define('LARAVEL_START', microtime(true));

require __DIR__ . '/../vendor/autoload.php';

/** @var \Illuminate\Foundation\Application $app */
$app = require_once __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(\Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = \Illuminate\Http\Request::capture()
);

$response->send();

try {
    $kernel->terminate($request, $response);
} catch (\Throwable $e) {
    // Ignore shutdown termination errors on serverless
}
