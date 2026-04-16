<main class="bg-[#F8FAFC] min-h-[80vh] flex flex-col items-center py-12 px-4">
    
    <div class="bg-white rounded-[3rem] p-8 md:p-16 max-w-2xl w-full text-center shadow-2xl border border-slate-100 relative overflow-hidden mb-12">
        <div class="absolute top-0 left-0 right-0 h-2 bg-gradient-to-r from-blue-600 to-indigo-500"></div>

        <div class="w-20 h-20 bg-green-100 text-green-600 rounded-3xl flex items-center justify-center mx-auto mb-8 shadow-sm">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>
        
        <h1 class="text-4xl font-black text-slate-900 tracking-tighter mb-4 leading-none">Apoie o Projeto ☕</h1>
        <p class="text-slate-500 font-medium mb-10 text-lg leading-relaxed">
            Se o CriarCV te ajudou, considere contribuir com qualquer valor para mantermos a ferramenta gratuita e sem anúncios.
        </p>

        <div class="bg-slate-50 p-8 rounded-[2.5rem] border-2 border-dashed border-slate-200 mb-10 flex flex-col items-center">
            <img src="<?= BASE_URL ?>/assets/img/pix-qrcode.png" alt="QR Code Pix" class="mb-6 rounded-3xl shadow-lg border-4 border-white bg-white w-48 h-48 object-contain">
            <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest block mb-3">Chave Aleatória</span>
            <div class="bg-white px-6 py-4 rounded-2xl border border-slate-100 w-full mb-2 shadow-sm">
                <p class="text-xs font-bold text-blue-600 break-all select-all text-center" id="pix-key">5c25a6d0-dbc1-4e45-86be-879b3c6405ea</p>
            </div>
            <p class="text-[10px] text-slate-400 italic">Clique no botão abaixo para copiar</p>
        </div>

        <div class="flex flex-col gap-4">
            <button id="btn-copy-pix" onclick="copyPix()" class="bg-blue-600 text-white py-5 rounded-[1.5rem] font-bold text-lg hover:bg-blue-700 transition-all flex items-center justify-center gap-3 relative group shadow-xl shadow-blue-100">
                <span id="btn-copy-text" class="flex items-center gap-2">
                    <svg class="w-6 h-6 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"></path></svg>
                    COPIAR CHAVE PIX
                </span>
            </button>
            <a href="<?= BASE_URL ?>" class="text-slate-400 font-bold text-sm hover:text-slate-600 transition-colors py-2">Voltar para o início</a>
        </div>
    </div>

    <div class="max-w-4xl w-full grid grid-cols-1 md:grid-cols-3 gap-8 px-4">
        
        <div class="text-center p-6">
            <div class="w-12 h-12 bg-white rounded-2xl shadow-sm flex items-center justify-center mx-auto mb-4 text-blue-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
            </div>
            <h3 class="font-bold text-slate-800 mb-2">Custos de Servidor</h3>
            <p class="text-slate-500 text-sm leading-relaxed">Sua doação ajuda a manter o servidor ativo e a geração de PDFs rápida para todos.</p>
        </div>

        <div class="text-center p-6">
            <div class="w-12 h-12 bg-white rounded-2xl shadow-sm flex items-center justify-center mx-auto mb-4 text-blue-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <h3 class="font-bold text-slate-800 mb-2">100% Sem Anúncios</h3>
            <p class="text-slate-500 text-sm leading-relaxed">Não vendemos seus dados nem poluímos sua tela. O projeto vive apenas de apoio direto.</p>
        </div>

        <div class="text-center p-6">
            <div class="w-12 h-12 bg-white rounded-2xl shadow-sm flex items-center justify-center mx-auto mb-4 text-blue-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
            </div>
            <h3 class="font-bold text-slate-800 mb-2">Evolução Contínua</h3>
            <p class="text-slate-500 text-sm leading-relaxed">Novos modelos de currículos e funcionalidades são desenvolvidos com o suporte da comunidade.</p>
        </div>

    </div>

    <p class="mt-12 text-slate-400 text-[11px] uppercase tracking-[0.2em] font-bold">Criado com ❤️ por quem entende a pressa de quem busca emprego.</p>
</main>

<script>
function copyPix() {
    const key = document.getElementById('pix-key').innerText.trim();
    const btn = document.getElementById('btn-copy-pix');
    const btnText = document.getElementById('btn-copy-text');

    if (typeof fbq === 'function') {
        fbq('track', 'Donate', { content_name: 'Apoio Pix Cafezinho' });
    }

    navigator.clipboard.writeText(key).then(() => {
        const originalContent = btnText.innerHTML;
        btn.classList.replace('bg-blue-600', 'bg-green-600');
        btnText.innerHTML = `
            <svg class="w-6 h-6 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
            CHAVE COPIADA!
        `;
        setTimeout(() => {
            btn.classList.replace('bg-green-600', 'bg-blue-600');
            btnText.innerHTML = originalContent;
        }, 2500);
    });
}
</script>