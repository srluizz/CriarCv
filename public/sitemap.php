<?php

header("Content-Type: application/xml; charset=utf-8");

$base_url = "https://criarcv.online/"; 

$paginas = [
    ""            => ["priority" => "1.0", "changefreq" => "daily"],
    "gerador"     => ["priority" => "0.9", "changefreq" => "monthly"],
    "contato"     => ["priority" => "0.5", "changefreq" => "monthly"],
    "privacidade" => ["priority" => "0.3", "changefreq" => "monthly"],
    "termos"      => ["priority" => "0.3", "changefreq" => "monthly"],
];

echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

foreach ($paginas as $slug => $config) {
    echo '<url>';
    echo '<loc>' . $base_url . $slug . '</loc>';
    echo '<lastmod>' . date('Y-m-d') . '</lastmod>';
    echo '<changefreq>' . $config['changefreq'] . '</changefreq>';
    echo '<priority>' . $config['priority'] . '</priority>';
    echo '</url>';
}

echo '</urlset>';