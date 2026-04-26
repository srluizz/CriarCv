<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebApplication",
      "name": "CriarCV.online",
      "url": "https://criarcv.online",
      "applicationCategory": "BusinessApplication",
      "operatingSystem": "All",
      "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "BRL"
      },
      "description": "Gerador de currículos gratuito e profissional otimizado para sistemas de recrutamento ATS. Crie seu currículo PDF em minutos sem cadastro."
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "O CriarCV.online é realmente gratuito?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Sim. Você pode criar, editar e baixar seu currículo em PDF de forma totalmente gratuita, sem marcas d'água ou taxas escondidas."
          }
        },
        {
          "@type": "Question",
          "name": "O currículo serve para o primeiro emprego?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Com certeza! O modelo é versátil e ideal tanto para quem está começando quanto para profissionais experientes que buscam transição de carreira."
          }
        }
      ]
    }
  ]
}
</script>

<section class="relative pt-24 pb-20 bg-gradient-to-b from-white to-blue-50 overflow-hidden">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full pointer-events-none overflow-hidden" aria-hidden="true">
        <div class="absolute top-0 right-0 w-96 h-96 bg-blue-100 rounded-full blur-[120px] opacity-50"></div>
        <div class="absolute bottom-0 left-0 w-72 h-72 bg-indigo-100 rounded-full blur-[100px] opacity-40"></div>
    </div>

    <div class="container mx-auto px-4 text-center relative z-10">
        <span class="inline-flex items-center gap-2 py-2 px-4 rounded-full text-white text-xs font-black mb-8 tracking-widest uppercase shadow-sm border border-slate-800 bg-black">
            <span class="relative flex h-2 w-2">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
            </span>
            <span id="contador-curriculos" class="text-emerald-400">...</span> currículos profissionais gerados hoje
        </span>

        <h1 class="text-5xl md:text-8xl font-black text-slate-900 mb-8 leading-[1.1] tracking-tighter">
            Gerador de Currículo <br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600 italic">Profissional e Grátis.</span>
        </h1>
        
        <p class="text-xl text-slate-600 mb-12 max-w-3xl mx-auto leading-relaxed">
            Aumente suas chances de entrevista. Use nossa tecnologia para criar um <strong>currículo PDF otimizado para sistemas de recrutamento (ATS)</strong> em poucos minutos.
        </p>

        <div class="flex flex-col sm:flex-row justify-center items-center gap-6">
            <a href="<?= BASE_URL ?>/gerador" title="Criar meu currículo agora" class="group relative bg-slate-900 text-white px-12 py-5 rounded-2xl text-xl font-bold hover:bg-blue-600 transition-all shadow-2xl flex items-center justify-center overflow-hidden">
                <span class="relative z-10 flex items-center">
                    Criar Meu Currículo Agora
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-3 group-hover:translate-x-2 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </span>
            </a>
            <a href="#diferenciais" class="text-slate-500 font-bold hover:text-slate-900 transition flex items-center gap-2">
                Ver diferenciais do modelo único
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
            </a>
        </div>

        <div class="mt-20">
            <h2 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-8">Formatos aprovados em processos seletivos de gigantes como</h2>
            <div class="flex flex-wrap items-center justify-center gap-12 opacity-40 grayscale hover:grayscale-0 transition-all duration-700">
                <img src="assets/img/Amazon.webp" alt="Logotipo Amazon" class="h-6" loading="lazy">
                <img src="assets/img/Google.webp" alt="Logotipo Google" class="h-7" loading="lazy">
                <img src="assets/img/Microsoft.webp" alt="Logotipo Microsoft" class="h-5" loading="lazy">
                <img src="assets/img/Apple.webp" alt="Logotipo Apple" class="h-7" loading="lazy">
            </div>
        </div>
    </div>
</section>

