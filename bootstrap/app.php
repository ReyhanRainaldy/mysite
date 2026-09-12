<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

$basePath = dirname(__DIR__);
$storagePath = env('APP_STORAGE', '/tmp/storage');
@mkdir($storagePath . '/framework/views', 0755, true);
@mkdir($storagePath . '/framework/cache/data', 0755, true);
@mkdir($storagePath . '/framework/sessions', 0755, true);
@mkdir($storagePath . '/logs', 0755, true);
@mkdir($storagePath . '/bootstrap/cache', 0755, true);

$app = Application::configure(basePath: $basePath)
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->report(function (\Throwable $e) {
            echo "<h1>EX_REPORT_CAUGHT</h1><pre>" . get_class($e) . ": " . $e->getMessage() . "\nFile: " . $e->getFile() . ":" . $e->getLine() . "\n\n" . $e->getTraceAsString() . "</pre>";
        });
    })
    ->create();

$app->useStoragePath($storagePath);

return $app;
