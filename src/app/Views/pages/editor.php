<div id="loading-overlay" class="hidden fixed inset-0 bg-slate-900/90 backdrop-blur-md z-[9999] flex flex-col items-center justify-center text-white">
    <div class="relative">
        <div class="w-24 h-24 border-4 border-blue-500/20 border-t-blue-500 rounded-full animate-spin"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <svg class="w-10 h-10 text-blue-500 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"></path>
            </svg>
        </div>
    </div>
    <h2 class="mt-8 text-3xl font-black tracking-tighter text-center">Finalizando seu PDF...</h2>
    <p class="mt-2 text-slate-400 font-medium">Otimizando fontes e alinhamentos profissionais.</p>
    
    <div class="mt-10 w-72 h-2 bg-slate-800 rounded-full overflow-hidden border border-slate-700">
        <div id="progress-bar" class="h-full bg-gradient-to-r from-blue-600 to-indigo-500 transition-all duration-700 w-0"></div>
    </div>
</div>

<div id="pix-modal" class="hidden fixed inset-0 bg-slate-900/95 backdrop-blur-xl z-[10000] flex items-center justify-center p-4">
    <div class="bg-white rounded-[3rem] p-8 md:p-12 max-w-md w-full text-center shadow-2xl transform transition-all scale-95 opacity-0 duration-300" id="pix-content">
        
        <div class="w-20 h-20 bg-green-100 text-green-600 rounded-full flex items-center justify-center mx-auto mb-6">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>
        
        <h2 class="text-3xl font-black text-slate-900 tracking-tighter mb-2">Currículo Gerado!</h2>
        <p class="text-slate-500 font-medium mb-8 text-sm">Se o site te ajudou a poupar tempo, considere contribuir com um cafezinho para manter o projeto online. ☕</p>

        <div class="bg-slate-50 p-6 rounded-[2rem] border-2 border-dashed border-slate-200 mb-8 flex flex-col items-center">
            
            <img src="assets/img/pix-qrcode.png" alt="QR Code Pix" class="mb-4 rounded-2xl shadow-sm border-4 border-white bg-white w-48 h-48 object-contain">

            <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest block mb-2 text-center">Chave Aleatória</span>
            
            <div class="bg-white px-4 py-3 rounded-xl border border-slate-100 w-full mb-1">
                <p class="text-[10px] font-bold text-blue-600 break-all select-all text-center leading-relaxed" id="pix-key">
                    5c25a6d0-dbc1-4e45-86be-879b3c6405ea
                </p>
            </div>
            <p class="text-[9px] text-slate-400 italic">Clique no botão abaixo para copiar</p>
        </div>

        <div class="flex flex-col gap-3">
            <button id="btn-copy-pix" onclick="copyPix()" class="bg-blue-600 text-white py-4 rounded-2xl font-bold hover:bg-blue-700 transition-all flex items-center justify-center gap-2 relative overflow-hidden group">
                <span id="btn-copy-text" class="flex items-center gap-2">
                    <svg class="w-5 h-5 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"></path>
                    </svg>
                    COPIAR CHAVE PIX
                </span>
            </button>
            
            <button onclick="closePixModal()" class="text-slate-400 font-bold text-sm hover:text-slate-600 transition-colors py-2">
                Fechar e continuar
            </button>
        </div>
    </div>
</div>

