<?php

session_start();

// Define a URL base
$host = $_SERVER['HTTP_HOST'] ?? '';
if ($host === 'localhost') {
    define('BASE_URL', 'http://localhost/criarcv/public');
} elseif (preg_match('/^(localhost|127\.0\.0\.1):\d+$/', $host)) {
    define('BASE_URL', 'http://' . $host);
} else {
    define('BASE_URL', 'https://criarcv.online');
}

// CRIA O CAMINHO PARA OS PARTIALS
// __DIR__ pega o caminho da pasta 'public'. O '/../' sobe e entra em 'src'
define('PARTIALS_PATH', __DIR__ . '/../src/app/Views/partials');

$pages = require_once __DIR__ . '/../src/config/routes.php';

$route = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'home';

$currentPage = $pages[$route] ?? $pages['home'];

if (!isset($pages[$route])) {
    http_response_code(404);
}

$pageTitle = $currentPage['title'];
$pageDesc  = $currentPage['desc'];
$viewPath  = __DIR__ . '/../src/app/Views/pages/' . $currentPage['view'];

$modeloSlug = str_starts_with($route, 'modelos/') ? substr($route, strlen('modelos/')) : '';

$exemploCurriculo = null;
if ($route === 'gerador' && isset($_GET['modelo'])) {
    $pedido = preg_replace('/[^a-z0-9\-]/', '', (string) $_GET['modelo']);
    $exemplos = require __DIR__ . '/../src/config/exemplos.php';
    if ($pedido !== '' && isset($exemplos[$pedido])) {
        $exemploCurriculo = $exemplos[$pedido];
    }
}

require_once __DIR__ . '/../src/app/Views/partials/header.php';

if (file_exists($viewPath)) {
    require_once $viewPath;
} else {
    echo "<section class='container'><h2 class='text-center py-20 font-bold'>Erro: Arquivo da página não encontrado.</h2></section>";
}

require_once __DIR__ . '/../src/app/Views/partials/footer.php';