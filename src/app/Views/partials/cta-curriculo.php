<?php
$ctaTitulo = $ctaTitle ?? 'Abra este exemplo no gerador';
$ctaTexto = $ctaText ?? 'O formulário entra preenchido com o exemplo desta página. Troque nome, contato e textos pelos seus antes de baixar o PDF.';
$ctaBotao = $ctaButton ?? 'Montar meu currículo grátis';
?>
<div class="mt-16 bg-gradient-to-br from-gray-900 to-blue-900 p-8 md:p-12 rounded-3xl text-center text-white shadow-2xl overflow-hidden relative">
    <div class="relative z-10">
        <h2 class="text-3xl md:text-4xl font-bold mb-4"><?= htmlspecialchars($ctaTitulo, ENT_QUOTES, 'UTF-8') ?></h2>
        <p class="text-blue-200 mb-8 max-w-xl mx-auto text-lg"><?= htmlspecialchars($ctaTexto, ENT_QUOTES, 'UTF-8') ?></p>
        <a href="<?= BASE_URL ?>/gerador<?= !empty($modeloSlug) ? '?modelo=' . rawurlencode($modeloSlug) : '' ?>" class="inline-block bg-white text-blue-900 font-black py-4 px-10 rounded-full hover:bg-blue-50 transition text-lg">
            <?= htmlspecialchars($ctaBotao, ENT_QUOTES, 'UTF-8') ?>
        </a>
    </div>
</div>