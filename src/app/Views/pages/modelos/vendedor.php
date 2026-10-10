<?php
$pagina = [
    'path' => 'modelos/curriculo-vendedor',
    'breadcrumb' => 'Vendedor',
    'h1' => 'Currículo para vendedor: como mostrar meta, atendimento e resultado',
    'lead' => 'Currículo de vendedor sem número vira texto genérico. Veja como descrever meta, ticket, carteira e loja, o que fazer na troca de área e um exemplo de varejo de tecnologia.',
    'cta' => 'Criar currículo de vendedor',
    'cta_titulo' => 'Gere o currículo com os números do exemplo',
    'cta_texto' => 'O gerador abre o exemplo do Lucas. Troque a loja e só mantenha percentuais que você consiga provar.',
    'erros_titulo' => 'Erros que o gerente de loja percebe em segundos',
    'palavras_intro' => 'Use o vocabulário do seu canal. Loja física fala em PDV, metas do dia e abordagem. Venda externa fala em carteira, visita e proposta. Não misture os dois se você só fez um.',
    'palavras' => ['Vendedor', 'Meta', 'Atendimento', 'PDV', 'Ticket médio', 'Carteira de clientes', 'Pós-venda', 'CRM', 'Vitrine', 'Reposição'],
    'exemplo_titulo' => 'Exemplo de currículo de vendedor',
    'checklist' => [
        'Cada emprego de loja tem um resultado: meta, colocação no ranking, ticket ou problema que você resolvia.',
        'Os números são seus. Se não lembra a porcentagem, use volume: clientes por dia, tamanho da carteira, turno.',
        'O segmento da vaga aparece no resumo: tecnologia, moda, alimento, material de construção.',
        'Experiências muito curtas foram resumidas ou explicadas em uma linha, sem sumir da carteira.',
    ],
    'secoes' => [
        [
            'id' => 'o-que-colocar',
            'titulo' => 'O que o currículo de vendedor precisa provar',
            'paragrafos' => [
                'Quem contrata vendedor quer saber se você aborda, tira dúvida, fecha e volta a falar com o cliente. Adjetivo como "comunicativo" não prova isso. Prova é meta batida, posição na loja, mix que você empurrava e ferramenta que operava.',
                'Se você está saindo de outra área, traga o pedaço transferível: negociação com fornecedor, organização de pedido, atendimento no balcão ou cuidado com reclamação. Não reescreva o emprego antigo como se já fosse venda consultiva.',
            ],
            'cards' => [
                ['titulo' => 'Meta e período', 'texto' => 'Meta do mês, do trimestre ou ranking da loja, com o ano. "Sempre batia a meta" sem período não serve.'],
                ['titulo' => 'Tipo de venda', 'texto' => 'Balcão, televendas, WhatsApp da loja, externa ou e-commerce. O gerente lê o canal antes do curso.'],
                ['titulo' => 'Sistema', 'texto' => 'PDV, ERP, CRM ou planilha de carteira. Cite o nome se a vaga usar o mesmo, ou descreva a função: pedido, comissão, pós-venda.'],
                ['titulo' => 'Cuidado depois da venda', 'texto' => 'Troca, garantia, cobrança amigável e retorno para recompra. Isso separa operador de caixa de vendedor, quando os dois cargos conviveram.'],
            ],
        ],
        [
            'id' => 'como-escrever',
            'titulo' => 'Como escrever resultado sem inventar porcentagem',
            'paragrafos' => [
                'Use número que você defenderia com o gerente antigo: colocação, valor aproximado de um mês forte, quantidade de clientes ou de itens por atendimento. Se o número sumiu, descreva a responsabilidade. O exemplo abaixo usa percentuais de propósito, marcados como fictícios, para mostrar o formato.',
            ],
            'frases' => [
                'Vendedor de tecnologia no varejo, com cinco anos de loja. Atendo no balcão e no WhatsApp, registro no PDV e acompanho a meta semanal da equipe.',
                'Fiquei entre os três primeiros da loja em quatro meses de 2025, vendendo celular, acessório e garantia estendida.',
                'Cuidei de uma carteira de cerca de 200 clientes no CRM, com retorno depois da compra para peça e upgrade.',
            ],
            'tabela' => [
                ['bom' => 'Atendi em média 25 clientes por turno e ofereci acessório no fechamento do celular.', 'ruim' => 'Excelente persuasão e foco em resultados.'],
                ['bom' => 'Aprendi o mix de tintas e indiquei o produto certo para a reforma, com menos troca.', 'ruim' => 'Responsável por vendas e outras atividades da loja.'],
                ['bom' => 'Passei a anotar o retorno do cliente numa planilha, porque a loja não tinha CRM.', 'ruim' => 'Domínio de Salesforce, Pipedrive e metodologia SPIN.'],
            ],
        ],
    ],
    'erros' => [
        ['titulo' => 'Porcentagem que você não explica', 'texto' => 'Na entrevista pedem a conta. Se você não sabe de onde saiu o 20%, tire o número e conte o fato.'],
        ['titulo' => 'Lista enorme de lojas de um mês', 'texto' => 'Mostre as últimas experiências relevantes. As passagens curtas podem virar uma linha, para não parecer que você esconde saída.'],
        ['titulo' => 'Curso de guru no lugar da loja', 'texto' => 'SPIN, gatilho mental e tráfego pago só entram se você aplicou naquele emprego. A vaga de shopping quer balcão e meta.'],
        ['titulo' => 'Falar mal da meta antiga', 'texto' => 'O texto é sobre o que você vendeu, não sobre a loja ser injusta. Guarde o contexto para a conversa.'],
    ],
    'exemplo' => [
        'nome' => 'Lucas Ferreira',
        'contato' => 'Osasco, SP · (11) 98888-7777 · lucas.vendas@email.com',
        'linha' => 'Vendedor de varejo de tecnologia',
        'resumo_titulo' => 'Resumo',
        'resumo' => 'Vendedor com 5 anos no varejo de tecnologia. Atendimento de balcão, foco em meta de faturamento e histórico de aumento de 20% no ticket médio mensal neste exemplo fictício.',
        'experiencias' => [
            [
                'cargo' => 'Vendedor sênior | Loja de Tecnologia Global',
                'periodo' => '03/2021 — atual',
                'bullets' => [
                    'Eleito vendedor do mês quatro vezes em 2025.',
                    'Cuidou de carteira com mais de 200 clientes ativos no CRM.',
                    'Aumentou a recompra com contato de pós-venda depois da entrega.',
                ],
            ],
        ],
        'formacao' => [
            ['curso' => 'Gestão comercial | 2022', 'detalhe' => 'Centro Universitário FIEO'],
        ],
        'habilidades' => ['Atendimento de balcão', 'PDV', 'CRM', 'Pós-venda', 'Inglês comercial'],
    ],
    'faqs' => [
        ['p' => 'Como colocar meta no currículo de vendedor?', 'r' => 'Escreva o período, a meta e o que aconteceu: "no segundo trimestre de 2025 fiquei em 105% da meta da seção de perecíveis". Se não tiver o percentual, use ranking, valor ou número de atendimentos.'],
        ['p' => 'Mudei de área para vendas. O que escrevo?', 'r' => 'Mantenha o cargo verdadeiro do emprego anterior e puxe a parte útil: negociação, atendimento, organização de pedido ou meta de produção. No objetivo, diga que busca a primeira vaga formal de vendas.'],
        ['p' => 'Preciso listar todas as lojas?', 'r' => 'Liste as que duraram mais e as do mesmo segmento da vaga. Passagens de poucas semanas podem ficar numa linha. Omitir emprego da carteira gera pergunta na admissão.'],
        ['p' => 'Vendedor precisa de curso superior?', 'r' => 'A maior parte das vagas de loja pede ensino médio e experiência ou disponibilidade. Superior e curso de vendas ajudam em venda técnica e externa, e entram depois do resultado da loja.'],
        ['p' => 'O que diferencia vendedor de operador de caixa no texto?', 'r' => 'Caixa descreve fechamento, troco e fila. Vendedor descreve abordagem, produto, meta e retorno do cliente. Se você fez os dois, separe os tópicos.'],
    ],
];
include PARTIALS_PATH . '/pagina-modelo.php';