<div class="bg-[#F8FAFC] min-h-screen pb-20">
    <div class="container mx-auto px-4 py-10 max-w-[1400px] print:p-0">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start print:block">
            
            <div class="lg:col-span-5 space-y-8 print:hidden">
                <div class="bg-white p-8 md:p-10 rounded-[2.5rem] shadow-2xl shadow-slate-200/60 border border-slate-100">
                    <div class="flex items-center justify-between mb-10">
                        <div>
                            <h2 class="text-3xl font-black text-slate-900 tracking-tighter leading-none">Editor Profissional</h2>
                            <p class="text-slate-400 text-sm mt-2 font-medium">Preencha e veja a mágica acontecer.</p>
                        </div>
                        <div class="flex items-center gap-2 bg-blue-50 px-4 py-2 rounded-2xl">
                            <span class="relative flex h-2 w-2">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-600"></span>
                            </span>
                            <span class="text-blue-700 text-[10px] font-black uppercase tracking-widest">TEMPO REAL</span>
                        </div>
                    </div>

                    <div class="space-y-10">
                        <section>
                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-8 h-8 bg-slate-900 text-white rounded-lg flex items-center justify-center shadow-lg">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                </div>
                                <h3 class="font-bold text-slate-800 text-lg tracking-tight">Informações Pessoais</h3>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="col-span-2 group">
                                    <input type="text" id="in_nome" oninput="updatePreview()" placeholder="Seu Nome Completo" class="w-full p-4 bg-slate-50 border border-slate-100 rounded-2xl outline-none focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 focus:bg-white transition-all font-medium">
                                </div>
                                <div class="col-span-2">
                                    <input type="text" id="in_cargo" oninput="updatePreview()" placeholder="Profissão ou Cargo Alvo" class="w-full p-4 bg-slate-50 border border-slate-100 rounded-2xl outline-none focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 focus:bg-white transition-all font-medium">
                                </div>
                                <input type="email" id="in_email" oninput="updatePreview()" placeholder="E-mail" class="p-4 bg-slate-50 border border-slate-100 rounded-2xl outline-none focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 focus:bg-white transition-all text-sm">
                                <input type="text" id="in_tel" oninput="updatePreview()" placeholder="Telefone / WhatsApp" class="p-4 bg-slate-50 border border-slate-100 rounded-2xl outline-none focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 focus:bg-white transition-all text-sm">
                                <input type="text" id="in_linkedin" oninput="updatePreview()" placeholder="LinkedIn (URL)" class="p-4 bg-slate-50 border border-slate-100 rounded-2xl outline-none focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 focus:bg-white transition-all text-sm">
                                <input type="text" id="in_github" oninput="updatePreview()" placeholder="GitHub (URL)" class="p-4 bg-slate-50 border border-slate-100 rounded-2xl outline-none focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 focus:bg-white transition-all text-sm">
                                <input type="text" id="in_cidade" oninput="updatePreview()" placeholder="Cidade / Estado" class="col-span-2 p-4 bg-slate-50 border border-slate-100 rounded-2xl outline-none focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 focus:bg-white transition-all text-sm">
                            </div>
                        </section>

                        <section>
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-8 h-8 bg-slate-900 text-white rounded-lg flex items-center justify-center shadow-lg">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path></svg>
                                </div>
                                <h3 class="font-bold text-slate-800 text-lg tracking-tight">Resumo Profissional</h3>
                            </div>
                            <textarea id="in_resumo" oninput="updatePreview()" rows="4" placeholder="Escreva uma breve introdução sobre suas conquistas e objetivos..." class="w-full p-4 bg-slate-50 border border-slate-200 rounded-2xl outline-none focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 focus:bg-white transition-all resize-none text-sm leading-relaxed"></textarea>
                        </section>

                        <section>
                            <div class="flex justify-between items-center mb-6">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 bg-slate-900 text-white rounded-lg flex items-center justify-center shadow-lg">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                    </div>
                                    <h3 class="font-bold text-slate-800 text-lg tracking-tight">Experiências</h3>
                                </div>
                                <button type="button" onclick="addItem('exp')" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-2xl text-xs font-black transition-all transform hover:scale-105 shadow-xl shadow-blue-200 flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path d="M12 4v16m8-8H4"></path></svg>
                                    ADICIONAR
                                </button>
                            </div>
                            <div id="container_exp" class="space-y-4"></div>
                        </section>

                        <section>
                            <div class="flex justify-between items-center mb-6">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 bg-slate-900 text-white rounded-lg flex items-center justify-center shadow-lg">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path></svg>
                                    </div>
                                    <h3 class="font-bold text-slate-800 text-lg tracking-tight">Formação</h3>
                                </div>
                                <button type="button" onclick="addItem('edu')" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-2xl text-xs font-black transition-all transform hover:scale-105 shadow-xl shadow-blue-200 flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path d="M12 4v16m8-8H4"></path></svg>
                                    ADICIONAR
                                </button>
                            </div>
                            <div id="container_edu" class="space-y-4"></div>
                        </section>

                        <section class="bg-slate-50 p-6 rounded-[2rem] border border-slate-100">
                            <label class="block text-sm font-bold text-slate-700 mb-3 ml-1 uppercase tracking-widest text-[10px]">Habilidades Técnicas</label>
                            <input type="text" id="in_skills" oninput="updatePreview()" placeholder="Ex: PHP, Python, Clean Code, SEO" class="w-full p-4 bg-white border border-slate-200 rounded-2xl outline-none focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all font-medium">
                            <span class="text-[10px] text-slate-400 mt-3 block px-1 font-medium italic">💡 Dica: Separe cada habilidade por vírgula para um visual melhor.</span>
                        </section>

                        <div class="pt-10">
                            <button onclick="if(typeof fbq === 'function') { fbq('track', 'CompleteRegistration'); } exportarServidor('pdf')" class="w-full group relative bg-gradient-to-r from-slate-900 to-slate-800 text-white py-6 rounded-[2rem] font-black text-xl hover:from-blue-700 hover:to-blue-600 transition-all shadow-2xl shadow-blue-200/50 flex items-center justify-center gap-4 overflow-hidden">
                                <span class="relative z-10 flex items-center gap-3">
                                    BAIXAR MEU PDF PROFISSIONAL
                                    <svg class="w-6 h-6 group-hover:translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                    </svg>
                                </span>
                                <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-10 transition-opacity"></div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7 sticky top-10 print:static">
                <div class="relative group">
                    <div class="absolute inset-0 bg-slate-300 rounded-sm blur-2xl opacity-20 group-hover:opacity-30 transition-opacity"></div>
                    
                    <div id="cv-preview" class="relative bg-white p-12 md:p-16 mx-auto w-full max-w-[210mm] min-h-[297mm] text-slate-800 shadow-[0_0_50px_-12px_rgba(0,0,0,0.1)] print:shadow-none print:border-none border border-slate-100" style="font-family: Arial, sans-serif;">
                        
                        <div style="border-bottom: 4px solid #2563eb; padding-bottom: 20px; margin-bottom: 30px;">
                            <h1 id="out_nome" style="font-size: 32pt; font-weight: 700; text-transform: uppercase; margin: 0; color: #0f172a; tracking-tighter">Seu Nome</h1>
                            <p id="out_cargo" style="font-size: 16pt; font-weight: 700; color: #000000; margin: 8px 0 15px 0;">Seu Cargo Profissional</p>
                            <div id="out_contatos" style="font-size: 10pt; color: #475569; font-weight: 500; display: flex; flex-wrap: wrap; gap: 8px;"></div>
                        </div>

                        <div class="space-y-10">
                            <section>
                                <h3 style="font-size: 10pt; font-weight: 700; text-transform: uppercase; letter-spacing: 3px; color: #94a3b8; border-bottom: 2px solid #f1f5f9; padding-bottom: 8px; margin-bottom: 12px;">Resumo Profissional</h3>
                                <p id="out_resumo" style="font-size: 11pt; color: #334155; line-height: 1.6; text-align: justify; margin: 0;"></p>
                            </section>

                            <section>
                                <h3 style="font-size: 10pt; font-weight: 700; text-transform: uppercase; letter-spacing: 3px; color: #94a3b8; border-bottom: 2px solid #f1f5f9; padding-bottom: 8px; margin-bottom: 20px;">Experiência Profissional</h3>
                                <div id="out_list_exp"></div>
                            </section>

                            <section>
                                <h3 style="font-size: 10pt; font-weight: 700; text-transform: uppercase; letter-spacing: 3px; color: #94a3b8; border-bottom: 2px solid #f1f5f9; padding-bottom: 8px; margin-bottom: 20px;">Formação Acadêmica</h3>
                                <div id="out_list_edu"></div>
                            </section>

                            <section>
                                <h3 style="font-size: 10pt; font-weight: 700; text-transform: uppercase; letter-spacing: 3px; color: #94a3b8; border-bottom: 2px solid #f1f5f9; padding-bottom: 8px; margin-bottom: 15px;">Habilidades & Expertises</h3>
                                <div id="out_skills" style="display: flex; flex-wrap: wrap; gap: 8px; padding-top: 5px;"></div>
                            </section>
                        </div>
                    </div>
                </div>
                <p class="text-center text-slate-400 mt-8 text-xs font-bold uppercase tracking-widest opacity-60">Visualização A4 em Tempo Real</p>
            </div>

        </div>
    </div>
