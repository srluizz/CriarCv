<?php
$pagina = [
    'path' => 'modelos/curriculo-vigilante-e-porteiro',
    'breadcrumb' => 'Vigilante e porteiro',
    'h1' => 'Currículo para vigilante e porteiro: CNV, portaria e ronda',
    'lead' => 'Vigilante e porteiro não são o mesmo cargo. Um exige curso e cadastro na Polícia Federal. O outro cuida da portaria. Veja o que escrever em cada um e um exemplo de vigilante patrimonial.',
    'cta' => 'Criar currículo de vigilante ou porteiro',
    'cta_titulo' => 'Gere o PDF da sua função',
    'cta_texto' => 'O exemplo do Carlos entra no gerador como vigilante. Se a sua vaga é de porteiro, troque o resumo pela rotina de portaria e tire a CNV se você não tiver.',
    'erros_titulo' => 'Erros que a empresa de segurança vê na hora',
    'palavras_intro' => 'Se a vaga pede vigilante, as palavras são CNV, ronda, CFTV e ocorrência. Se pede porteiro, são acesso, encomenda, interfone e visitante. Não misture as duas listas se você só fez uma.',
    'palavras' => ['Vigilante', 'Porteiro', 'CNV', 'CFTV', 'Ronda', 'Controle de acesso', 'Ocorrência', 'Portaria', 'Encomenda'],
    'exemplo_titulo' => 'Exemplo de currículo de vigilante',
    'checklist' => [
        'O título do currículo é o cargo real: vigilante ou porteiro.',
        'Quem é vigilante informa curso de formação, reciclagem em dia e que possui CNV, sem publicar o número.',
        'A rotina está em fatos: posto, ronda, câmera, acesso ou encomenda.',
        'Relato de ocorrência não traz nome de morador, cliente ou placa completa.',
    ],
    'secoes' => [
        [
            'id' => 'o-que-colocar',
            'titulo' => 'O que muda entre vigilante e porteiro',
            'paragrafos' => [
                'Vigilante, pela Lei 7.102/1983, é a pessoa formada em curso autorizado e cadastrada na Polícia Federal, com a Carteira Nacional de Vigilante. O currículo dessa vaga mostra o curso, a reciclagem em dia e o tipo de posto: patrimonial, bancário, orgânico, pessoal ou transporte de valores, só se você atuou nele.',
                'Porteiro de condomínio controla entrada, interfone, encomenda e orientação a visitante e prestador. Muitos condomínios não exigem o curso de vigilante para a portaria. Se o anúncio pedir vigilante, a CNV é obrigatória. Se pedir porteiro, não invente a carteira. Escreva a portaria que você fez.',
            ],
            'cards' => [
                ['titulo' => 'CNV e curso', 'texto' => 'Escreva "CNV ativa" e o ano da última reciclagem se estiver em dia. O número da carteira fica para a cópia pedida na admissão, não no PDF que circula no WhatsApp.'],
                ['titulo' => 'Posto do vigilante', 'texto' => 'Condomínio, shopping, indústria ou evento. Ronda, CFTV, alarme, rádio e livro ou sistema de ocorrência. Diga o turno: 12x36 diurno ou noturno.'],
                ['titulo' => 'Rotina do porteiro', 'texto' => 'Cadastro de visitante, liberação de prestador, recebimento de encomenda, reserva de salão e apoio à mudança. É atendimento com regra, não ronda armada.'],
                ['titulo' => 'Postura em fato', 'texto' => 'Em vez de "postura firme", descreva o que você registrou, a quem avisou e como manteve o acesso. Calma no texto combina com a função.'],
            ],
        ],
        [
            'id' => 'como-escrever',
            'titulo' => 'Como descrever o posto',
            'paragrafos' => [
                'Turno, local e procedimento. Ocorrência entra como processo: observou, registrou, acionou o superior ou a polícia quando a norma mandava. Não conte briga em detalhe e não exponha terceiro.',
            ],
            'frases' => [
                'Vigilante patrimonial com CNV ativa e reciclagem em 2025. Posto em centro comercial, escala 12x36, com ronda, CFTV e registro de ocorrência no livro do posto.',
                'Porteiro de condomínio residencial. Controle de acesso de morador e visitante, recebimento de encomenda e uso do interfone, em escala 12x36 diurna.',
            ],
            'tabela' => [
                ['bom' => 'Monitorei as câmeras do pavimento e registrei porta aberta fora do horário, avisando o encarregado.', 'ruim' => 'Profissional destemido, pronto para qualquer confronto.'],
                ['bom' => 'CNV ativa. Curso de formação de vigilante com reciclagem concluída em 2025.', 'ruim' => 'Faço a função de vigilante mesmo sem a carteira.'],
                ['bom' => 'Na portaria, cadastrei prestador, avisei o morador e só liberei depois da autorização.', 'ruim' => 'Responsável pela segurança armada do condomínio.'],
            ],
        ],
    ],
    'erros' => [
        ['titulo' => 'Porteiro escrito como vigilante', 'texto' => 'Sem CNV e sem curso autorizado, o cargo é outro. A empresa de segurança confere o cadastro. O título errado encerra a vaga.'],
        ['titulo' => 'Número da CNV e documento no PDF', 'texto' => 'Diga que a carteira está ativa e a data da reciclagem. Número, RG e endereço completo vão na ficha da contratante.'],
        ['titulo' => 'História de ocorrência com nome e placa', 'texto' => 'Isso vaza dado de terceiro e passa impressão de indiscrição, o oposto do que o posto pede.'],
        ['titulo' => 'Reciclagem vencida escondida', 'texto' => 'Se a reciclagem venceu, regularize antes de escrever "em dia". A contratante pede a cópia.'],
    ],
    'exemplo' => [
        'nome' => 'Carlos Alberto Lima',
        'contato' => 'Osasco, SP · (11) 96666-5555',
        'linha' => 'Vigilante patrimonial · CNV ativa',
        'resumo_titulo' => 'Resumo',
        'resumo' => 'Vigilante com 5 anos de posto, experiência em centro comercial, CFTV e ronda. Curso de formação com reciclagem em dia e CNV ativa.',
        'experiencias' => [
            [
                'cargo' => 'Vigilante patrimonial | Segurança Forte LTDA',
                'periodo' => '2021 — 2025',
                'bullets' => [
                    'Fez rondas e acompanhou alarmes do posto.',
                    'Controlou entrada e saída de veículo e de material, com registro.',
                    'Preencheu o relatório diário de ocorrências e passou o posto no fim da escala.',
                ],
            ],
        ],
        'formacao' => [
            ['curso' => 'Curso de formação de vigilante', 'detalhe' => 'Reciclagem em 2025 · extensão em segurança pessoal'],
        ],
        'habilidades' => ['CFTV', 'Ronda', 'Controle de acesso', 'Relatório de ocorrência', 'Rádio'],
    ],
    'faqs' => [
        ['p' => 'O que é a CNV no currículo?', 'r' => 'É a Carteira Nacional de Vigilante, o cadastro de quem concluiu o curso de formação autorizado e pode exercer a função. Escreva que ela está ativa. O número fica para a cópia pedida na contratação.'],
        ['p' => 'Porteiro precisa de curso de vigilante?', 'r' => 'A vaga de porteiro em condomínio, em geral, não exige CNV. A vaga com o título de vigilante exige. Leia o anúncio e use só o cargo para o qual você está habilitado.'],
        ['p' => 'Como descrever postura?', 'r' => 'Troque o adjetivo pelo procedimento: ronda no intervalo combinado, câmera, livro de ocorrência e passagem de posto. Postura se entende pelo que você registrava e a quem avisava.'],
        ['p' => 'Reciclagem vencida: envio o currículo mesmo assim?', 'r' => 'Para vaga de vigilante, regularize a reciclagem antes. A empresa pede o comprovante. Para portaria sem exigência de CNV, descreva a experiência de porteiro e não use o título de vigilante.'],
        ['p' => 'Coloco que o posto era armado?', 'r' => 'Só se a vaga for desse tipo e se você tinha a autorização e o treinamento correspondentes. Não detalhe arma nem procedimento interno da empresa antiga.'],
    ],
];
include PARTIALS_PATH . '/pagina-modelo.php';
