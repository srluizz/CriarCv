<?php
$pagina = [
    'path' => 'modelos/curriculo-servicos-gerais',
    'breadcrumb' => 'Serviços gerais',
    'h1' => 'Currículo para serviços gerais: limpeza, zelo e turno',
    'lead' => 'Auxiliar de serviços gerais mostra onde limpou, com o que limpou e em que horário pode trabalhar. Veja como descrever condomínio, empresa ou hospital sem enrolar, e um exemplo direto.',
    'cta' => 'Criar currículo de serviços gerais',
    'cta_titulo' => 'Gere um PDF simples e direto',
    'cta_texto' => 'O exemplo do Antônio abre no gerador. Troque o local, o turno e os equipamentos pelos seus.',
    'erros_titulo' => 'Erros que fazem a empresa pular o currículo',
    'palavras_intro' => 'Use o nome do lugar e da tarefa que o anúncio pede: banheiro, hall, vidro, copa, área externa, hospital. Equipamento só entra se você já operou.',
    'palavras' => ['Serviços gerais', 'Limpeza', 'Higienização', 'Condomínio', 'EPI', 'Enceradeira', 'Estoque de material', 'Turno', 'NR-32'],
    'exemplo_titulo' => 'Exemplo de currículo de auxiliar de serviços gerais',
    'checklist' => [
        'O local está claro: condomínio, escola, fábrica, hospital ou escritório.',
        'As tarefas são concretas: banheiro, chão, vidro, lixo, copa.',
        'Turno e folga combinam com o que você aceita agora.',
        'Referência fica como "disponível se pedirem", com pessoa que autorizou.',
    ],
    'secoes' => [
        [
            'id' => 'o-que-colocar',
            'titulo' => 'O que colocar no currículo de serviços gerais',
            'paragrafos' => [
                'Quem contrata limpeza quer zelo, presença e cuidado com produto e com as pessoas do lugar. O currículo não precisa de frase bonita. Precisa do local, do que você higienizava e do turno. Ensino fundamental completo é aceito em muita vaga. Se o seu estudo parou antes, coloque a série que concluiu, sem vergonha e sem inventar diploma.',
                'Hospital e clínica pedem mais cuidado com contaminação. A NR-32 trata da segurança e saúde no trabalho em serviços de saúde. Se você fez o treinamento da empresa ou um curso curto, cite. Se não fez, não coloque a sigla.',
            ],
            'cards' => [
                ['titulo' => 'Onde você trabalhou', 'texto' => 'Condomínio, escola, indústria, shopping, escritório ou hospital. O produto e a regra mudam. Banheiro de condomínio não é o mesmo texto de centro cirúrgico.'],
                ['titulo' => 'Tarefa do dia', 'texto' => 'Chão, sanitário, vidro, elevador, copa, coleta de lixo e reposição de papel e sabonete. Escreva a lista real do seu posto.'],
                ['titulo' => 'Máquina e produto', 'texto' => 'Enceradeira, lavadora, aspirador e diluição de produto. Diluir certo evita manchar piso e irritar a pele. Só cite o que você operou com orientação.'],
                ['titulo' => 'Apoio além da limpeza', 'texto' => 'Jardim simples, mudança de móvel, pintura de muro ou controle da despensa de material. Coloque se fazia, porque muita vaga de condomínio mistura essas tarefas.'],
            ],
        ],
        [
            'id' => 'como-escrever',
            'titulo' => 'Como escrever de forma clara',
            'paragrafos' => [
                'Frases curtas. Um tópico por tipo de área. Se você não teve carteira, mas trabalhou por diária com combinação séria, escreva "serviços por diária" e o tipo de imóvel. Não transforme diária em cargo de supervisor.',
            ],
            'frases' => [
                'Auxiliar de serviços gerais em condomínio, de 2020 a 2025. Higienizava hall, elevador e banheiros, repunha papel e sabonete e avisava a zeladoria quando o material acabava.',
                'Disponibilidade para escala 6x1, inclusive sábado. Procuro vaga de limpeza predial em empresa ou condomínio, com início imediato.',
            ],
            'tabela' => [
                ['bom' => 'Limpava banheiros e hall duas vezes ao dia e registrava a reposição de papel.', 'ruim' => 'Profissional altamente qualificado em facilities e gestão de pessoas.'],
                ['bom' => 'Operei enceradeira depois do treinamento da empresa, no salão do térreo.', 'ruim' => 'Domínio de todas as máquinas e produtos do mercado.'],
                ['bom' => 'No hospital, seguia a separação de pano e de lixo que a enfermagem orientava.', 'ruim' => 'Especialista em NR-32, NR-33 e todas as normas.'],
            ],
        ],
    ],
    'erros' => [
        ['titulo' => 'Texto de gerente no lugar do posto', 'texto' => 'Liderança entra só se você orientava uma equipe de verdade. Para a vaga de auxiliar, a área limpa pesa mais.'],
        ['titulo' => 'Referência com telefone de quem não autorizou', 'texto' => 'Escreva que pode passar contato se pedirem. Avise a pessoa antes. Número errado ou constrangido atrapalha.'],
        ['titulo' => 'Turno incompatível', 'texto' => 'Muita limpeza pesada é de madrugada, antes do escritório abrir. Se você não pode, diga o horário possível em vez de aceitar e faltar.'],
        ['titulo' => 'Curso que não existe', 'texto' => 'EPI e produto químico merecem o curso que você fez. Sigla solta sem treinamento chama pergunta que você não responde.'],
    ],
    'exemplo' => [
        'nome' => 'Antônio Rodrigues',
        'contato' => 'Osasco, SP · (11) 92222-3333',
        'linha' => 'Auxiliar de serviços gerais',
        'resumo_titulo' => 'Resumo',
        'resumo' => 'Auxiliar de serviços gerais com foco em organização e cuidado com o patrimônio. Experiência em local de circulação grande e disponibilidade para início imediato.',
        'experiencias' => [
            [
                'cargo' => 'Agente de limpeza | Condomínio Horizonte',
                'periodo' => '2020 — 2025',
                'bullets' => [
                    'Higienizou hall, banheiros e elevadores na rotina do dia.',
                    'Controlou o estoque de material de limpeza e pediu reposição.',
                    'Apoiou jardinagem simples e pintura básica quando a zeladoria pedia.',
                ],
            ],
        ],
        'formacao' => [
            ['curso' => 'Ensino fundamental completo', 'detalhe' => 'Treinamento de prevenção de acidentes no posto de trabalho'],
        ],
        'habilidades' => ['Limpeza predial', 'Enceradeira', 'Diluição de produto', 'Estoque de material'],
    ],
    'faqs' => [
        ['p' => 'O que colocar em habilidades se eu não tenho curso?', 'r' => 'Coloque as tarefas e os equipamentos que você já usou: banheiro, vidro, enceradeira, coleta de lixo. Curso entra depois, se existir. Experiência no posto vale mais do que certificado genérico.'],
        ['p' => 'Referência é obrigatória?', 'r' => 'Não no PDF. Se a empresa pedir, indique alguém que acompanhou seu trabalho e que você avisou. Pode ser síndico, zelador ou encarregado.'],
        ['p' => 'Serviços gerais é só limpeza?', 'r' => 'Na maior parte das vagas, a limpeza é o centro. Em condomínio e empresa pequena entram também copa, descarte, jardim simples, mudança de móvel e apoio em manutenção leve. Descreva só o que você fazia.'],
        ['p' => 'Precisa de ensino médio?', 'r' => 'Muitos anúncios pedem fundamental completo. Se pedirem médio, não invente. Coloque a escolaridade real e a experiência do posto.'],
        ['p' => 'Como escrever experiência em hospital?', 'r' => 'Diga o setor se não for restrito, a separação de resíduos e o uso de EPI. NR-32 só com o treinamento que você fez. Não descreva paciente.'],
    ],
];
include PARTIALS_PATH . '/pagina-modelo.php';
