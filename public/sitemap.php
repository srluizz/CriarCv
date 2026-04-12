<?php

header("Content-Type: application/xml; charset=utf-8");

$base_url = "https://criarcv.online/"; 


$paginas_estaticas = [
    ""            => ["priority" => "1.0", "changefreq" => "daily"],
    "gerador"     => ["priority" => "0.9", "changefreq" => "monthly"],
    "colaborar"   => ["priority" => "0.7", "changefreq" => "monthly"],
    "contato"     => ["priority" => "0.5", "changefreq" => "monthly"],
    "privacidade" => ["priority" => "0.3", "changefreq" => "monthly"],
    "termos"      => ["priority" => "0.3", "changefreq" => "monthly"],
    "modelos"     => ["priority" => "0.8", "changefreq" => "weekly"],
];

$modelos_seo = [
    "modelos/curriculo-primeiro-emprego",
    "modelos/curriculo-jovem-aprendiz",
    "modelos/curriculo-auxiliar-administrativo"
];

echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

foreach ($paginas_estaticas as $slug => $config) {
    echo '<url>';
    echo '<loc>' . $base_url . $slug . '</loc>';
    echo '<lastmod>' . date('Y-m-d') . '</lastmod>';
    echo '<changefreq>' . $config['changefreq'] . '</changefreq>';
    echo '<priority>' . $config['priority'] . '</priority>';
    echo '</url>';
}

foreach ($modelos_seo as $slug) {
    echo '<url>';
    echo '<loc>' . $base_url . $slug . '</loc>';
    echo '<lastmod>' . date('Y-m-d') . '</lastmod>';
    echo '<changefreq>weekly</changefreq>';
    echo '<priority>0.7</priority>';
    echo '</url>';
}

echo '</urlset>';