</div>

<style>
/* Design do Botão Remover */
.btn-remove { 
    @apply absolute -top-3 -right-3 bg-red-500 text-white w-8 h-8 rounded-full flex items-center justify-center cursor-pointer shadow-xl hover:bg-red-600 hover:scale-110 transition-all z-20 border-2 border-white;
    font-size: 12px; font-weight: 700;
}

@page { size: A4; margin: 0; }
@media print {
    body { background: white !important; }
    .print\:hidden { display: none !important; }
    #cv-preview { padding: 20mm !important; margin: 0 !important; width: 100% !important; border: none !important; box-shadow: none !important; }
}
</style>

<script>
let state = { exp: [], edu: [] };

function updatePreview() {
    document.getElementById('out_nome').innerText = document.getElementById('in_nome').value || 'Seu Nome Completo';
    document.getElementById('out_cargo').innerText = document.getElementById('in_cargo').value || 'Seu Cargo Profissional';
    document.getElementById('out_resumo').innerText = document.getElementById('in_resumo').value;

    const contatos = [
        document.getElementById('in_tel').value,
        document.getElementById('in_email').value,
        document.getElementById('in_cidade').value,
        document.getElementById('in_linkedin').value,
        document.getElementById('in_github').value
    ].filter(Boolean);
    document.getElementById('out_contatos').innerHTML = contatos.map(c => `<span>${c}</span>`).join(' <span style="color: #cbd5e1; margin: 0 4px;">•</span> ');

    const skills = document.getElementById('in_skills').value.split(',').filter(s => s.trim());
    document.getElementById('out_skills').innerHTML = skills.map(s => 
        `<span style="display: inline-block; background: #f1f5f9; border: 1px solid #e2e8f0; padding: 6px 14px; border-radius: 8px; font-size: 9.5pt; font-weight: 700; color: #334155; text-transform: uppercase; letter-spacing: 0.5px;">${s.trim()}</span>`
    ).join('');

    renderOutputList('exp');
    renderOutputList('edu');
}

