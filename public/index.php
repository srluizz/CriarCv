<?php

session_start();
define('BASE_URL', 'https://criarcv.online');


$route = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'home';

$pages = [
    'home' => [
        'view' => 'home.php',
        'title' => 'Criar Currículo Online Grátis | Moderno e Profissional',
        'desc'  => 'Crie seu currículo online gratuitamente com visualização em tempo real e download em PDF otimizado para sistemas de RH.'
    ],
    'gerador' => [
        'view' => 'editor.php',
        'title' => 'Editor de Currículo Grátis | CriarCV.online',
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
    ],
    'colaborar' => [
        'view' => 'colaborar.php',
        'title' => 'Apoie o Projeto | CriarCV.online',
        'desc'  => 'Gostou do gerador? Considere fazer uma doação para mantermos o projeto gratuito e online.'
    ],
    'modelos' => [
    'view' => 'modelos.php',
    'title' => 'Modelos de Currículo Profissionais Grátis | CriarCV.online',
    'desc'  => 'Escolha entre nossos modelos de currículo otimizados: Primeiro Emprego, Jovem Aprendiz, Auxiliar Administrativo e muito mais. Grátis e em PDF.'
    ],
    'modelos/curriculo-primeiro-emprego' => [
        'view' => 'primeiro-emprego.php',
        'title' => 'Modelo de Currículo para Primeiro Emprego Grátis | CriarCV.online',
        'desc'  => 'Procurando seu primeiro emprego? Use nosso modelo otimizado, aprenda o que colocar mesmo sem experiência e baixe em PDF.'
    ],
    'modelos/curriculo-auxiliar-administrativo' => [
    'view' => 'auxiliar-administrativo.php',
    'title' => 'Modelo de Currículo Auxiliar Administrativo 2026 | Grátis',
    'desc'  => 'Baixe o modelo de currículo para auxiliar administrativo perfeito. Veja o que colocar no objetivo, habilidades mais buscadas e exporte em PDF.'
    ],
    'modelos/curriculo-jovem-aprendiz' => [
    'view' => 'jovem-aprendiz.php',
    'title' => 'Modelo de Currículo Jovem Aprendiz 2026 | Grátis em PDF',
    'desc'  => 'Crie seu currículo de Jovem Aprendiz em minutos. Guia completo com objetivo profissional, habilidades e modelo pronto para baixar.'
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