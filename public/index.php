<?php

session_start();
if ($_SERVER['HTTP_HOST'] == 'localhost') {
    define('BASE_URL', 'http://localhost/criarcv/public');
} else {
    define('BASE_URL', 'https://criarcv.online');
}

$pages = require_once '../src/config/routes.php';

$route = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'home';

$currentPage = $pages[$route] ?? $pages['home'];

if (!isset($pages[$route])) {
    http_response_code(404);
}

$pageTitle = $currentPage['title'];
$pageDesc  = $currentPage['desc'];
$viewPath  = '../src/app/Views/pages/' . $currentPage['view'];

require_once '../src/app/Views/partials/header.php';

if (file_exists($viewPath)) {
    require_once $viewPath;
} else {
    echo "<section class='container'><h2 class='text-center py-20 font-bold'>Erro: Arquivo da página não encontrado.</h2></section>";
}

require_once '../src/app/Views/partials/footer.php';