<?php
$pagina = [
    'path' => 'modelos/curriculo-operador-de-caixa',
    'breadcrumb' => 'Operador de caixa',
    'h1' => 'Currículo para operador de caixa: fechamento, fila e PDV',
    'lead' => 'Caixa se contrata por agilidade sem erro. Veja como escrever sangria, fechamento e atendimento de frente de loja, inclusive no primeiro emprego, com um exemplo de supermercado.',
    'cta' => 'Criar currículo de operador de caixa',
    'cta_titulo' => 'Abra o exemplo de caixa',
    'cta_texto' => 'O gerador traz o currículo do Marcos. Troque o supermercado, o movimento e os cursos pelos seus.',
    'erros_titulo' => 'Erros que a supervisão de loja não ignora',
    'palavras_intro' => 'Supermercado, farmácia e loja de roupa usam palavras diferentes. Leve para o currículo as da vaga: perecível e sangria, convênio, ou troca e embalagem.',
    'palavras' => ['Operador de caixa', 'PDV', 'Fechamento de caixa', 'Sangria', 'Troco', 'TEF', 'Atendimento', 'Fila', 'Quebra de caixa'],
    'exemplo_titulo' => 'Exemplo de currículo de operador de caixa',
    'checklist' => [
        'Fechamento, troco ou sangria aparecem como tarefa, não só a palavra caixa.',
        'Você não prometeu zero erro se já teve quebra. Se a quebra era baixa, diga como conferia.',
        'O segmento da loja está no resumo.',
        'Disponibilidade de fim de semana e feriado está correta.',
    ],
    'secoes' => [
        [
            'id' => 'o-que-colocar',
            'titulo' => 'O que colocar no currículo de operador de caixa',
            'paragrafos' => [
                'O supervisor quer alguém que passa mercadoria, recebe, dá troco e fecha o caixa com a gaveta batendo. Sangria é a retirada de excesso de dinheiro da gaveta durante o turno, levada ao administrativo com registro. Quebra é a diferença entre o sistema e o dinheiro contado. TEF é o pagamento no cartão integrado ao PDV.',
                'Quem nunca operou caixa pode usar atendimento de balcão, reposição ou curso de operador. Não escreva que já fechou caixa se só observou. Diga que busca a primeira função e que já lidou com dinheiro em outra situação, se isso for verdade.',
            ],
            'cards' => [
                ['titulo' => 'Movimento do turno', 'texto' => 'Tipo de loja e ritmo: supermercado de bairro, hipermercado, farmácia, fast-food. Quantidade de clientes só se você tiver uma base real.'],
                ['titulo' => 'Dinheiro e cartão', 'texto' => 'Troco, sangria, TEF, PIX no PDV e vale-alimentação. Cite o que você operou.'],
                ['titulo' => 'Fechamento', 'texto' => 'Conferência da gaveta, relatório do sistema e entrega ao fiscal. Se a diferença era rara, explique a contagem, sem jurar perfeição.'],
                ['titulo' => 'Ao redor do caixa', 'texto' => 'Empacotamento, recarga, sacola, cartão da loja e chamada de preço divergente. Isso mostra que você não trava a fila.'],
            ],
        ],
        [
            'id' => 'como-escrever',
            'titulo' => 'Como escrever o turno sem clichê de simpatia',
            'paragrafos' => [
                'Simpatia aparece quando você descreve a fila: chamou o fiscal no preço errado, separou a compra grande, avisou a promoção que o sistema não leu. "Atencioso e rápido" sozinho não entra na comparação com outro caixa.',
            ],
            'frases' => [
                'Operador de caixa de supermercado desde 2022. Registro mercadoria no PDV, faço sangria com o fiscal e fecho a gaveta no fim do turno conferindo dinheiro e cartão.',
                'Busco a primeira vaga de caixa. No balcão da lanchonete eu anotava pedido, recebia em dinheiro e cartão e conferia o troco antes de entregar.',
            ],
            'tabela' => [
                ['bom' => 'Fechei o caixa com contagem de gaveta e impressão do relatório, e chamei o fiscal quando o valor não batia.', 'ruim' => 'Nunca tive quebra de caixa e sou perfeito com números.'],
                ['bom' => 'Passei compra de alto volume no sábado e mantive a fila andando, pedindo ajuda no empacotamento.', 'ruim' => 'Dinâmico, sorridente e acostumado com pressão.'],
                ['bom' => 'Registrei recarga e cartão fidelidade no mesmo atendimento, conforme o script da loja.', 'ruim' => 'Responsável por todas as funções do supermercado.'],
            ],
        ],
    ],
    'erros' => [
        ['titulo' => 'Esconder quebra com frase absoluta', 'texto' => '"Nunca errei um centavo" desconfia. Melhor: conferia duas vezes e acionava o fiscal na diferença.'],
        ['titulo' => 'Currículo de vendedor no lugar do caixa', 'texto' => 'Se a vaga é de frente de caixa, meta de loja não substitui fechamento. Se você fazia os dois, separe os tópicos.'],
        ['titulo' => 'Disponibilidade falsa', 'texto' => 'Supermercado escala sábado, domingo e feriado. Escreva o turno que você aceita.'],
        ['titulo' => 'Operador de micro sem dizer o sistema', 'texto' => 'Se você não lembra o nome do PDV, descreva a função: código de barra, pesagem, tecla de desconto com autorização. O nome do sistema entra quando você lembra.'],
    ],
    'exemplo' => [
        'nome' => 'Marcos Oliveira',
        'contato' => 'Osasco, SP · (11) 95555-4444 · marcos.caixa@email.com',
        'linha' => 'Operador de caixa de supermercado',
        'resumo_titulo' => 'Resumo',
        'resumo' => 'Operador de caixa com foco em agilidade e conferência, habituado a fila de checkout e a fechamento de gaveta no fim do turno.',
        'experiencias' => [
            [
                'cargo' => 'Operador de caixa | Supermercado Exemplo',
                'periodo' => '2022 — atual',
                'bullets' => [
                    'Registrou mercadorias no PDV com atenção a preço e desconto autorizado.',
                    'Fechou o caixa do turno conferindo dinheiro e relatório do sistema.',
                    'Vendeu recarga e cartão da loja sem segurar a fila.',
                ],
            ],
        ],
        'formacao' => [
            ['curso' => 'Ensino médio completo', 'detalhe' => 'Curso de atendimento ao cliente'],
        ],
        'habilidades' => ['Fechamento de caixa', 'Sangria', 'TEF', 'Troco', 'Atendimento de fila'],
    ],
    'faqs' => [
        ['p' => 'O que é sangria de caixa no currículo?', 'r' => 'É a retirada de parte do dinheiro da gaveta durante o expediente, registrada e entregue ao administrativo, para o caixa não ficar com valor alto. Se você fez isso com o fiscal, escreva "sangria conforme o procedimento da loja".'],
        ['p' => 'Como fazer o currículo de caixa sem experiência?', 'r' => 'Use atendimento em que houve dinheiro: lanchonete, barraca, papelaria da família ou evento. Descreva recebimento e troco. No objetivo, peça a primeira vaga de operador e cite ensino médio e disponibilidade.'],
        ['p' => 'Precisa saber informática?', 'r' => 'Precisa operar o PDV da loja: código, pagamento e relatório simples. Escritório avançado não é a regra. Se você fez curso de operador de caixa ou de informática básica, coloque.'],
        ['p' => 'Coloco quebra de caixa?', 'r' => 'Não abra o currículo com um problema. Se a entrevista perguntar, explique a diferença e como você passou a conferir. No texto, mostre o hábito de contar e de chamar o fiscal.'],
        ['p' => 'Caixa de farmácia usa este modelo?', 'r' => 'Use a página de atendente de farmácia se houver receita, validade e convênio. Este modelo serve para supermercado, loja e restaurante, onde a frente é pagamento e fila.'],
    ],
];
include PARTIALS_PATH . '/pagina-modelo.php';
