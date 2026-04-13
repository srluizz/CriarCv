<section class="relative pt-24 pb-20 bg-gradient-to-b from-white to-blue-50 overflow-hidden">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full pointer-events-none overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-blue-100 rounded-full blur-[120px] opacity-50"></div>
        <div class="absolute bottom-0 left-0 w-72 h-72 bg-indigo-100 rounded-full blur-[100px] opacity-40"></div>
    </div>

    <div class="container mx-auto px-4 text-center relative z-10">
        <span class="inline-flex items-center gap-2 py-2 px-4 rounded-full bg-blue-100 text-blue-700 text-xs font-black mb-8 tracking-widest uppercase shadow-sm">
            <span class="relative flex h-2 w-2">
              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
              <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-600"></span>
            </span>
            Líder em Criação de Currículos no Brasil
        </span>

        <h1 class="text-5xl md:text-8xl font-black text-slate-900 mb-8 leading-[1.1] tracking-tighter">
            Conquiste sua vaga com <br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600 italic">alto impacto.</span>
        </h1>
        
        <p class="text-xl text-slate-600 mb-12 max-w-3xl mx-auto leading-relaxed">
            Esqueça o Word. Use nossa inteligência para criar um currículo <strong>100% otimizado para sistemas de recrutamento (ATS)</strong> em poucos minutos.
        </p>

        <div class="flex flex-col sm:flex-row justify-center items-center gap-6">
            <a href="<?= BASE_URL ?>/gerador" class="group relative bg-slate-900 text-white px-12 py-5 rounded-2xl text-xl font-bold hover:bg-blue-600 transition-all shadow-2xl flex items-center justify-center overflow-hidden">
                <span class="relative z-10 flex items-center">
                    Criar Meu Currículo Grátis
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-3 group-hover:translate-x-2 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </span>
            </a>
            <a href="#beneficios" class="text-slate-500 font-bold hover:text-slate-900 transition flex items-center gap-2">
                Conhecer os diferenciais
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
            </a>
        </div>

        <div class="mt-20">
            <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-8">Currículos aceitos em gigantes como</p>
            <div class="flex flex-wrap items-center justify-center gap-12 opacity-40 grayscale hover:grayscale-0 transition-all duration-700">
                <img src="assets/img/Amazon.webp" alt="Amazon" class="h-6">
                <img src="assets/img/Google.webp" alt="Google" class="h-7">
                <img src="assets/img/Microsoft.webp" alt="Microsoft" class="h-5">
                <img src="assets/img/Apple.webp" alt="Apple" class="h-7">
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-white overflow-hidden">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-center gap-20">
            <div class="w-full lg:w-1/2">
                <h2 class="text-4xl md:text-5xl font-black text-slate-900 mb-12 leading-tight">
                    Três passos simples para o <br>
                    <span class="text-blue-600 underline decoration-blue-200 underline-offset-8">seu novo emprego.</span>
                </h2>
                
                <div class="space-y-10">
                    <div class="flex gap-6 group">
                        <div class="flex-shrink-0 w-12 h-12 bg-slate-900 text-white rounded-2xl flex items-center justify-center font-black text-xl group-hover:bg-blue-600 transition-colors shadow-lg">1</div>
                        <div>
                            <h4 class="text-xl font-bold text-slate-900 mb-2 tracking-tight">Preencha seus Dados</h4>
                            <p class="text-slate-600 leading-relaxed">Nossa ferramenta guia você em cada seção, focando no que realmente importa para os recrutadores.</p>
                        </div>
                    </div>

                    <div class="flex gap-6 group">
                        <div class="flex-shrink-0 w-12 h-12 bg-slate-900 text-white rounded-2xl flex items-center justify-center font-black text-xl group-hover:bg-blue-600 transition-colors shadow-lg">2</div>
                        <div>
                            <h4 class="text-xl font-bold text-slate-900 mb-2 tracking-tight">Visualize em Tempo Real</h4>
                            <p class="text-slate-600 leading-relaxed">Veja as alterações instantaneamente no layout. O que você vê é o que será impresso.</p>
                        </div>
                    </div>

                    <div class="flex gap-6 group">
                        <div class="flex-shrink-0 w-12 h-12 bg-slate-900 text-white rounded-2xl flex items-center justify-center font-black text-xl group-hover:bg-blue-600 transition-colors shadow-lg">3</div>
                        <div>
                            <h4 class="text-xl font-bold text-slate-900 mb-2 tracking-tight">Baixe seu PDF Otimizado</h4>
                            <p class="text-slate-600 leading-relaxed">Gere o arquivo final aprovado em testes de leitura por IA (ATS) e comece a enviar.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-1/2 relative">
                <div class="relative bg-slate-100 rounded-[3rem] p-4 shadow-inner border border-slate-200">
                    <div class="bg-white rounded-[2rem] shadow-2xl p-8 overflow-hidden">
                        <div class="border-b-4 border-blue-600 pb-4 mb-6">
                            <div class="h-8 bg-slate-200 rounded w-1/2 mb-2 animate-pulse"></div>
                            <div class="h-4 bg-blue-100 rounded w-1/3 animate-pulse"></div>
                        </div>
                        <div class="space-y-4">
                            <div class="h-3 bg-slate-100 rounded w-full"></div>
                            <div class="h-3 bg-slate-100 rounded w-5/6"></div>
                            <div class="h-3 bg-slate-100 rounded w-4/6"></div>
                        </div>
                        <div class="mt-8 pt-6 border-t border-slate-100 flex gap-4">
                            <div class="h-10 w-10 bg-blue-50 rounded-lg"></div>
                            <div class="h-10 w-10 bg-blue-50 rounded-lg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="beneficios" class="py-24 bg-slate-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-black text-slate-900 mb-6">Feito por quem entende de RH.</h2>
            <p class="text-lg text-slate-500 max-w-2xl mx-auto">Nossa tecnologia remove as barreiras entre você e a entrevista.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-10 rounded-[2.5rem] bg-white border border-slate-100 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group">
                <div class="w-14 h-14 bg-blue-600 text-white rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-blue-200 group-hover:rotate-12 transition-transform">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04kM12 21.48l.348-.13c2.635-.985 4.812-2.515 6.421-4.528H5.231c1.609 2.013 3.786 3.543 6.421 4.528l.348.13z"/></svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-slate-900 tracking-tight">Foco em Aprovação</h3>
                <p class="text-slate-500 leading-relaxed">Modelos limpos que priorizam a legibilidade para humanos e algoritmos.</p>
            </div>

            <div class="p-10 rounded-[2.5rem] bg-white border border-slate-100 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group">
                <div class="w-14 h-14 bg-indigo-600 text-white rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-indigo-200 group-hover:rotate-12 transition-transform">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-slate-900 tracking-tight">Interface Veloz</h3>
                <p class="text-slate-500 leading-relaxed">Sem recarregamento de página. Você edita e vê o resultado no mesmo segundo.</p>
            </div>

            <div class="p-10 rounded-[2.5rem] bg-white border border-slate-100 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group">
                <div class="w-14 h-14 bg-emerald-600 text-white rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-emerald-200 group-hover:rotate-12 transition-transform">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-slate-900 tracking-tight">Grátis para Sempre</h3>
                <p class="text-slate-500 leading-relaxed">Nada de cobranças escondidas na hora de baixar. O PDF é seu, sem custo algum.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="bg-slate-900 rounded-[3rem] p-16 grid grid-cols-2 md:grid-cols-4 gap-12 text-center shadow-2xl">
            <div>
                <div class="text-5xl font-black text-white mb-2 tracking-tighter">+100k</div>
                <div class="text-blue-400 font-bold uppercase text-xs tracking-[0.2em]">Candidatos</div>
            </div>
            <div>
                <div class="text-5xl font-black text-white mb-2 tracking-tighter">100%</div>
                <div class="text-blue-400 font-bold uppercase text-xs tracking-[0.2em]">Seguro</div>
            </div>
            <div>
                <div class="text-5xl font-black text-white mb-2 tracking-tighter">0 R$</div>
                <div class="text-blue-400 font-bold uppercase text-xs tracking-[0.2em]">Custo</div>
            </div>
            <div>
                <div class="text-5xl font-black text-white mb-2 tracking-tighter">24h</div>
                <div class="text-blue-400 font-bold uppercase text-xs tracking-[0.2em]">Disponível</div>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="container mx-auto px-4 max-w-3xl">
        <h2 class="text-4xl font-black text-center text-slate-900 mb-16 tracking-tight font-sans">Dúvidas comuns.</h2>
        <div class="space-y-4">
            <details class="group bg-slate-50 rounded-2xl p-6 border border-slate-100 transition-all open:bg-white open:shadow-xl">
                <summary class="flex justify-between items-center font-bold text-lg text-slate-800 cursor-pointer list-none">
                    O CriarCV.online é realmente gratuito?
                    <span class="transition group-open:rotate-180"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg></span>
                </summary>
                <p class="mt-4 text-slate-600 leading-relaxed">Sim. O modelo de negócio é focado em ajudar o candidato. Você gera e baixa o PDF sem pagar nada e sem marcas d'água.</p>
            </details>
            
            <details class="group bg-slate-50 rounded-2xl p-6 border border-slate-100 transition-all open:bg-white open:shadow-xl">
                <summary class="flex justify-between items-center font-bold text-lg text-slate-800 cursor-pointer list-none">
                    Meus dados ficam salvos?
                    <span class="transition group-open:rotate-180"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg></span>
                </summary>
                <p class="mt-4 text-slate-600 leading-relaxed">Não. Por questões de segurança e privacidade, os dados ficam apenas no seu navegador enquanto você edita. Ao fechar a página, eles são limpos.</p>
            </details>
        </div>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="relative bg-blue-600 rounded-[4rem] p-12 md:p-20 text-center text-white overflow-hidden shadow-[0_40px_100px_-20px_rgba(37,99,235,0.4)]">
            <div class="absolute top-0 right-0 w-full h-full opacity-10 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-white via-transparent to-transparent"></div>
            
            <h2 class="text-4xl md:text-6xl font-black mb-8 relative z-10 leading-none tracking-tighter">
                Chega de desculpas. <br>
                Sua carreira começa aqui.
            </h2>
            <p class="text-blue-100 text-xl mb-12 max-w-2xl mx-auto relative z-10 font-medium">Junte-se a milhares de profissionais que já mudaram de vida com um currículo de alto impacto.</p>
            
            <a href="<?= BASE_URL ?>/gerador" class="relative z-10 inline-flex items-center gap-3 bg-white text-blue-600 px-14 py-6 rounded-3xl text-2xl font-black hover:bg-slate-100 transition-all transform hover:scale-105 shadow-2xl">
                Gerar Currículo Grátis
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
            
            <p class="mt-8 text-sm text-blue-200 relative z-10 opacity-70">Sem cadastro • Sem cartão • PDF instantâneo</p>
        </div>
    </div>
</section>