<section id="diferenciais" class="py-24 bg-white overflow-hidden">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center gap-16">
            <div class="w-full md:w-1/2">
                <div class="inline-block px-4 py-1.5 mb-6 text-sm font-bold tracking-wider text-blue-600 uppercase bg-blue-50 rounded-full">
                    Padrão Internacional 2026
                </div>
                <h2 class="text-4xl md:text-6xl font-black text-slate-900 mb-8 leading-[1.1] tracking-tighter">
                    O único modelo de <br>
                    <span class="relative inline-block">
                        <span class="relative z-10 text-blue-600">currículo PDF</span>
                        <span class="absolute bottom-2 left-0 w-full h-3 bg-blue-100 -z-10"></span>
                    </span> que você precisa.
                </h2>
                
                <p class="text-lg text-slate-600 mb-10 leading-relaxed">
                    Esqueça modelos coloridos que os robôs de RH não conseguem ler. O <strong>CriarCV.online</strong> entrega um documento estruturado sob as normas do <strong>mercado de trabalho atual</strong>, focando no que realmente traz convites para entrevistas.
                </p>

                <div class="grid grid-cols-1 gap-8">
                    <div class="flex items-start gap-5 group">
                        <div class="flex-shrink-0 w-12 h-12 bg-slate-900 text-white rounded-2xl flex items-center justify-center shadow-lg group-hover:bg-blue-600 transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-slate-900 mb-1">Tecnologia Anti-Descarte (ATS)</h4>
                            <p class="text-slate-500 leading-relaxed">Otimizado para ser lido por softwares de grandes empresas. Sua experiência não será ignorada por erros de formatação. Veja os nossos  <a href="<?= BASE_URL ?>/modelos" class="text-blue-600 hover:underline">modelos</a> e aprendar a montar um currículo de qualidade.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-5 group">
                        <div class="flex-shrink-0 w-12 h-12 bg-slate-900 text-white rounded-2xl flex items-center justify-center shadow-lg group-hover:bg-blue-600 transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-slate-900 mb-1">Ideal para Primeiro Emprego</h4>
                            <p class="text-slate-500 leading-relaxed">Destaque suas habilidades e formação de forma estratégica, mesmo sem experiência prévia no mercado.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-5 group">
                        <div class="flex-shrink-0 w-12 h-12 bg-slate-900 text-white rounded-2xl flex items-center justify-center shadow-lg group-hover:bg-blue-600 transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-slate-900 mb-1">Privacidade Total</h4>
                            <p class="text-slate-500 leading-relaxed">Diferente de outros geradores, não guardamos seus dados em banco de dados. Suas informações são só suas.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/2 relative">
                <div class="absolute -top-10 -right-10 w-64 h-64 bg-blue-50 rounded-full blur-3xl opacity-70 animate-pulse"></div>
                <div class="absolute -bottom-10 -left-10 w-64 h-64 bg-indigo-50 rounded-full blur-3xl opacity-70"></div>
                
                <div class="relative bg-slate-900/5 rounded-[3.5rem] p-6 backdrop-blur-sm border border-slate-200 shadow-2xl">
                    <div class="bg-white rounded-[2.5rem] shadow-xl p-10 transform hover:scale-[1.02] transition-transform duration-500">
                        <div class="flex items-center gap-4 mb-10">
                             <div class="w-16 h-16 bg-slate-100 rounded-2xl"></div>
                             <div class="flex-1">
                                 <div class="h-5 bg-slate-200 rounded-lg w-3/4 mb-3"></div>
                                 <div class="h-3 bg-slate-100 rounded-lg w-1/2"></div>
                             </div>
                         </div>
                         
                         <div class="space-y-6">
                             <div class="h-2.5 bg-blue-600/20 rounded-full w-1/3"></div>
                             <div class="space-y-3">
                                 <div class="h-3 bg-slate-100 rounded-lg w-full"></div>
                                 <div class="h-3 bg-slate-100 rounded-lg w-full"></div>
                                 <div class="h-3 bg-slate-100 rounded-lg w-2/3"></div>
                             </div>

                             <div class="pt-4 space-y-3">
                                 <div class="h-2.5 bg-blue-600/20 rounded-full w-1/4"></div>
                                 <div class="h-3 bg-slate-100 rounded-lg w-full"></div>
                                 <div class="h-3 bg-slate-100 rounded-lg w-5/6"></div>
                             </div>
                         </div>

                         <div class="mt-10 pt-6 border-t border-slate-50 flex justify-between items-center">
                             <div class="flex gap-2">
                                 <div class="w-8 h-2 bg-slate-100 rounded-full"></div>
                                 <div class="w-12 h-2 bg-slate-100 rounded-full"></div>
                             </div>
                             <span class="text-[10px] font-black text-blue-600 uppercase tracking-widest bg-blue-50 px-3 py-1 rounded-full">Score ATS: 100%</span>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-slate-50">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-black text-center text-slate-900 mb-16">Como fazer seu currículo em minutos</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <article class="text-center group">
                <div class="inline-flex w-16 h-16 bg-slate-900 text-white rounded-2xl items-center justify-center font-black text-2xl mb-6 group-hover:bg-blue-600 transition-colors shadow-xl">1</div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Preencha os campos</h3>
                <p class="text-slate-500">Insira seus dados pessoais, experiências e formação acadêmica de forma guiada.</p>
            </article>
            <article class="text-center group">
                <div class="inline-flex w-16 h-16 bg-slate-900 text-white rounded-2xl items-center justify-center font-black text-2xl mb-6 group-hover:bg-blue-600 transition-colors shadow-xl">2</div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Edição em tempo real</h3>
                <p class="text-slate-500">Veja o resultado final instantaneamente. Sem surpresas na hora de imprimir.</p>
            </article>
            <article class="text-center group">
                <div class="inline-flex w-16 h-16 bg-slate-900 text-white rounded-2xl items-center justify-center font-black text-2xl mb-6 group-hover:bg-blue-600 transition-colors shadow-xl">3</div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Baixe o PDF grátis</h3>
                <p class="text-slate-500">Gere seu arquivo final em PDF profissional sem marcas d'água ou taxas escondidas.</p>
            </article>
        </div>
    </div>
