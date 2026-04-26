<main class="bg-[#F8FAFC] min-h-[90vh] flex flex-col items-center py-16 px-4">
    
    <div class="bg-white rounded-[3.5rem] p-8 md:p-16 max-w-2xl w-full text-center shadow-[0_32px_64px_-15px_rgba(0,0,0,0.08)] border border-slate-100 relative overflow-hidden mb-12">
        <div class="absolute top-0 left-0 right-0 h-2 bg-gradient-to-r from-blue-600 via-indigo-500 to-emerald-400"></div>

        <div class="w-24 h-24 bg-orange-50 text-orange-500 rounded-[2rem] flex items-center justify-center mx-auto mb-8 shadow-sm border border-orange-100 relative group">
            <span class="text-4xl group-hover:scale-125 transition-transform duration-300">☕</span>
        </div>
        
        <h1 class="text-4xl md:text-5xl font-black text-slate-900 tracking-tighter mb-4 leading-tight">
            Pague um café <br> para o projeto
        </h1>
        <p class="text-slate-500 font-medium mb-10 text-lg leading-relaxed px-4">
            O <strong>CriarCV</strong> é gratuito e mantido por uma pessoa só. Sua contribuição ajuda a pagar o servidor e manter a ferramenta no ar para quem precisa de emprego.
        </p>

        <div class="bg-slate-50 p-8 md:p-10 rounded-[3rem] border-2 border-dashed border-slate-200 mb-10 flex flex-col items-center transition-all hover:border-blue-300 group">
            <div class="relative mb-6">
                <img src="<?= BASE_URL ?>/assets/img/pix-qrcode.png" alt="QR Code Pix Doação" class="rounded-3xl shadow-lg border-8 border-white bg-white w-52 h-52 object-contain">
                <div class="absolute -bottom-2 -right-2 bg-emerald-500 text-white p-2 rounded-xl shadow-lg">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                </div>
            </div>

            <span class="text-[11px] font-black text-slate-400 uppercase tracking-widest block mb-3">Chave PIX Aleatória</span>
            <div class="bg-white px-6 py-5 rounded-2xl border border-slate-100 w-full mb-3 shadow-sm group-hover:shadow-md transition-shadow">
                <p class="text-[13px] font-mono font-bold text-blue-600 break-all select-all text-center" id="pix-key">5c25a6d0-dbc1-4e45-86be-879b3c6405ea</p>
            </div>
            <p class="text-[11px] text-slate-400 font-medium">Toque acima para selecionar ou use o botão abaixo</p>
        </div>

        <div class="flex flex-col gap-4">
            <button id="btn-copy-pix" onclick="copyPix()" class="bg-slate-900 text-white py-6 rounded-3xl font-black text-xl hover:bg-blue-600 transition-all flex items-center justify-center gap-3 relative group shadow-2xl active:scale-95">
                <span id="btn-copy-text" class="flex items-center gap-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"></path></svg>
                    COPIAR CHAVE PIX
                </span>
            </button>
            <a href="<?= BASE_URL ?>/gerador" class="text-slate-400 font-bold text-sm hover:text-slate-900 transition-colors py-2 flex items-center justify-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Voltar e criar meu currículo
            </a>
        </div>
    </div>

    <div class="max-w-4xl w-full grid grid-cols-1 md:grid-cols-3 gap-6 px-4">
        <div class="bg-white/50 backdrop-blur-sm rounded-3xl p-8 border border-white text-center hover:bg-white transition-colors shadow-sm">
            <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-4 text-blue-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
            </div>
            <h3 class="font-bold text-slate-800 mb-1 italic leading-tight uppercase text-xs tracking-widest">Infraestrutura</h3>
            <p class="text-slate-500 text-[13px] leading-relaxed">Mantém nossos servidores de alta velocidade e geração de PDFs instantânea.</p>
        </div>

        <div class="bg-white/50 backdrop-blur-sm rounded-3xl p-8 border border-white text-center hover:bg-white transition-colors shadow-sm">
            <div class="w-12 h-12 bg-emerald-100 rounded-2xl flex items-center justify-center mx-auto mb-4 text-emerald-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            </div>
            <h3 class="font-bold text-slate-800 mb-1 italic leading-tight uppercase text-xs tracking-widest">Sem Anúncios</h3>
            <p class="text-slate-500 text-[13px] leading-relaxed">Garante que o site continue limpo, sem banners chatos que atrapalham sua navegação.</p>
        </div>

        <div class="bg-white/50 backdrop-blur-sm rounded-3xl p-8 border border-white text-center hover:bg-white transition-colors shadow-sm">
            <div class="w-12 h-12 bg-indigo-100 rounded-2xl flex items-center justify-center mx-auto mb-4 text-indigo-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
            </div>
            <h3 class="font-bold text-slate-800 mb-1 italic leading-tight uppercase text-xs tracking-widest">Inovação</h3>
            <p class="text-slate-500 text-[13px] leading-relaxed">Financia o desenvolvimento de novos modelos e ferramentas de IA para seu currículo.</p>
        </div>
    </div>

    <div class="mt-16 text-center">
        <p class="text-slate-400 text-[10px] uppercase tracking-[0.3em] font-black mb-2">CriarCV.online • 2026</p>
        <p class="text-slate-400 text-xs font-medium">Feito com paixão para ajudar você a conquistar sua próxima vaga.</p>
    </div>
</main>

<script>
function copyPix() {
    const key = document.getElementById('pix-key').innerText.trim();
    const btn = document.getElementById('btn-copy-pix');
    const btnText = document.getElementById('btn-copy-text');

    // Rastreamento (se houver Facebook Pixel)
    if (typeof fbq === 'function') {
        fbq('track', 'Donate', { content_name: 'Apoio Pix Cafezinho' });
    }

    navigator.clipboard.writeText(key).then(() => {
        const originalContent = btnText.innerHTML;
        btn.classList.add('!bg-emerald-500'); // Força a cor verde usando !important
        btnText.innerHTML = `
            <svg class="w-6 h-6 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
            CHAVE COPIADA COM SUCESSO!
        `;
        
        // Feedback tátil (vibration) em celulares que suportam
        if (navigator.vibrate) navigator.vibrate(50);

        setTimeout(() => {
            btn.classList.remove('!bg-emerald-500');
            btnText.innerHTML = originalContent;
        }, 3000);
    });
}
</script>