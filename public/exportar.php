<?php
/**
 * CriarCV.online - Processador de Exportação PDF Oficial
 */
require_once __DIR__ . '/../vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: /gerador");
    exit;
}

$htmlRaw = $_POST['html'] ?? '';

$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isRemoteEnabled', true); 
$options->set('defaultFont', 'Helvetica');

$dompdf = new Dompdf($options);


$style = "
<style>
    @page { margin: 0; }
    body { 
        margin: 0; 
        padding: 0; 
        font-family: Helvetica, Arial, sans-serif; 
        background: #ffffff;
    }
    #cv-preview { 
        padding: 20mm !important; 
        width: 170mm !important; 
        margin: 0 auto;
    }
    
    h1, p, span, td { color: #1e293b !important; }
    .text-blue-600, #out_cargo { color: #1e293b !important; }

    #out_contatos span {
    color: #475569 !important; /* Um cinza elegante */
    font-size: 10pt !important;
    font-weight: 500;
    }

    
    #out_skills span {
        display: inline-block;
        background: #f1f5f9;
        border: 1px solid #e2e8f0;
        padding: 4px 10px;
        margin-right: 5px;
        margin-bottom: 8px;
        font-size: 9pt;
        border-radius: 4px;
    }
    
    table { width: 100%; border-collapse: collapse; margin-bottom: 5px; }
    td { vertical-align: top; }
    
    .section-title {
        font-size: 9pt;
        font-weight: bold;
        text-transform: uppercase;
        color: #94a3b8 !important;
        border-bottom: 1px solid #f1f5f9;
        padding-bottom: 5px;
        margin-top: 20px;
        margin-bottom: 10px;
    }
</style>
";


$fullHtml = "
<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    $style
</head>
<body>
    <div id='cv-preview'>
        $htmlRaw
    </div>
</body>
</html>";

$dompdf->loadHtml($fullHtml);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();

$nomeArquivo = "curriculo-criarcv.pdf";

header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . $nomeArquivo . '"');
header('Cache-Control: private, max-age=0, must-revalidate');
header('Pragma: public');

echo $dompdf->output();
exit;