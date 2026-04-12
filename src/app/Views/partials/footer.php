</main>

<footer class="bg-slate-900 text-slate-400 py-16 border-t border-slate-800">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            
            <div class="space-y-4">
                <a href="<?= BASE_URL ?>/" class="flex items-center gap-2">
                    <span class="text-white text-xl font-bold tracking-tight">CriarCV<span class="text-blue-500">.online</span></span>
                </a>
                <p class="text-sm leading-relaxed max-w-xs">
                    Currículos modernos e otimizados para sistemas de recrutamento (ATS). Transforme sua trajetória profissional em um currículo vencedor.
                </p>
            </div>

            <div>
                <h4 class="text-white font-bold mb-6 uppercase text-xs tracking-widest">Modelos Populares</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="<?= BASE_URL ?>/modelos/curriculo-primeiro-emprego" class="hover:text-blue-400 transition">Primeiro Emprego</a></li>
                    <li><a href="<?= BASE_URL ?>/modelos/curriculo-jovem-aprendiz" class="hover:text-blue-400 transition">Jovem Aprendiz</a></li>
                    <li><a href="<?= BASE_URL ?>/modelos/curriculo-auxiliar-administrativo" class="hover:text-blue-400 transition">Auxiliar Administrativo</a></li>
                    <li><a href="<?= BASE_URL ?>/modelos" class="text-blue-500 font-semibold hover:underline transition italic">Ver todos os modelos</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-bold mb-6 uppercase text-xs tracking-widest">Plataforma</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="<?= BASE_URL ?>/gerador" class="hover:text-white transition">Gerar Currículo</a></li>
                    <li><a href="<?= BASE_URL ?>/colaborar" class="hover:text-white transition">Apoie o Projeto</a></li>
                    <li><a href="<?= BASE_URL ?>/contato" class="hover:text-white transition">Fale Conosco</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-bold mb-6 uppercase text-xs tracking-widest">Privacidade</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="<?= BASE_URL ?>/privacidade" class="hover:text-white transition">Política de Privacidade</a></li>
                    <li><a href="<?= BASE_URL ?>/termos" class="hover:text-white transition">Termos de Uso</a></li>
                </ul>
            </div>

        </div>

        <div class="border-t border-slate-800/60 mt-16 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-[13px]">
            <p>&copy; <?= date('Y'); ?> CriarCV.online — Feito com foco em resultados profissionais.</p>
            <div class="flex gap-6">
                <span class="flex items-center gap-1.5">
                    <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                    Servidor Online
                </span>
            </div>
        </div>
    </div>
</footer>

<script>
    // Script básico para garantir que o menu mobile feche ao redimensionar se necessário
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768) {
            const menu = document.getElementById('mobile-menu');
            if (menu) menu.classList.add('hidden');
        }
    });
</script>

</body>
</html>