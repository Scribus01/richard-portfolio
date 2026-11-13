<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);

// Show any fatal error that would otherwise be hidden
register_shutdown_function(function () {
    $e = error_get_last();
    if ($e) { echo '<pre>' . print_r($e, true) . '</pre>'; }
});

// Point Laravel's writable folders to /tmp
foreach ([
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/views',
    '/tmp/storage/logs',
    '/tmp/bootstrap/cache',
] as $dir) {
    if (!is_dir($dir)) { mkdir($dir, 0777, true); }
}

$env = [
    'LARAVEL_STORAGE_PATH' => '/tmp/storage',
    'APP_CONFIG_CACHE'     => '/tmp/bootstrap/cache/config.php',
    'APP_ROUTES_CACHE'     => '/tmp/bootstrap/cache/routes.php',
    'APP_EVENTS_CACHE'     => '/tmp/bootstrap/cache/events.php',
    'APP_SERVICES_CACHE'   => '/tmp/bootstrap/cache/services.php',
    'APP_PACKAGES_CACHE'   => '/tmp/bootstrap/cache/packages.php',
];
foreach ($env as $k => $v) { putenv("$k=$v"); $_ENV[$k] = $v; $_SERVER[$k] = $v; }

require __DIR__ . '/../public/index.php';
