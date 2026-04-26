<?php
/**
 * Partial: Outros Modelos 100% Dinâmicos
 * Usa lógica de similaridade e palavras-chave para criar relacionados automaticamente
 */

static $modelosCache = null;

if ($modelosCache === null) {
    $configPath = dirname(__DIR__, 3) . '/config/routes.php';
    $diretorioModelos = dirname(__DIR__, 1) . '/pages/modelos/';
    
    $todasAsRotas = file_exists($configPath) ? include($configPath) : [];
    $arquivosFisicos = glob($diretorioModelos . "*.php");
    
    $trace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 1);
    $arquivoPai = basename($trace[0]['file']);
    $slugAtual = str_replace('.php', '', $arquivoPai);

    // 1. Quebra o nome do arquivo atual em palavras-chave (ex: "auxiliar-adm" -> ["auxiliar", "adm"])
    // Removemos palavras comuns que não ajudam na filtragem
    $stopWords = ['curriculo', 'para', 'de', 'do', 'da', 'modelo'];
    $keywordsAtuais = array_diff(explode('-', $slugAtual), $stopWords);

    $relacionados = [];
    $outros = [];

    foreach ($arquivosFisicos as $caminho) {
        $nomeArquivo = basename($caminho);
        $slugLoop = str_replace('.php', '', $nomeArquivo);
        
        if ($nomeArquivo === $arquivoPai || $nomeArquivo === 'modelos.php') continue;

        $rotaChave = isset($todasAsRotas['modelos/curriculo-' . $slugLoop]) ? 'modelos/curriculo-' . $slugLoop : 'modelos/' . $slugLoop;

        if (isset($todasAsRotas[$rotaChave])) {
            $tituloCompleto = explode('|', $todasAsRotas[$rotaChave]['title'])[0];
            $labelCurto = str_replace(['Modelo de Currículo para ', 'Modelo de Currículo ', ' Grátis'], '', $tituloCompleto);
            
            $item = [
                'url' => BASE_URL . '/' . $rotaChave,
                'label' => trim($labelCurto),
                'seo_title' => trim($tituloCompleto),
                'slug' => $slugLoop
            ];

            // 2. Lógica de Afinidade: verifica se o slug do loop tem palavras em comum com o slug atual
            $keywordsLoop = array_diff(explode('-', $slugLoop), $stopWords);
            $interseccao = array_intersect($keywordsAtuais, $keywordsLoop);

            if (!empty($interseccao)) {
                $relacionados[] = $item;
            } else {
                $outros[] = $item;
            }
        }
    }

    // 3. Montagem Final (Estável por dia para o Google)
    srand(strtotime(date('Y-m-d'))); 
    shuffle($relacionados);
    shuffle($outros);
    srand(); // Reseta seed

    $listaFinal = array_merge($relacionados, $outros);
    $modelosCache = array_slice($listaFinal, 0, 6);
}

$exibirAgora = $modelosCache;
?>

<?php if (!empty($exibirAgora)): ?>
<section class="mt-20 border-t border-gray-100 pt-16 mb-12 not-prose">
    <div class="max-w-4xl mx-auto px-4 md:px-0">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 flex items-center">
            <span class="bg-blue-600 w-2 h-8 rounded-full mr-3"></span>
            Sugestões para você
        </h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <?php foreach ($exibirAgora as $modelo): ?>
                <a href="<?= $modelo['url'] ?>" title="Ver <?= $modelo['seo_title'] ?>"
                   class="group p-5 bg-white border border-gray-100 rounded-2xl hover:border-blue-500 hover:shadow-2xl hover:scale-[1.02] transition-all duration-300 shadow-sm">
                    <div class="flex items-center space-x-4">
                        <div class="p-3 bg-blue-50 rounded-xl group-hover:bg-blue-600 transition-colors text-blue-600 group-hover:text-white">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-[10px] uppercase tracking-wider text-gray-400 font-bold group-hover:text-blue-400">Currículo</span>
                            <span class="font-bold text-gray-800 group-hover:text-blue-600 leading-tight"><?= $modelo['label'] ?></span>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>