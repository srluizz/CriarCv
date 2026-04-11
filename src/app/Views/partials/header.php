<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php echo $pageTitle ?? 'CriarCV.online | Currículo Profissional em Minutos'; ?></title>
    <meta name="description" content="<?php echo $pageDesc ?? 'Crie seu currículo online gratuitamente com visualização em tempo real e download em PDF otimizado para sistemas de RH.'; ?>">
    <meta name="author" content="CriarCV.online">
    <link rel="canonical" href="https://criarcv.online<?php echo $_SERVER['REQUEST_URI']; ?>">

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            overflow-x: hidden;
        }
        .header-glass {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        .cv-preview-sticky {
            position: sticky;
            top: 2rem;
            z-index: 40;
        }
    </style>
</head>
<body class="bg-[#F8FAFC] text-slate-900 flex flex-col min-h-screen">

<header class="header-glass sticky top-0 z-[100] border-b border-slate-200/60">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex items-center justify-between h-20">
            
            <a href="/" class="flex items-center gap-2 group">
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
                <a href="/" class="text-sm font-semibold text-slate-600 hover:text-blue-600 transition">Início</a>
                <a href="/gerador" class="text-sm font-semibold text-slate-600 hover:text-blue-600 transition">Gerador de CV</a>
            </nav>

            <div class="flex items-center gap-4">
                <a href="/gerador" class="hidden sm:flex bg-slate-900 text-white px-6 py-2.5 rounded-xl font-bold text-sm hover:bg-blue-600 transition-all shadow-xl shadow-slate-200 active:scale-95">
                    Começar Grátis
                </a>
                
                <button onclick="toggleMobileMenu()" class="md:hidden p-2 text-slate-600 hover:bg-slate-100 rounded-lg transition">
                    <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-white border-b border-slate-200 animate-in slide-in-from-top duration-300">
        <div class="px-4 py-6 space-y-4">
            <a href="/" class="block text-base font-bold text-slate-800">Início</a>
            <a href="/gerador" class="block text-base font-bold text-slate-800">Criar Currículo</a>
            <a href="/contato" class="block text-base font-bold text-slate-800">Contato</a>
            <div class="pt-4 border-t border-slate-100">
                <a href="/gerador" class="block w-full bg-blue-600 text-white text-center py-4 rounded-2xl font-bold shadow-lg">Começar Agora</a>
            </div>
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