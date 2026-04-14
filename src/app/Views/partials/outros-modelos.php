<?php
// 1. Caminhos absolutos
$configPath = dirname(__DIR__, 3) . '/config/routes.php';
$diretorioModelos = dirname(__DIR__, 1) . '/pages/modelos/';

$todasAsRotas = file_exists($configPath) ? include($configPath) : [];
$arquivosFisicos = glob($diretorioModelos . "*.php");

// 2. Identifica qual arquivo .php está sendo exibido agora
// Usamos debug_backtrace para saber quem deu o 'include', já que estamos em um partial
$trace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 1);
$arquivoPai = basename($trace[0]['file']);

$modelosParaExibir = [];

foreach ($arquivosFisicos as $caminho) {
    $nomeArquivo = basename($caminho);
    $slugArquivo = str_replace('.php', '', $nomeArquivo);
    
    // REGRA DE OURO: Se o arquivo físico da pasta for o mesmo que está incluindo este partial, pule.
    if ($nomeArquivo === $arquivoPai || $nomeArquivo === 'modelos.php') {
        continue;
    }

    // Tenta encontrar a rota correspondente para pegar o título bonitinho
    $rotaChave = 'modelos/curriculo-' . $slugArquivo;
    
    if (!isset($todasAsRotas[$rotaChave])) {
        $rotaChave = 'modelos/' . $slugArquivo;
    }

    if (isset($todasAsRotas[$rotaChave])) {
        $titulo = explode('|', $todasAsRotas[$rotaChave]['title'])[0];
        $titulo = str_replace(['Modelo de Currículo para ', 'Modelo de Currículo ', ' Grátis'], '', $titulo);
        
        $modelosParaExibir[] = [
            'url' => BASE_URL . '/' . $rotaChave,
            'titulo' => trim($titulo)
        ];
    }
}

shuffle($modelosParaExibir);
$exibirAgora = array_slice($modelosParaExibir, 0, 6);
?>

<?php if (!empty($exibirAgora)): ?>
<section class="mt-20 border-t border-gray-100 pt-16 mb-12 not-prose">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 flex items-center px-4 md:px-0">
            <span class="bg-blue-600 w-2 h-8 rounded-full mr-3"></span>
            Conheça outros modelos
        </h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 px-4 md:px-0">
            <?php foreach ($exibirAgora as $modelo): ?>
                <a href="<?= $modelo['url'] ?>" class="group p-5 bg-white border border-gray-200 rounded-2xl hover:border-blue-500 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center space-x-4">
                        <div class="p-3 bg-blue-50 rounded-xl group-hover:bg-blue-600 transition-colors text-blue-600 group-hover:text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <span class="font-bold text-gray-700 group-hover:text-blue-600 transition-colors leading-tight">
                            <?= $modelo['titulo'] ?>
                        </span>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>