function addItem(type) {
    state[type].push({ id: Date.now(), t1: '', t2: '', desc: '' });
    renderInputs();
    updatePreview();
}

function removeItem(type, id) {
    state[type] = state[type].filter(item => item.id !== id);
    renderInputs();
    updatePreview();
}

function updateItem(type, id, field, value) {
    const item = state[type].find(i => i.id === id);
    if (item) item[field] = value;
    updatePreview();
}

function renderInputs() {
    ['exp', 'edu'].forEach(type => {
        const container = document.getElementById(`container_${type}`);
        container.innerHTML = state[type].map(item => `
            <div class="p-6 bg-slate-50 border border-slate-200 rounded-[2rem] relative space-y-4 group hover:border-blue-400 hover:bg-white transition-all shadow-sm hover:shadow-md">
                <div onclick="removeItem('${type}', ${item.id})" class="btn-remove">✕</div>
                <input type="text" placeholder="${type === 'exp' ? 'Empresa / Organização' : 'Instituição de Ensino'}" oninput="updateItem('${type}', ${item.id}, 't1', this.value)" value="${item.t1}" class="w-full p-3 bg-white border border-slate-100 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none text-sm font-bold shadow-sm">
                <input type="text" placeholder="${type === 'exp' ? 'Seu Cargo | Ex: 2022 - Atual' : 'Nome do Curso | Ano de Conclusão'}" oninput="updateItem('${type}', ${item.id}, 't2', this.value)" value="${item.t2}" class="w-full p-3 bg-white border border-slate-100 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none text-xs text-blue-600 font-semibold shadow-sm">
                <textarea placeholder="Principais conquistas e responsabilidades..." oninput="updateItem('${type}', ${item.id}, 'desc', this.value)" class="w-full p-3 bg-white border border-slate-100 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none text-xs h-20 resize-none shadow-sm leading-relaxed">${item.desc}</textarea>
            </div>
        `).join('');
    });
}

