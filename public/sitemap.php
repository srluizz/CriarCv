<?php

header("Content-Type: application/xml; charset=utf-8");

$base_url = "https://criarcv.online"; 

$pages = require_once __DIR__ . '/../src/config/routes.php';

$config_especifica = [
    "home"        => ["slug" => "", "priority" => "1.0", "changefreq" => "daily"],
    "gerador"     => ["slug" => "gerador", "priority" => "0.9", "changefreq" => "monthly"],
    "modelos"     => ["slug" => "modelos", "priority" => "0.8", "changefreq" => "weekly"],
    "privacidade" => ["slug" => "privacidade", "priority" => "0.3", "changefreq" => "monthly"],
    "termos"      => ["slug" => "termos", "priority" => "0.3", "changefreq" => "monthly"],
];

echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

foreach ($pages as $slug => $info) {
    
    $url_final = ($slug === 'home') ? $base_url . "/" : $base_url . "/" . $slug;
    
    $priority = "0.5";
    $changefreq = "monthly";

    if (str_starts_with($slug, 'modelos/curriculo-')) {
        $priority = "0.7";
        $changefreq = "weekly";
    }

    if (isset($config_especifica[$slug])) {
        $conf = $config_especifica[$slug];
        $url_final = $base_url . "/" . $conf['slug'];
        $priority = $conf['priority'];
        $changefreq = $conf['changefreq'];
    }
    $arquivo_view = __DIR__ . '/../src/app/Views/pages/' . $info['view'];
    $lastmod = file_exists($arquivo_view) ? date("Y-m-d", filemtime($arquivo_view)) : date('Y-m-d');

    echo '<url>';
    echo '<loc>' . htmlspecialchars($url_final) . '</loc>';
    echo '<lastmod>' . $lastmod . '</lastmod>';
    echo '<changefreq>' . $changefreq . '</changefreq>';
    echo '<priority>' . $priority . '</priority>';
    echo '</url>';
}

echo '</urlset>';