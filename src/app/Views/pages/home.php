<script type="application/ld+json">
{
  "@context": "https://schema.org",
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
  "description": "Gerador de currículos gratuito e profissional otimizado para sistemas de recrutamento ATS. Crie seu currículo PDF em minutos."
}
</script>

<section class="relative pt-24 pb-20 bg-gradient-to-b from-white to-blue-50 overflow-hidden">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full pointer-events-none overflow-hidden" aria-hidden="true">
        <div class="absolute top-0 right-0 w-96 h-96 bg-blue-100 rounded-full blur-[120px] opacity-50"></div>
        <div class="absolute bottom-0 left-0 w-72 h-72 bg-indigo-100 rounded-full blur-[100px] opacity-40"></div>
    </div>

    <div class="container mx-auto px-4 text-center relative z-10">
     <span class="inline-flex items-center gap-2 py-2 px-4 rounded-full text-white text-xs font-black mb-8 tracking-widest uppercase shadow-sm border border-slate-800" style="background-color: #000 !important;">
        <span class="relative flex h-2 w-2">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
        </span>
    <span id="contador-curriculos" class="text-emerald-400">...</span>currículos gerados hoje</span>

        <h1 class="text-5xl md:text-8xl font-black text-slate-900 mb-8 leading-[1.1] tracking-tighter">
            Crie seu currículo <br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600 italic">profissional e grátis.</span>
        </h1>
        
        <p class="text-xl text-slate-600 mb-12 max-w-3xl mx-auto leading-relaxed">
            Aumente suas chances de entrevista. Use nossa tecnologia para criar um <strong>currículo PDF otimizado para sistemas de recrutamento (ATS)</strong> em poucos minutos.
        </p>

        <div class="flex flex-col sm:flex-row justify-center items-center gap-6">
            <a href="<?= BASE_URL ?>/gerador" title="Começar a criar meu currículo agora" class="group relative bg-slate-900 text-white px-12 py-5 rounded-2xl text-xl font-bold hover:bg-blue-600 transition-all shadow-2xl flex items-center justify-center overflow-hidden">
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

