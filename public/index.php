<?php

session_start();
define('BASE_URL', 'https://criarcv.online');


$route = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'home';

$pages = [
    'home' => [
        'view' => 'home.php',
        'title' => 'Criar Currículo Online Grátis | Moderno e Profissional',
        'desc'  => 'Crie seu currículo em minutos com visualização em tempo real. Modelos modernos aprovados por recrutadores.'
    ],
    'gerador' => [
        'view' => 'editor.php',
        'title' => 'Editor de Currículo em Tempo Real | CriarCV.online',
        'desc'  => 'Preencha seus dados e veja seu currículo ser montado instantaneamente. Baixe em PDF.'
    ],
    'termos' => [
        'view' => 'termos.php',
        'title' => 'Termos de Uso | CriarCV.online',
        'desc'  => 'Leia os termos de uso da nossa plataforma de criação de currículos.'
    ],
    'privacidade' => [
        'view' => 'privacidade.php',
        'title' => 'Política de Privacidade | CriarCV.online',
        'desc'  => 'Saiba como protegemos seus dados pessoais ao criar seu currículo.'
    ],
    'contato' => [
        'view' => 'contato.php',
        'title' => 'Fale Conosco | CriarCV.online',
        'desc'  => 'Dúvidas ou sugestões? Entre em contato com a equipe do CriarCV.'
    ]
];

if (!array_key_exists($route, $pages)) {
    http_response_code(404);
    $currentPage = $pages['home']; 
    $viewPath = '../src/app/Views/pages/home.php';
} else {
    $currentPage = $pages[$route];
    $viewPath = '../src/app/Views/pages/' . $currentPage['view'];
}
$pageTitle = $currentPage['title'];
$pageDesc  = $currentPage['desc'];

require_once '../src/app/Views/partials/header.php';

if (file_exists($viewPath)) {
    require_once $viewPath;
} else {
    echo "<section class='container'><h2>Erro: Arquivo da página não encontrado.</h2></section>";
}

require_once '../src/app/Views/partials/footer.php';