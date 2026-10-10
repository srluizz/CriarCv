<?php

if (!isset($pagina) || !is_array($pagina)) {
    echo '<p class="p-8 text-center">Página de modelo indisponível.</p>';
    return;
}

if (!function_exists('modelo_e')) {
    function modelo_e(string $valor): string
    {
        return htmlspecialchars($valor, ENT_QUOTES, 'UTF-8');
    }
}

$ctaHref = BASE_URL . '/gerador' . (!empty($modeloSlug) ? '?modelo=' . rawurlencode($modeloSlug) : '');
$canonical = BASE_URL . '/' . ltrim((string) ($pagina['path'] ?? ''), '/');
$faqs = $pagina['faqs'] ?? [];
?>
<main class="container mx-auto px-4 py-12">
    <nav class="max-w-4xl mx-auto mb-10 text-sm" aria-label="Breadcrumb">
        <ol class="list-none p-0 inline-flex flex-wrap items-center text-gray-500">
            <li class="flex items-center">
                <a href="<?= BASE_URL ?>/" class="hover:text-blue-600 transition-colors font-medium">Home</a>
                <svg class="w-4 h-4 mx-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </li>
            <li class="flex items-center">
                <a href="<?= BASE_URL ?>/modelos" class="hover:text-blue-600 transition-colors font-medium">Modelos</a>
                <svg class="w-4 h-4 mx-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </li>
            <li class="text-blue-600 font-bold"><?= modelo_e($pagina['breadcrumb']) ?></li>
        </ol>
    </nav>

    <article class="max-w-4xl mx-auto">
        <header class="text-center mb-12">
            <p class="text-sm font-semibold uppercase tracking-widest text-blue-600 mb-4">Guia atualizado em outubro de 2026</p>
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-6 tracking-tight leading-tight"><?= modelo_e($pagina['h1']) ?></h1>
            <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed"><?= modelo_e($pagina['lead']) ?></p>
            <div class="mt-8 flex flex-col sm:flex-row justify-center items-center gap-4">
                <a href="<?= modelo_e($ctaHref) ?>" class="w-full sm:w-auto bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-10 rounded-xl shadow-lg transition text-center"><?= modelo_e($pagina['cta']) ?></a>
                <a href="#exemplo" class="w-full sm:w-auto bg-white border border-gray-300 text-gray-700 font-bold py-4 px-10 rounded-xl hover:bg-gray-50 transition text-center">Ver exemplo completo</a>
            </div>
        </header>

        <nav class="mb-12 flex flex-wrap gap-2 justify-center" aria-label="Nesta página">
            <a href="#o-que-colocar" class="text-sm font-semibold text-blue-700 bg-blue-50 px-4 py-2 rounded-full hover:bg-blue-100">O que colocar</a>
            <a href="#como-escrever" class="text-sm font-semibold text-blue-700 bg-blue-50 px-4 py-2 rounded-full hover:bg-blue-100">Como escrever</a>
            <a href="#erros" class="text-sm font-semibold text-blue-700 bg-blue-50 px-4 py-2 rounded-full hover:bg-blue-100">Erros comuns</a>
            <a href="#exemplo" class="text-sm font-semibold text-blue-700 bg-blue-50 px-4 py-2 rounded-full hover:bg-blue-100">Exemplo</a>
            <a href="#perguntas" class="text-sm font-semibold text-blue-700 bg-blue-50 px-4 py-2 rounded-full hover:bg-blue-100">Perguntas</a>
        </nav>

        <?php foreach ($pagina['secoes'] as $secao): ?>
        <section id="<?= modelo_e($secao['id']) ?>" class="mb-14 scroll-mt-28">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4"><?= modelo_e($secao['titulo']) ?></h2>
            <?php foreach ($secao['paragrafos'] ?? [] as $paragrafo): ?>
                <p class="text-gray-700 leading-relaxed mb-4"><?= modelo_e($paragrafo) ?></p>
            <?php endforeach; ?>

            <?php if (!empty($secao['cards'])): ?>
            <div class="grid md:grid-cols-2 gap-4 my-6">
                <?php foreach ($secao['cards'] as $card): ?>
                <div class="bg-white p-5 rounded-2xl border border-gray-200 shadow-sm">
                    <h3 class="font-bold text-gray-900 mb-2"><?= modelo_e($card['titulo']) ?></h3>
                    <p class="text-sm text-gray-600 leading-relaxed"><?= modelo_e($card['texto']) ?></p>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <?php if (!empty($secao['lista'])): ?>
            <ul class="space-y-3 mb-4">
                <?php foreach ($secao['lista'] as $item): ?>
                <li class="flex gap-3 bg-slate-50 border border-slate-100 rounded-xl p-4 text-gray-700 leading-relaxed">
                    <span class="text-blue-600 font-bold" aria-hidden="true">•</span>
                    <span><?= modelo_e($item) ?></span>
                </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>

            <?php if (!empty($secao['frases'])): ?>
            <div class="bg-slate-900 text-white rounded-2xl p-6 md:p-8 space-y-4">
                <p class="text-xs font-bold uppercase tracking-widest text-blue-300">Frases para adaptar</p>
                <?php foreach ($secao['frases'] as $frase): ?>
                <p class="text-slate-100 leading-relaxed border-l-4 border-blue-500 pl-4"><?= modelo_e($frase) ?></p>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <?php if (!empty($secao['tabela'])): ?>
            <div class="overflow-x-auto rounded-2xl border border-gray-200">
                <table class="w-full text-sm text-left">
                    <thead class="bg-slate-900 text-white">
                        <tr>
                            <th class="p-4 font-semibold">Escreva assim</th>
                            <th class="p-4 font-semibold">Evite assim</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($secao['tabela'] as $linha): ?>
                        <tr class="border-t border-gray-100 align-top">
                            <td class="p-4 text-gray-800 bg-emerald-50/60"><?= modelo_e($linha['bom']) ?></td>
                            <td class="p-4 text-gray-600"><?= modelo_e($linha['ruim']) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?php endif; ?>
        </section>
        <?php endforeach; ?>

        <section id="erros" class="mb-14 scroll-mt-28">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4"><?= modelo_e($pagina['erros_titulo']) ?></h2>
            <div class="space-y-4">
                <?php foreach ($pagina['erros'] as $erro): ?>
                <div class="border border-red-100 bg-red-50/70 rounded-2xl p-5">
                    <h3 class="font-bold text-red-900 mb-1"><?= modelo_e($erro['titulo']) ?></h3>
                    <p class="text-sm text-red-950/80 leading-relaxed"><?= modelo_e($erro['texto']) ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="palavras" class="mb-14 scroll-mt-28">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">Palavras que o recrutador procura neste cargo</h2>
            <p class="text-gray-700 leading-relaxed mb-4"><?= modelo_e($pagina['palavras_intro']) ?></p>
            <ul class="flex flex-wrap gap-2">
                <?php foreach ($pagina['palavras'] as $palavra): ?>
                <li class="bg-white border border-gray-200 text-gray-800 text-sm font-semibold px-3 py-2 rounded-full"><?= modelo_e($palavra) ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section id="exemplo" class="mb-14 scroll-mt-28">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2"><?= modelo_e($pagina['exemplo_titulo']) ?></h2>
            <p class="text-gray-600 mb-6">Exemplo fictício. Troque nomes, empresas e números pelos seus. O botão abaixo abre este mesmo exemplo no gerador.</p>
            <?php $ex = $pagina['exemplo']; ?>
            <div class="bg-gray-100 border border-dashed border-gray-300 rounded-3xl p-4 md:p-8">
                <div class="bg-white p-6 md:p-10 shadow-xl max-w-2xl mx-auto border-t-8 border-blue-600 text-sm text-gray-700">
                    <div class="text-center mb-6">
                        <h3 class="text-2xl font-black text-gray-900 uppercase tracking-tight"><?= modelo_e($ex['nome']) ?></h3>
                        <p class="text-gray-500 mt-1"><?= modelo_e($ex['contato']) ?></p>
                        <?php if (!empty($ex['linha'])): ?>
                        <p class="text-blue-700 font-semibold mt-2"><?= modelo_e($ex['linha']) ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-5">
                        <h4 class="font-bold text-blue-700 uppercase text-xs tracking-widest border-b border-blue-100 pb-1 mb-2"><?= modelo_e($ex['resumo_titulo']) ?></h4>
                        <p class="leading-relaxed"><?= modelo_e($ex['resumo']) ?></p>
                    </div>
                    <?php if (!empty($ex['experiencias'])): ?>
                    <div class="mb-5">
                        <h4 class="font-bold text-blue-700 uppercase text-xs tracking-widest border-b border-blue-100 pb-1 mb-3">Experiência</h4>
                        <?php foreach ($ex['experiencias'] as $exp): ?>
                        <div class="mb-4">
                            <div class="flex justify-between gap-4 items-baseline">
                                <p class="font-bold text-gray-900"><?= modelo_e($exp['cargo']) ?></p>
                                <span class="text-xs text-gray-400 whitespace-nowrap"><?= modelo_e($exp['periodo']) ?></span>
                            </div>
                            <ul class="list-disc pl-5 mt-2 space-y-1">
                                <?php foreach ($exp['bullets'] as $bullet): ?>
                                <li><?= modelo_e($bullet) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                    <?php if (!empty($ex['formacao'])): ?>
                    <div class="mb-5">
                        <h4 class="font-bold text-blue-700 uppercase text-xs tracking-widest border-b border-blue-100 pb-1 mb-2">Formação</h4>
                        <?php foreach ($ex['formacao'] as $formacao): ?>
                        <p class="font-bold text-gray-900"><?= modelo_e($formacao['curso']) ?></p>
                        <p class="text-gray-500 mb-2"><?= modelo_e($formacao['detalhe']) ?></p>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                    <?php if (!empty($ex['habilidades'])): ?>
                    <div>
                        <h4 class="font-bold text-blue-700 uppercase text-xs tracking-widest border-b border-blue-100 pb-1 mb-2">Habilidades</h4>
                        <p><?= modelo_e(implode(' · ', $ex['habilidades'])) ?></p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section id="perguntas" class="mb-14 scroll-mt-28">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">Perguntas frequentes</h2>
            <div class="space-y-3">
                <?php foreach ($faqs as $faq): ?>
                <details class="group bg-white border border-gray-200 rounded-xl p-5">
                    <summary class="font-bold cursor-pointer list-none flex justify-between items-center gap-4 text-gray-900">
                        <?= modelo_e($faq['p']) ?>
                        <span class="text-blue-600 group-open:rotate-180 transition-transform" aria-hidden="true">▼</span>
                    </summary>
                    <p class="mt-4 text-gray-700 leading-relaxed border-l-2 border-blue-600 pl-4"><?= modelo_e($faq['r']) ?></p>
                </details>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="mb-4 bg-blue-50 border border-blue-100 rounded-3xl p-6 md:p-8">
            <h2 class="text-xl font-bold text-blue-950 mb-4">Antes de enviar</h2>
            <ul class="space-y-3">
                <?php foreach ($pagina['checklist'] as $item): ?>
                <li class="flex gap-3 text-gray-800">
                    <span class="text-blue-600 font-bold" aria-hidden="true">✓</span>
                    <span><?= modelo_e($item) ?></span>
                </li>
                <?php endforeach; ?>
            </ul>
        </section>

        <?php
        $ctaTitle = $pagina['cta_titulo'];
        $ctaText = $pagina['cta_texto'];
        $ctaButton = $pagina['cta'];
        include PARTIALS_PATH . '/cta-curriculo.php';
        include PARTIALS_PATH . '/outros-modelos.php';
        ?>
    </article>
</main>

<script type="application/ld+json">
<?php
$faqEntities = [];
foreach ($faqs as $faq) {
    $faqEntities[] = [
        '@type' => 'Question',
        'name' => $faq['p'],
        'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => $faq['r'],
        ],
    ];
}

$schema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => BASE_URL . '/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Modelos', 'item' => BASE_URL . '/modelos'],
                ['@type' => 'ListItem', 'position' => 3, 'name' => $pagina['breadcrumb']],
            ],
        ],
        [
            '@type' => 'Article',
            'headline' => $pagina['h1'],
            'description' => $pagina['lead'],
            'inLanguage' => 'pt-BR',
            'datePublished' => '2026-03-01',
            'dateModified' => '2026-10-10',
            'author' => ['@type' => 'Organization', 'name' => 'CriarCV.online', 'url' => BASE_URL . '/'],
            'publisher' => ['@type' => 'Organization', 'name' => 'CriarCV.online', 'url' => BASE_URL . '/'],
            'mainEntityOfPage' => $canonical,
        ],
        [
            '@type' => 'FAQPage',
            'mainEntity' => $faqEntities,
        ],
    ],
];

echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP);
?>
</script>
