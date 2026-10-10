<?php

$public = __DIR__ . '/public';
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/');

if ($uri === '/sitemap.xml') {
    require $public . '/sitemap.php';
    return true;
}

$publicReal = realpath($public);
$full = realpath($public . $uri);
if ($uri !== '/' && $full && $publicReal && str_starts_with($full, $publicReal) && is_file($full)) {
    return false;
}

$_GET['url'] = trim($uri, '/');
chdir($public);
require $public . '/index.php';
