<?php

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

   // Serve static files (images, css, js) from /public
   $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
   $publicDir = realpath(__DIR__ . '/../public');
   $file = realpath($publicDir . $path);
   $types = [
       'png' => 'image/png', 'jpg' => 'image/jpeg', 'jpeg' => 'image/jpeg',
       'gif' => 'image/gif', 'svg' => 'image/svg+xml', 'webp' => 'image/webp',
       'ico' => 'image/x-icon', 'css' => 'text/css', 'js' => 'application/javascript',
   ];
   if ($file && is_file($file) && strpos($file, $publicDir . DIRECTORY_SEPARATOR) === 0) {
       $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
       if (isset($types[$ext])) {
           header('Content-Type: ' . $types[$ext]);
           header('Cache-Control: public, max-age=86400');
           readfile($file);
           exit;
       }
   }
require __DIR__ . '/../public/index.php';