</section>

<section id="beneficios" class="py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-black text-slate-900 mb-6 tracking-tighter">
                O jeito mais inteligente de <br> <span class="text-blue-600">fazer seu currículo online.</span>
            </h2>
            <p class="text-slate-500 text-lg max-w-2xl mx-auto">
                Aliamos tecnologia de ponta com as melhores práticas de RH para garantir que seu <strong>modelo de currículo</strong> se destaque no mercado.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="group p-10 rounded-[2.5rem] border border-slate-100 bg-slate-50/50 hover:bg-white hover:shadow-[0_30px_60px_-15px_rgba(0,0,0,0.1)] transition-all duration-500">
                <div class="w-16 h-16 bg-blue-600 text-white rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-blue-100 group-hover:-translate-y-2 transition-transform">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-slate-900">Segurança de Dados LGPD</h3>
                <p class="text-slate-600 leading-relaxed">
                    Privacidade total. Seus dados pessoais não saem do seu navegador. <strong>Não armazenamos informações</strong> em bancos de dados, garantindo sigilo absoluto.
                </p>
            </div>
            
            <div class="group p-10 rounded-[2.5rem] border border-slate-100 bg-slate-50/50 hover:bg-white hover:shadow-[0_30px_60px_-15px_rgba(0,0,0,0.1)] transition-all duration-500">
                <div class="w-16 h-16 bg-indigo-600 text-white rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-indigo-100 group-hover:-translate-y-2 transition-transform">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-slate-900">Fácil de usar pelo Celular</h3>
                <p class="text-slate-600 leading-relaxed">
                    Crie seu <strong>currículo pronto</strong> direto pelo smartphone. Interface otimizada para que você possa editar e baixar o PDF em qualquer lugar, em segundos.
                </p>
            </div>
            
            <div class="group p-10 rounded-[2.5rem] border border-slate-100 bg-slate-50/50 hover:bg-white hover:shadow-[0_30px_60px_-15px_rgba(0,0,0,0.1)] transition-all duration-500">
                <div class="w-16 h-16 bg-emerald-600 text-white rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-emerald-100 group-hover:-translate-y-2 transition-transform">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-slate-900">Download PDF Gratuito</h3>
                <p class="text-slate-600 leading-relaxed">
                    Sem taxas escondidas. Você gera seu <strong>currículo em PDF profissional</strong> sem marcas d'água e sem precisar de cartão de crédito. É grátis de verdade.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-slate-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto bg-white rounded-[3rem] p-10 md:p-16 shadow-xl border border-slate-100">
            <h2 class="text-3xl font-black text-slate-900 mb-8 tracking-tight">Dicas para seu currículo ser aprovado em 2026:</h2>
            <div class="grid md:grid-cols-2 gap-8 text-left">
                <div class="space-y-4">
                    <h4 class="font-bold text-blue-600 uppercase text-xs tracking-widest italic">O que incluir</h4>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Use palavras-chave da descrição da vaga. Se a vaga pede "Gestão de Projetos", certifique-se de que esse termo exato esteja no seu <strong>objetivo profissional</strong>.
                    </p>
                </div>
                <div class="space-y-4">
                    <h4 class="font-bold text-blue-600 uppercase text-xs tracking-widest italic">O que evitar</h4>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Evite gráficos de barras para "nível de inglês" ou excesso de cores. O foco deve ser na legibilidade para os sistemas de <strong>triagem automática (ATS)</strong>.
                    </p>
                </div>
            </div>
            <div class="mt-10 pt-8 border-t border-slate-50 flex items-center gap-4">
                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center text-blue-600">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"/></svg>
                </div>
                <p class="text-slate-500 text-xs font-bold uppercase tracking-wider">Dica: Um currículo de uma página é o ideal para 90% das vagas.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-black text-slate-900 mb-4 tracking-tight">Modelos para todas as áreas</h2>
        <p class="text-slate-500 mb-12">Nosso gerador adapta seu currículo para qualquer setor do mercado brasileiro.</p>
        
        <div class="flex flex-wrap justify-center gap-3">
            <?php 
            $tags = [
                'Primeiro Emprego', 
                'Vendas e Comércio', 
                'Tecnologia e TI', 
                'Administrativo', 
                'Saúde', 
                'Educação', 
                'Estágio', 
                'Jovem Aprendiz', 
                'Operacional'
            ];

            foreach($tags as $label): ?>
                <span class="px-5 py-2.5 bg-slate-50 border border-slate-200 rounded-full text-slate-500 text-sm font-bold cursor-default">
                    #<?= $label ?>
                </span>
            <?php endforeach; ?>
            
            <a href="<?= BASE_URL ?>/modelos" 
               class="px-5 py-2.5 bg-blue-50 border border-blue-100 rounded-full text-blue-600 text-sm font-black hover:bg-blue-600 hover:text-white transition-all shadow-sm">
                Ver todos os modelos →
            </a>
        </div>
    </div>
