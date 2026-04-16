<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://connect.facebook.net">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700;800&display=swap" media="print" onload="this.media='all'">

    <link rel="shortcut icon" href="/assets/img/icon.ico" type="image/x-icon">
    <title><?php echo $pageTitle ?? 'CriarCV.online | Currículo Profissional em Minutos'; ?></title>
    <meta name="description" content="<?php echo $pageDesc ?? 'Crie seu currículo online gratuitamente com visualização em tempo real e download em PDF otimizado para sistemas de RH.'; ?>">
    <meta name="author" content="CriarCV.online">
    <link rel="canonical" href="<?= BASE_URL ?><?php echo $_SERVER['REQUEST_URI']; ?>">
    <meta name="facebook-domain-verification" content="oqswnugiwkqjcqy33uc6ir0w7bzfs4" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7CF9Z9PPDS"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-7CF9Z9PPDS');
    </script>

    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1294733918949826');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1294733918949826&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->

    

    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= BASE_URL ?>/">
    <meta property="og:title" content="<?php echo $pageTitle ?? 'CriarCV.online | Currículo Profissional'; ?>">
    <meta property="og:description" content="<?php echo $pageDesc ?? 'Crie seu currículo online gratuitamente e baixe em PDF.'; ?>">
    <meta property="og:image" content="<?= BASE_URL ?>/assets/img/preview-site.jpg">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?= BASE_URL ?>/">
    <meta property="twitter:title" content="<?php echo $pageTitle ?? 'CriarCV.online'; ?>">
    <meta property="twitter:description" content="<?php echo $pageDesc ?? 'Gere seu currículo profissional gratuitamente.'; ?>">
    <meta property="twitter:image" content="<?= BASE_URL ?>/assets/img/preview-site.jpg">

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; overflow-x: hidden; }
        .header-glass {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
    </style>
</head>
<body class="bg-[#F8FAFC] text-slate-900 flex flex-col min-h-screen">

<header class="header-glass sticky top-0 z-[100] border-b border-slate-200/60">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex items-center justify-between h-20">
            
            <a href="<?= BASE_URL ?>/" class="flex items-center gap-2 group">
                <div class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center shadow-lg shadow-blue-200 group-hover:rotate-6 transition-transform">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <span class="text-xl font-extrabold text-slate-900 tracking-tight">
                    CriarCV<span class="text-blue-600">.online</span>
                </span>
            </a>
            
            <nav class="hidden md:flex items-center gap-8">
                <a href="<?= BASE_URL ?>/" class="text-sm font-semibold text-slate-600 hover:text-blue-600 transition">Início</a>
                <a href="<?= BASE_URL ?>/modelos" class="text-sm font-semibold text-slate-600 hover:text-blue-600 transition">Modelos</a>
                <a href="<?= BASE_URL ?>/colaborar" class="text-sm font-semibold text-slate-600 hover:text-blue-600 transition">Apoie o Projeto</a>
            </nav>

            <button onclick="toggleMobileMenu()" aria-label="Abrir menu de navegação" class="md:hidden p-2 text-slate-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-white border-b border-slate-200 animate-in slide-in-from-top duration-300">
        <div class="px-4 py-6 space-y-4">
            <a href="<?= BASE_URL ?>/" class="block text-base font-bold text-slate-800">Início</a>
            <a href="<?= BASE_URL ?>/modelos" class="block text-base font-bold text-slate-800">Modelos de Currículo</a>
            <a href="<?= BASE_URL ?>/colaborar" class="block text-base font-bold text-slate-800">Apoie o Projeto</a>
            <a href="<?= BASE_URL ?>/gerador" class="block text-base font-bold text-slate-800">Criar Currículo</a>
        </div>
    </div>
</header>

<script>
    function toggleMobileMenu() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    }
</script>

<main class="flex-grow">