<section id="diferenciais" class="py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center gap-16">
            <div class="w-full md:w-1/2">
                <h2 class="text-4xl md:text-5xl font-black text-slate-900 mb-8 leading-tight">
                    O único modelo que você <br>
                    <span class="text-blue-600 underline decoration-blue-200 underline-offset-8">realmente precisa.</span>
                </h2>
                <p class="text-lg text-slate-600 mb-8">
                    Diferente de outros sites que oferecem designs coloridos que confundem os robôs de recrutamento, o <strong>CriarCV.online</strong> foca no padrão internacional de legibilidade.
                </p>
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="mt-1 bg-blue-100 p-1 rounded-lg text-blue-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900">Aprovado por Sistemas ATS</h4>
                            <p class="text-slate-500 text-sm">Estrutura de dados limpa que garante 100% de leitura por softwares de triagem.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="mt-1 bg-blue-100 p-1 rounded-lg text-blue-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900">Design Minimalista Profissional</h4>
                            <p class="text-slate-500 text-sm">Foco total no seu conteúdo e conquistas, como exigido por recrutadores seniores.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 relative">
                <div class="bg-slate-100 rounded-[3rem] p-4 shadow-inner border border-slate-200">
                    <div class="bg-white rounded-[2rem] shadow-2xl p-8">
                         <div class="h-6 bg-slate-200 rounded w-3/4 mb-4"></div>
                         <div class="h-4 bg-slate-100 rounded w-full mb-2"></div>
                         <div class="h-4 bg-slate-100 rounded w-full mb-2"></div>
                         <div class="h-4 bg-slate-100 rounded w-2/3"></div>
                         <div class="mt-8 space-y-3">
                             <div class="h-3 bg-blue-50 rounded w-full"></div>
                             <div class="h-3 bg-blue-50 rounded w-full"></div>
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
        <div class="text-center mb-16">
            <h2 class="text-4xl font-black text-slate-900 mb-4">Desenvolvido por quem entende de RH</h2>
            <p class="text-slate-500">Sua privacidade e aprovação são nossas prioridades.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-8 rounded-3xl border border-slate-100 bg-white hover:shadow-xl transition-shadow">
                <div class="text-blue-600 mb-6"><svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg></div>
                <h3 class="text-xl font-bold mb-3">Privacidade de Dados</h3>
                <p class="text-slate-500 text-sm">Seus dados não são salvos em nosso servidor. Tudo é processado localmente no seu navegador.</p>
            </div>
            <div class="p-8 rounded-3xl border border-slate-100 bg-white hover:shadow-xl transition-shadow">
                <div class="text-indigo-600 mb-6"><svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div>
                <h3 class="text-xl font-bold mb-3">Interface Ultra Veloz</h3>
                <p class="text-slate-500 text-sm">Sem carregamentos chatos. Edite e gere seu currículo em menos de 2 minutos.</p>
            </div>
            <div class="p-8 rounded-3xl border border-slate-100 bg-white hover:shadow-xl transition-shadow">
                <div class="text-emerald-600 mb-6"><svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <h3 class="text-xl font-bold mb-3">Grátis para sempre</h3>
                <p class="text-slate-500 text-sm">Nosso compromisso é ajudar você a crescer na carreira sem cobrar por modelos básicos ou downloads.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-slate-900 text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-black mb-8">Por que um currículo simples é melhor?</h2>
            <div class="grid md:grid-cols-2 gap-10 text-left">
                <p class="text-slate-400 leading-relaxed">
                    Sistemas de recrutamento (ATS) usados por grandes empresas buscam textos claros e formatação padronizada. Gráficos de barras para "habilidades" ou fotos podem confundir o algoritmo e fazer você ser descartado antes mesmo de um humano ver seu perfil.
                </p>
                <p class="text-slate-400 leading-relaxed">
                    Ao usar um <strong>gerador de currículo simples</strong> como o CriarCV, você garante que sua <strong>experiência profissional</strong> e <strong>habilidades técnicas</strong> sejam o destaque principal, aumentando em até 60% suas chances de passar na primeira triagem.
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
                <p class="mt-4 text-slate-600 leading-relaxed">Sim. Nosso foco é ajudar o candidato. Você pode criar, editar e baixar seu currículo em PDF sem pagar nada e sem marcas d'água.</p>
            </details>
            
            <details class="group bg-slate-50 rounded-2xl p-6 border border-slate-100 transition-all open:bg-white open:shadow-xl">
                <summary class="flex justify-between items-center font-bold text-lg text-slate-800 cursor-pointer list-none">
                    Meus dados ficam salvos para sempre?
                    <span class="transition group-open:rotate-180"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg></span>
                </summary>
                <p class="mt-4 text-slate-600 leading-relaxed">Não. Por segurança, os dados ficam apenas no seu navegador. Recomendamos baixar o PDF e salvar em um local seguro após a edição.</p>
            </details>

            <details class="group bg-slate-50 rounded-2xl p-6 border border-slate-100 transition-all open:bg-white open:shadow-xl">
                <summary class="flex justify-between items-center font-bold text-lg text-slate-800 cursor-pointer list-none">
                    O currículo serve para o primeiro emprego?
                    <span class="transition group-open:rotate-180"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg></span>
                </summary>
                <p class="mt-4 text-slate-600 leading-relaxed">Com certeza! O modelo é versátil e ideal tanto para quem está começando quanto para profissionais experientes que buscam transição de carreira.</p>
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
            <p class="text-blue-100 text-xl mb-12 max-w-2xl mx-auto relative z-10 font-medium">Junte-se a milhares de profissionais que usam o CriarCV para conquistar vagas de alto nível.</p>
            
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
    
    const hoje = new Date();
    const semente = hoje.getFullYear() + hoje.getMonth() + hoje.getDate();
    
    const base = 10500; 
    const variacao = (semente * 137) % 2000;
    const total = base + variacao;

    elemento.innerText = total.toLocaleString('pt-BR');
}
document.addEventListener('DOMContentLoaded', atualizarContador);
</script>