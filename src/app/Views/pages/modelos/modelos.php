<?php
/**
 * O arquivo index.php já carregou $pages (que contém as rotas).
 * Vamos apenas filtrar o que é modelo para exibir aqui.
 */
$modelosListagem = array_filter($pages, function($key) {
    // Filtra apenas as chaves que começam com 'modelos/curriculo-'
    return str_starts_with($key, 'modelos/curriculo-');
}, ARRAY_FILTER_USE_KEY);

// Prepara os itens para o JSON-LD
$jsonItems = [];
$posicao = 1;
?>

<main class="container mx-auto px-4 py-16">
    <header class="text-center mb-16">
        <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-4"><?= $pageTitle ?></h1>
        <p class="text-lg text-slate-600 max-w-2xl mx-auto">
            Selecione o modelo ideal para o seu momento de carreira. Todos os nossos modelos são aceitos por sistemas de RH e otimizados para leitura digital.
        </p>
    </header>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
        
        <?php foreach ($modelosListagem as $slug => $info): 
            // Limpa o título para o Card (ex: remove o sufixo SEO)
            $tituloCard = explode('|', $info['title'])[0];
            $tituloCard = str_replace(['Modelo de Currículo para ', 'Modelo de Currículo '], '', $tituloCard);
            
            // Gerar dados para o JSON-LD
            $jsonItems[] = [
                "@type" => "ListItem",
                "position" => $posicao++,
                "url" => BASE_URL . "/" . $slug,
                "name" => trim($tituloCard)
            ];

            // Define ícone/cor baseado no cargo para dar variedade visual
            $cor = 'blue';
            if (str_contains($slug, 'aprendiz')) $cor = 'green';
            if (str_contains($slug, 'administrativo')) $cor = 'orange';
            if (str_contains($slug, 'vendedor')) $cor = 'indigo';
        ?>
        
        <div class="bg-white rounded-2xl border border-slate-200 p-8 shadow-sm hover:shadow-xl hover:border-blue-300 transition-all group flex flex-col justify-between">
            <div>
                <div class="w-12 h-12 bg-<?= $cor ?>-100 text-<?= $cor ?>-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-<?= $cor ?>-600 group-hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h2 class="text-xl font-bold text-slate-900 mb-3"><?= trim($tituloCard) ?></h2>
                <p class="text-slate-600 text-sm mb-6 leading-relaxed">
                    <?= $info['desc'] ?>
                </p>
            </div>
            <a href="<?= BASE_URL ?>/<?= $slug ?>" class="text-blue-600 font-bold text-sm flex items-center gap-2 hover:gap-3 transition-all">
                Ver Modelo e Dicas <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
        </div>

        <?php endforeach; ?>

    </div>

    <section class="mt-24 max-w-4xl mx-auto bg-slate-900 rounded-3xl p-12 text-center text-white shadow-2xl">
        <h2 class="text-3xl font-bold mb-6 text-white">Não encontrou o seu cargo?</h2>
        <p class="text-slate-400 mb-10 text-lg">Nosso gerador de currículos é flexível e permite criar layouts para qualquer profissão em segundos.</p>
        <a href="<?= BASE_URL ?>/gerador" class="inline-block bg-blue-600 text-white font-extrabold py-4 px-12 rounded-full hover:bg-blue-700 transition-all hover:scale-105 shadow-lg">
            Ir para o Gerador Grátis
        </a>
    </section>
</main>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ItemList",
    "name": "Lista de Modelos de Currículo Profissionais",
    "description": "Uma coleção de modelos de currículo otimizados para diferentes cargos e níveis de experiência.",
    "url": "<?= BASE_URL ?>/modelos",
    "itemListElement": <?= json_encode($jsonItems, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>
}
</script>