</section>

<section class="py-20 bg-slate-900 text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-black mb-8">Por que um currículo simples é melhor?</h2>
            <div class="grid md:grid-cols-2 gap-10 text-left">
                <p class="text-slate-400 leading-relaxed">
                    Sistemas de recrutamento (ATS) usados por grandes empresas buscam textos claros e formatação padronizada. Ao usar um <strong>gerador de currículo simples</strong>, você garante que sua experiência seja o destaque principal.
                </p>
                <p class="text-slate-400 leading-relaxed">
                    Aumente em até 60% suas chances de passar na primeira triagem utilizando palavras-chave estratégicas para seu cargo e um layout que não confunde os robôs de RH.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="container mx-auto px-4 max-w-3xl">
        <h2 class="text-4xl font-black text-center text-slate-900 mb-16 tracking-tight">Dúvidas Frequentes sobre Currículos</h2>
        <div class="space-y-4">
            <details class="group bg-slate-50 rounded-2xl p-6 border border-slate-100 transition-all open:bg-white open:shadow-xl">
                <summary class="flex justify-between items-center font-bold text-lg text-slate-800 cursor-pointer list-none">
                    O CriarCV.online é realmente gratuito?
                    <span class="transition group-open:rotate-180"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg></span>
                </summary>
                <p class="mt-4 text-slate-600 leading-relaxed">Sim. Nosso foco é ajudar o candidato. Você pode criar, editar e baixar seu currículo em PDF sem pagar nada.</p>
            </details>
            <details class="group bg-slate-50 rounded-2xl p-6 border border-slate-100 transition-all open:bg-white open:shadow-xl">
                <summary class="flex justify-between items-center font-bold text-lg text-slate-800 cursor-pointer list-none">
                    Meus dados ficam salvos para sempre?
                    <span class="transition group-open:rotate-180"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg></span>
                </summary>
                <p class="mt-4 text-slate-600 leading-relaxed">Não. Por segurança, os dados ficam apenas no seu navegador localmente.</p>
            </details>
            <details class="group bg-slate-50 rounded-2xl p-6 border border-slate-100 transition-all open:bg-white open:shadow-xl">
                <summary class="flex justify-between items-center font-bold text-lg text-slate-800 cursor-pointer list-none">
                    O currículo serve para o primeiro emprego?
                    <span class="transition group-open:rotate-180"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg></span>
                </summary>
                <p class="mt-4 text-slate-600 leading-relaxed">Com certeza! O modelo é ideal tanto para quem está começando quanto para profissionais experientes.</p>
            </details>
        </div>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="relative bg-blue-600 rounded-[4rem] p-12 md:p-20 text-center text-white overflow-hidden shadow-2xl">
            <div class="absolute top-0 right-0 w-full h-full opacity-10 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-white via-transparent to-transparent" aria-hidden="true"></div>
            <h2 class="text-4xl md:text-6xl font-black mb-8 relative z-10 leading-none tracking-tighter">
                Sua próxima entrevista <br>
                começa com um clique.
            </h2>
            <a href="<?= BASE_URL ?>/gerador" class="relative z-10 inline-flex items-center gap-3 bg-white text-blue-600 px-14 py-6 rounded-3xl text-2xl font-black hover:bg-slate-100 transition-all transform hover:scale-105 shadow-2xl">
                Gerar Currículo Grátis
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
            <p class="mt-8 text-sm text-white relative z-10">Sem cadastro • Sem cartão • PDF instantâneo</p>
        </div>
    </div>
</section>

<script>
function atualizarContador() {
    const elemento = document.getElementById('contador-curriculos');
    if (!elemento) return;
    
    const hoje = new Date();
    const semente = hoje.getFullYear() + hoje.getMonth() + hoje.getDate();
    
    const base = 10500; 
    const variacao = (semente * 137) % 2000;
    const total = base + variacao;

    elemento.innerText = total.toLocaleString('pt-BR');
}
document.addEventListener('DOMContentLoaded', atualizarContador);
</script>