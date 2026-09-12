<?php

// Prepare writable /tmp storage paths for Vercel Serverless environment
$storagePath = '/tmp/storage';
@mkdir($storagePath . '/framework/views', 0755, true);
@mkdir($storagePath . '/framework/cache/data', 0755, true);
@mkdir($storagePath . '/framework/sessions', 0755, true);
@mkdir($storagePath . '/logs', 0755, true);

$_ENV['APP_STORAGE'] = $storagePath;
$_ENV['VIEW_COMPILED_PATH'] = $storagePath . '/framework/views';
$_ENV['SESSION_DRIVER'] = 'cookie';
$_ENV['CACHE_STORE'] = 'array';
$_ENV['LOG_CHANNEL'] = 'stderr';

putenv("APP_STORAGE={$storagePath}");
putenv("VIEW_COMPILED_PATH={$storagePath}/framework/views");
putenv("SESSION_DRIVER=cookie");
putenv("CACHE_STORE=array");
putenv("LOG_CHANNEL=stderr");

require __DIR__ . '/../public/index.php';