function renderOutputList(type) {
    const outContainer = document.getElementById(`out_list_${type}`);
    outContainer.innerHTML = state[type].map(item => `
        <div style="margin-bottom: 25px; width: 100%; display: block; break-inside: avoid;">
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="font-size: 13pt; font-weight: 700; color: #1e293b; text-align: left;">${item.t1 || (type === 'exp' ? 'Empresa' : 'Instituição')}</td>
                    <td style="font-size: 10.5pt; font-weight: 700; color: #64748b; text-align: right;">${item.t2}</td>
                </tr>
            </table>
            <p style="font-size: 11pt; color: #475569; margin: 8px 0 0 0; white-space: pre-line; line-height: 1.5; text-align: justify;">${item.desc}</p>
        </div>
    `).join('');
}

async function exportarServidor(formato) {
    const overlay = document.getElementById('loading-overlay');
    const progressBar = document.getElementById('progress-bar');
    const pixModal = document.getElementById('pix-modal');
    const pixContent = document.getElementById('pix-content');
    
    overlay.classList.remove('hidden');
    setTimeout(() => progressBar.style.width = '40%', 100);
    setTimeout(() => progressBar.style.width = '85%', 800);
    
    const html = document.getElementById('cv-preview').innerHTML;
    
    try {
        const response = await fetch('exportar.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: new URLSearchParams({ 'formato': formato, 'html': html })
        });
        
        if(response.ok) {
            progressBar.style.width = '100%';
            const blob = await response.blob();
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = `meu-curriculo.pdf`;
            a.click();
            
            // AGORA A MÁGICA:
            setTimeout(() => {
                overlay.classList.add('hidden'); // Esconde o carregamento
                progressBar.style.width = '0%';
                
                // Abre o Modal do Pix
                pixModal.classList.remove('hidden');
                setTimeout(() => {
                    pixContent.classList.remove('scale-95', 'opacity-0');
                    pixContent.classList.add('scale-100', 'opacity-100');
                }, 10);
            }, 1200);

        } else {
            alert("Erro ao gerar PDF.");
            overlay.classList.add('hidden');
        }
    } catch (e) {
        alert("Erro de conexão.");
        overlay.classList.add('hidden');
    }
}

// Funções Auxiliares
function closePixModal() {
    const pixModal = document.getElementById('pix-modal');
    pixModal.classList.add('hidden');
}

function copyPix() {
    const key = document.getElementById('pix-key').innerText.trim();
    const btn = document.getElementById('btn-copy-pix');
    const btnText = document.getElementById('btn-copy-text');

    if (typeof fbq === 'function') {
        fbq('track', 'Donate', { content_name: 'Apoio Pix Cafezinho' });
    }

    navigator.clipboard.writeText(key).then(() => {
        const originalContent = btnText.innerHTML;
        
        // Feedback Visual
        btn.classList.replace('bg-blue-600', 'bg-green-600');
        btnText.innerHTML = `
            <svg class="w-5 h-5 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
            </svg>
            CHAVE COPIADA!
        `;

        setTimeout(() => {
            btn.classList.replace('bg-green-600', 'bg-blue-600');
            btnText.innerHTML = originalContent;
        }, 2500);
    }).catch(err => {
    alert("Não foi possível copiar automaticamente. Por favor, selecione o texto e copie manualmente.");
});
}

window.onload = () => {
    addItem('exp');
    addItem('edu');
};
</script>