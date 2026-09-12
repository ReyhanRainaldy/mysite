<?php

$storagePath = '/tmp/storage';
@mkdir($storagePath . '/framework/views', 0755, true);
@mkdir($storagePath . '/framework/cache/data', 0755, true);
@mkdir($storagePath . '/framework/sessions', 0755, true);
@mkdir($storagePath . '/logs', 0755, true);

putenv("APP_STORAGE={$storagePath}");
putenv("VIEW_COMPILED_PATH={$storagePath}/framework/views");
putenv("SESSION_DRIVER=array");
putenv("CACHE_STORE=array");
putenv("LOG_CHANNEL=stderr");
putenv("DB_CONNECTION=sqlite");
putenv("DB_DATABASE=:memory:");
putenv("APP_MAINTENANCE_DRIVER=array");

require __DIR__ . '/../public/index.php';
