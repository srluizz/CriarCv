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
        <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-4">Modelos de Currículo Para Você Se Inspirar</h1>
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

    <section class="max-w-3xl mx-auto mt-20 text-slate-700 leading-relaxed">
        <h2 class="text-2xl font-bold text-slate-900 mb-4">Como escolher o modelo</h2>
        <p class="mb-4">Cada página explica a rotina daquele cargo, os erros que fazem o recrutador pular o PDF e um exemplo fictício. O botão do guia abre o gerador com esse exemplo preenchido. Troque nome, telefone, empresas e números pelos seus antes de baixar.</p>
        <p class="mb-4">Se você nunca trabalhou, comece por primeiro emprego, jovem aprendiz ou estágio. Se a vaga mistura duas funções, use o cargo do anúncio no título e puxe só as tarefas que você fazia de verdade.</p>
        <h2 class="text-2xl font-bold text-slate-900 mb-4 mt-10">Perguntas frequentes</h2>
        <div class="space-y-3">
            <details class="bg-white border border-slate-200 rounded-xl p-5">
                <summary class="font-bold cursor-pointer">O PDF é gratuito?</summary>
                <p class="mt-3">Sim. Você preenche no navegador e baixa o PDF sem cadastro. Os dados do currículo não ficam salvos numa conta.</p>
            </details>
            <details class="bg-white border border-slate-200 rounded-xl p-5">
                <summary class="font-bold cursor-pointer">Posso usar o modelo de outro cargo?</summary>
                <p class="mt-3">Pode abrir qualquer exemplo, mas o recrutador compara o texto com o anúncio. Auxiliar administrativo, caixa e serviços gerais contam rotinas diferentes. Escolha a página da vaga e adapte.</p>
            </details>
            <details class="bg-white border border-slate-200 rounded-xl p-5">
                <summary class="font-bold cursor-pointer">O arquivo serve para WhatsApp e e-mail?</summary>
                <p class="mt-3">Sim. O download é um PDF de uma página, no formato que empresas pedem no e-mail, no WhatsApp e nos portais de vaga.</p>
            </details>
        </div>
    </section>

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
    "@graph": [
        {
            "@type": "ItemList",
            "name": "Modelos de currículo por cargo",
            "url": "<?= BASE_URL ?>/modelos",
            "itemListElement": <?= json_encode($jsonItems, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) ?>
        },
        {
            "@type": "FAQPage",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "O PDF é gratuito?",
                    "acceptedAnswer": { "@type": "Answer", "text": "Sim. Você preenche no navegador e baixa o PDF sem cadastro." }
                },
                {
                    "@type": "Question",
                    "name": "Posso usar o modelo de outro cargo?",
                    "acceptedAnswer": { "@type": "Answer", "text": "Pode abrir qualquer exemplo, mas o recrutador compara o texto com o anúncio. Escolha a página da vaga e adapte." }
                },
                {
                    "@type": "Question",
                    "name": "O arquivo serve para WhatsApp e e-mail?",
                    "acceptedAnswer": { "@type": "Answer", "text": "Sim. O download é um PDF de uma página." }
                }
            ]
        }
    ]
}
</script>