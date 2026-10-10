<?php
$pagina = [
    'path' => 'modelos/curriculo-auxiliar-administrativo',
    'breadcrumb' => 'Auxiliar Administrativo',
    'h1' => 'Currículo para auxiliar administrativo: o que colocar e exemplo em PDF',
    'lead' => 'O recrutador de escritório lê rotina, ferramenta e resultado. Este guia mostra o que entra no currículo de auxiliar administrativo, como descrever contas, arquivo e atendimento, e um exemplo pronto para adaptar.',
    'cta' => 'Criar currículo de auxiliar administrativo',
    'cta_titulo' => 'Gere o PDF com este exemplo',
    'cta_texto' => 'O gerador abre o currículo da Mariana já preenchido. Substitua empresa, datas e números pelos seus e baixe o PDF.',
    'erros_titulo' => 'Erros que fazem o currículo administrativo ser descartado',
    'palavras_intro' => 'Use só as palavras que descrevem trabalho que você realmente fez. Recrutador e filtro automático procuram a rotina do anúncio, não uma lista genérica de qualidades.',
    'palavras' => ['Auxiliar administrativo', 'Rotinas de escritório', 'Contas a pagar', 'Contas a receber', 'Excel', 'Arquivo', 'Atendimento', 'NF-e', 'Agenda', 'Pacote Office', 'Controle de estoque', 'ERP'],
    'exemplo_titulo' => 'Exemplo de currículo de auxiliar administrativo',
    'checklist' => [
        'Cada experiência cita uma rotina concreta: pagamento, arquivo, agenda, nota ou atendimento.',
        'Excel aparece com o que você faz nele, como planilha de controle ou tabela dinâmica, e não só o nome do programa.',
        'O arquivo tem uma página, está em PDF e o e-mail é só seu.',
        'Telefone, cidade e LinkedIn, se existir, estão atualizados.',
    ],
    'secoes' => [
        [
            'id' => 'o-que-colocar',
            'titulo' => 'O que colocar no currículo de auxiliar administrativo',
            'paragrafos' => [
                'Auxiliar administrativo sustenta a rotina do escritório: documento, pagamento, agenda, estoque de material e atendimento interno. O currículo precisa mostrar essa rotina com ferramenta e resultado, não uma lista de adjetivos.',
                'Quem está no primeiro emprego pode usar monitoria, estágio, trabalho voluntário em secretaria de escola ou ajuda no comércio da família, desde que descreva a tarefa de verdade. Inventar ERP ou nota fiscal elimina a pessoa na entrevista.',
            ],
            'cards' => [
                ['titulo' => 'Rotina financeira de apoio', 'texto' => 'Lançamento de contas a pagar e a receber, baixa de boleto, conferência de nota fiscal e apoio à conciliação. Diga o sistema, se houver, e o que você conferia.'],
                ['titulo' => 'Arquivo e documentos', 'texto' => 'Organização de contratos, protocolos, digitalização e controle de vencimento. Número de pastas ou prazo cumprido vale mais do que "organizado".'],
                ['titulo' => 'Agenda e atendimento', 'texto' => 'Telefone, e-mail, recepção de fornecedor e marcação de reunião. Se atendeu em outro idioma, diga o nível e a situação.'],
                ['titulo' => 'Planilha e sistema', 'texto' => 'Excel, Google Planilhas, ERP ou sistema da empresa. Escreva a função que você usava: filtro, PROCV, tabela dinâmica ou lançamento de pedido.'],
            ],
        ],
        [
            'id' => 'como-escrever',
            'titulo' => 'Como escrever experiência e resumo',
            'paragrafos' => [
                'O resumo tem três ou quatro linhas: tempo de escritório, o tipo de rotina e uma ferramenta. A experiência vem em tópicos curtos, cada um com verbo, tarefa e efeito. Se você não tem um percentual real, descreva o volume: quantas notas, quantas pessoas na agenda, qual prazo.',
            ],
            'frases' => [
                'Auxiliar administrativo com dois anos em escritório de serviços. Cuido de contas a pagar, arquivo de contratos e agenda da coordenação no Excel e no e-mail corporativo.',
                'Lancei notas fiscais de fornecedores no sistema e avisei a financeiro sobre vencimentos da semana, reduzindo atraso de pagamento do setor.',
                'Organizei o arquivo físico e digital de contratos, com protocolo de entrada e local de guarda, para a equipe achar o documento no mesmo dia.',
            ],
            'tabela' => [
                ['bom' => 'Conferi 40 notas por semana e registrei vencimento na planilha de contas a pagar.', 'ruim' => 'Responsável por diversas atividades administrativas e financeiras.'],
                ['bom' => 'Montei a planilha de material de escritório e pedi reposição antes do estoque zerar.', 'ruim' => 'Proativo, dinâmico, com facilidade de trabalho em equipe.'],
                ['bom' => 'Atendi ramal e e-mail, registrei o pedido e encaminhei ao setor certo no mesmo turno.', 'ruim' => 'Excelente comunicação e perfil multifuncional.'],
            ],
        ],
    ],
    'erros' => [
        ['titulo' => 'Lista de funções sem nenhum fato', 'texto' => '"Arquivo, telefone, planilha e apoio" não diz o tamanho da rotina. Troque por quantidade, sistema ou prazo.'],
        ['titulo' => 'Cargo inflado', 'texto' => 'Auxiliar que lança boleto não é analista financeiro. O recrutador compara o texto com a carteira e com a entrevista.'],
        ['titulo' => 'Três páginas e dados demais', 'texto' => 'Uma página basta. Deixe CPF, foto, estado civil e pretensão salarial de fora, a menos que o anúncio peça.'],
        ['titulo' => 'Curso sem relação com a vaga', 'texto' => 'Dez cursos soltos ocupam o espaço do Excel, do arquivo e do atendimento, que são o que a vaga pede.'],
    ],
    'exemplo' => [
        'nome' => 'Mariana Oliveira',
        'contato' => 'Osasco, SP · (11) 99999-8888 · linkedin.com/in/mariana-adm',
        'linha' => 'Auxiliar administrativo',
        'resumo_titulo' => 'Resumo',
        'resumo' => 'Profissional com 3 anos em suporte administrativo e financeiro. Organiza fluxo de contas, atende fornecedores e usa Microsoft 365 e sistema de gestão no dia a dia do escritório.',
        'experiencias' => [
            [
                'cargo' => 'Assistente de escritório | Empresa Exemplo',
                'periodo' => '2023 — atual',
                'bullets' => [
                    'Lançou contas a pagar e a receber no ERP e acompanhou vencimentos da semana.',
                    'Reduziu em 15% a inadimplência do setor com rotina de cobrança e registro no sistema.',
                    'Organizou agenda e logística de viagem da diretoria.',
                ],
            ],
        ],
        'formacao' => [
            ['curso' => 'Administração | cursando', 'detalhe' => 'Universidade Mackenzie'],
        ],
        'habilidades' => ['Excel avançado', 'Inglês técnico', 'Contas a pagar e receber', 'Organização de agenda'],
    ],
    'faqs' => [
        ['p' => 'O que colocar no currículo de auxiliar administrativo sem experiência?', 'r' => 'Coloque formação, curso de informática ou Pacote Office, e qualquer rotina real de organização: secretaria da escola, estágio, comércio da família ou voluntariado. Descreva a tarefa. Não invente sistema nem nota fiscal.'],
        ['p' => 'Qual a diferença entre auxiliar e assistente administrativo no currículo?', 'r' => 'O auxiliar executa a rotina com supervisão: arquivo, lançamento, telefone e apoio. O assistente costuma organizar o fluxo, cobrar prazo e atender a gestão com mais autonomia. Use o cargo da carteira e descreva o que você fazia de fato.'],
        ['p' => 'Quais cursos ajudam neste currículo?', 'r' => 'Pacote Office com Excel de verdade, rotinas administrativas, atendimento e o sistema que a vaga cita, como um ERP. Um curso curto usado no trabalho vale mais do que uma lista de certificados que você não aplica.'],
        ['p' => 'Precisa colocar pretensão salarial?', 'r' => 'Só se o anúncio pedir. Quando pedir, pesquise a faixa da cidade e do porte da empresa no próprio anúncio e na convenção da categoria. Não invente um número no meio do resumo.'],
        ['p' => 'O currículo de auxiliar administrativo deve ter quantas páginas?', 'r' => 'Uma. Recrutador de volume lê no celular. Deixe a segunda página para um profissional com mais de dez anos e várias empresas relevantes.'],
    ],
];
include PARTIALS_PATH . '/pagina-modelo.php';
