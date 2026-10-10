<?php
$pagina = [
    'path' => 'modelos/curriculo-atendente-de-farmacia',
    'breadcrumb' => 'Atendente de farmácia',
    'h1' => 'Currículo para atendente de farmácia: balcão, estoque e receita',
    'lead' => 'Atendente de farmácia não substitui o farmacêutico. O currículo mostra balcão, caixa, validade, convênio e apoio na conferência da receita, com um exemplo para drogaria.',
    'cta' => 'Criar currículo de atendente de farmácia',
    'cta_titulo' => 'Gere o PDF do balcão de farmácia',
    'cta_texto' => 'O exemplo da Julia abre no gerador. Ajuste drogaria, datas e cursos para a sua trajetória.',
    'erros_titulo' => 'Erros que passam insegurança para a drogaria',
    'palavras_intro' => 'A drogaria busca quem aguenta fila, confere validade e opera o sistema de benefício. Use esses termos se eles fizeram parte do seu turno.',
    'palavras' => ['Atendente de farmácia', 'Balcão', 'PDV', 'Validade', 'FEFO', 'Farmácia Popular', 'PBM', 'Receita', 'Estoque', 'Dermocosmético'],
    'exemplo_titulo' => 'Exemplo de currículo de atendente de farmácia',
    'checklist' => [
        'Está claro que você apoia o farmacêutico e não indica tratamento por conta própria.',
        'Caixa, convênio ou estoque aparecem com a tarefa do turno.',
        'Curso de atendente, se existir, está na formação, com a instituição.',
        'Você não publicou nome de cliente nem detalhe de receita.',
    ],
    'secoes' => [
        [
            'id' => 'o-que-colocar',
            'titulo' => 'O que colocar no currículo de atendente de farmácia',
            'paragrafos' => [
                'A drogaria separa quem vende de quem responde pela dispensação. O farmacêutico é o responsável técnico. O atendente organiza fila, opera caixa, confere produto, repõe gôndola e chama o farmacêutico quando a receita ou a dúvida exigem. Escrever que você "prescreve" ou "indica remédio controlado" reprova o currículo e ainda descreve uma prática que não é da função.',
                'PBM é o programa de benefício em medicamentos, o convênio que o caixa autoriza no sistema. Farmácia Popular é o programa do governo no balcão credenciado. FEFO é a regra de estoque: o que vence primeiro sai primeiro. Se você fez isso, o nome entra. Se só ouviu falar, deixe para o curso.',
            ],
            'cards' => [
                ['titulo' => 'Balcão e caixa', 'texto' => 'PDV, troco, cartão, abertura e fechamento, e o ritmo da fila. Diga se vendia também higiene e dermocosmético, que é meta comum de rede.'],
                ['titulo' => 'Receita com supervisão', 'texto' => 'Conferência de nome, data e produto sob a orientação do farmacêutico, sobretudo em controlado. Você apoia a checagem. Quem decide a dispensação é o farmacêutico.'],
                ['titulo' => 'Estoque e validade', 'texto' => 'Reposição, inventário da gôndola e separação de vencido. Número de itens da seção ajuda a mostrar o tamanho da responsabilidade.'],
                ['titulo' => 'Curso da função', 'texto' => 'Curso de atendente de farmácia do Senac ou de outra escola, ou o treinamento da rede. Ensino médio completo costuma ser o piso do anúncio.'],
            ],
        ],
        [
            'id' => 'como-escrever',
            'titulo' => 'Como descrever venda sem parecer automedicação',
            'paragrafos' => [
                'Venda de perfumaria, fralda, vitamina exposta e dermocosmético pode entrar com meta ou sugestão de item complementar. Dúvida sobre dose, sintoma e antibiótico vai para a frase "encaminhei ao farmacêutico". Essa frase é um ponto a favor, não uma fraqueza.',
            ],
            'frases' => [
                'Atendente de drogaria com experiência em caixa, reposição e organização de validade. Encaminho receita e dúvida de medicamento ao farmacêutico de plantão.',
                'Operei o PDV e a autorização de convênio no balcão, conferi o desconto na tela e chamei o farmacêutico quando a receita estava incompleta.',
                'Reorganizei uma seção de cerca de 500 itens, separei vencidos e deixei à frente o lote que vencia antes.',
            ],
            'tabela' => [
                ['bom' => 'Conferi data e carimbo da receita e passei ao farmacêutico antes de separar o controlado.', 'ruim' => 'Indicava o melhor remédio para cada sintoma do cliente.'],
                ['bom' => 'Ofereci item de higiene no fechamento, dentro da campanha da loja.', 'ruim' => 'Especialista em farmacologia e prescrição.'],
                ['bom' => 'Curso de atendente de farmácia no Senac e ensino médio completo.', 'ruim' => 'Quase formado em farmácia, atuando como farmacêutico.'],
            ],
        ],
    ],
    'erros' => [
        ['titulo' => 'Trocar atendente por farmacêutico', 'texto' => 'Sem registro no conselho, você não é o responsável técnico. O título errado encerra o processo.'],
        ['titulo' => 'Prometer orientação de tratamento', 'texto' => 'A drogaria precisa de gente que chama o farmacêutico. Autonomia demais no texto vira risco para a empresa.'],
        ['titulo' => 'Esquecer o caixa', 'texto' => 'Muita vaga de atendente é caixa de farmácia com reposição. Se você operou PDV, isso fica nos primeiros tópicos.'],
        ['titulo' => 'Dados de cliente', 'texto' => 'Nome, receita e convênio de uma pessoa não entram no PDF. Fale do processo.'],
    ],
    'exemplo' => [
        'nome' => 'Julia Mendes',
        'contato' => 'Osasco, SP · (11) 91234-5678 · julia.farmacia@email.com',
        'linha' => 'Atendente de farmácia',
        'resumo_titulo' => 'Resumo',
        'resumo' => 'Atendente de farmácia com foco em organização de balcão e estoque, à vontade com venda de higiene e dermocosmético e com o hábito de acionar o farmacêutico nas receitas.',
        'experiencias' => [
            [
                'cargo' => 'Atendente | Farmácia Preço Baixo',
                'periodo' => '01/2023 — 01/2026',
                'bullets' => [
                    'Conferiu receitas e chamou o farmacêutico na dispensação de controlados.',
                    'Operou caixa e autorização de programas de benefício em medicamentos.',
                    'Organizou uma seção com mais de 500 itens, com atenção à validade.',
                ],
            ],
        ],
        'formacao' => [
            ['curso' => 'Curso de atendente de farmácia', 'detalhe' => 'Senac · ensino médio completo'],
        ],
        'habilidades' => ['PDV', 'Farmácia Popular', 'Leitura de receita', 'Estoque e validade', 'Atendimento de balcão'],
    ],
    'faqs' => [
        ['p' => 'O que é PBM no currículo de farmácia?', 'r' => 'PBM é o programa de benefício em medicamentos, o convênio que o balcão autoriza no sistema para aplicar o desconto. Se você operou essa tela, escreva "autorização de PBM" ou "convênio no caixa".'],
        ['p' => 'Atendente de farmácia precisa de faculdade?', 'r' => 'A vaga de atendente em geral pede ensino médio e, em muitas redes, curso livre de atendente. Faculdade de farmácia e registro no conselho são exigência do farmacêutico, que é outro cargo.'],
        ['p' => 'Como falar de venda na drogaria?', 'r' => 'Fale de perfumaria, higiene, dermocosmético e campanha da loja, com número se tiver. Para medicamento e sintoma, escreva que encaminhava ao farmacêutico.'],
        ['p' => 'Posso usar currículo de operador de caixa?', 'r' => 'Só se a vaga for exclusivamente caixa. Na farmácia, some validade, reposição e o limite da receita. Caixa de supermercado não prova esse cuidado sozinho.'],
        ['p' => 'O que é FEFO?', 'r' => 'É a organização em que o produto que vence primeiro fica à frente e sai antes. Se você fazia essa conferência na gôndola ou no estoque, vale uma linha na experiência.'],
    ],
];
include PARTIALS_PATH . '/pagina-modelo.php';
