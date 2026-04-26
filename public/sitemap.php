<?php

header("Content-Type: application/xml; charset=utf-8");

$base_url = "https://criarcv.online"; // Sem barra no final

// Carrega as rotas
$pages = require_once __DIR__ . '/../src/config/routes.php';

// Configurações específicas para slugs personalizados, se necessário
$config_especifica = [
    "home"        => ["slug" => ""], // Home vazia para ficar apenas a base_url
    "gerador"     => ["slug" => "gerador"],
    "modelos"     => ["slug" => "modelos"],
    "privacidade" => ["slug" => "privacidade"],
    "termos"      => ["slug" => "termos"],
];

echo '<?xml version="1.0" encoding="UTF-8"?>';
echo "\n" . '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

foreach ($pages as $slug => $info) {
    
    // Define a URL final garantindo que NÃO tenha barra no final
    if ($slug === 'home' || $slug === '') {
        $url_final = $base_url;
    } else {
        // Se houver uma slug específica configurada, usa ela, senão usa a chave do array $pages
        $slug_real = isset($config_especifica[$slug]['slug']) ? $config_especifica[$slug]['slug'] : $slug;
        $url_final = $base_url . "/" . ltrim($slug_real, '/');
    }

    // Busca a data de modificação do arquivo da View para o <lastmod>
    $arquivo_view = __DIR__ . '/../src/app/Views/pages/' . $info['view'];
    
    if (file_exists($arquivo_view)) {
        $lastmod = date("Y-m-d", filemtime($arquivo_view));
    } else {
        // Fallback caso o arquivo não seja encontrado
        $lastmod = date('Y-m-d');
    }

    echo "\n  " . '<url>';
    echo "\n    " . '<loc>' . htmlspecialchars($url_final) . '</loc>';
    echo "\n    " . '<lastmod>' . $lastmod . '</lastmod>';
    echo "\n  " . '</url>';
}

echo "\n" . '</urlset>';