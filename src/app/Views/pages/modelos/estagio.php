<?php
$pagina = [
    'path' => 'modelos/curriculo-estagio',
    'breadcrumb' => 'Estágio',
    'h1' => 'Currículo para estágio: o que a empresa lê antes de chamar',
    'lead' => 'Vaga de estágio pede matrícula, semestre, previsão de formatura e prova de que você aplica a aula. Veja como organizar projeto, monitoria e curso sem inventar experiência de emprego.',
    'cta' => 'Criar currículo de estágio',
    'cta_titulo' => 'Abra o exemplo de estágio no gerador',
    'cta_texto' => 'O currículo da Luiza entra preenchido. Ajuste curso, semestre e projetos para a vaga que você vai enviar.',
    'erros_titulo' => 'Erros que tiram o estagiário da triagem',
    'palavras_intro' => 'Copie do anúncio as ferramentas e as matérias que você cursou de verdade. Estágio em processos não é o mesmo currículo de estágio em marketing.',
    'palavras' => ['Estágio', 'Semestre', 'Previsão de formatura', 'Projeto acadêmico', 'Monitoria', 'Excel', 'Pacote Office', 'Iniciação científica', 'Empresa júnior'],
    'exemplo_titulo' => 'Exemplo de currículo de estágio em administração',
    'checklist' => [
        'Curso, instituição, semestre e previsão de formatura estão no topo.',
        'Há pelo menos um projeto, monitoria ou trabalho com resultado, mesmo que nota ou banca.',
        'A ferramenta citada no anúncio aparece só se você usou.',
        'O PDF tem uma página e o objetivo fala a área do estágio, não "qualquer vaga".',
    ],
    'secoes' => [
        [
            'id' => 'o-que-colocar',
            'titulo' => 'O que colocar no currículo de estágio',
            'paragrafos' => [
                'O contrato de estágio, pela Lei 11.788/2008, exige matrícula e frequência em educação superior, ensino médio, educação profissional ou anos finais do fundamental, na modalidade profissional. Por isso o recrutador procura semestre e previsão de término logo no começo.',
                'Experiência formal ajuda, mas não é a regra. Projeto de aula, empresa júnior, monitoria, iniciação científica, TCC em andamento e trabalho voluntário com tarefa definida ocupam o lugar da experiência.',
            ],
            'cards' => [
                ['titulo' => 'Bloco acadêmico completo', 'texto' => 'Curso, campus, turno, semestre atual e mês previsto de formatura. Sem isso, a empresa não sabe se o contrato de até dois anos cabe no seu calendário.'],
                ['titulo' => 'Matéria ligada à vaga', 'texto' => 'Duas ou três disciplinas em que você entregou trabalho, não a grade inteira. Diga o que produziu: fluxo de caixa, pesquisa, campanha, peça, relatório.'],
                ['titulo' => 'Projeto com entrega', 'texto' => 'Banca, nota, cliente da empresa júnior ou problema que o trabalho resolveu. "Participei de um projeto" não diz nada.'],
                ['titulo' => 'Ferramenta de estudante', 'texto' => 'Excel, Google Planilhas, Canva, Trello, Power BI iniciante ou o software do seu curso. Nível honesto.'],
            ],
        ],
        [
            'id' => 'como-escrever',
            'titulo' => 'Como escrever objetivo de estagiário',
            'paragrafos' => [
                'O objetivo liga o semestre à área do anúncio e a uma entrega que você já fez na faculdade. Bolsa-auxílio e auxílio-transporte são direitos do estágio; não precisam aparecer no currículo.',
            ],
            'frases' => [
                'Estudante de Administração, 4º semestre, previsão de formatura em dezembro de 2027. Busco estágio em processos para aplicar análise de fluxo de caixa feita no projeto interdisciplinar.',
                'Estudante de Marketing no 3º semestre, com trabalho de calendário de conteúdo para um comércio de bairro. Quero estágio para apoiar redes e relatório de campanha.',
            ],
            'tabela' => [
                ['bom' => 'Monitoria de Matemática Financeira: ajudei a turma do 1º semestre a resolver lista e organizei o horário com o professor.', 'ruim' => 'Facilidade de aprendizado e muita vontade de crescer.'],
                ['bom' => 'Projeto de viabilidade: montei fluxo de caixa simples e apresentei para banca.', 'ruim' => 'Conhecimentos em todas as áreas da administração.'],
                ['bom' => 'Excel: soma, filtro, PROCV e gráfico para o trabalho da disciplina.', 'ruim' => 'Pacote Office avançado e domínio de ERP SAP.'],
            ],
        ],
    ],
    'erros' => [
        ['titulo' => 'Esconder o semestre', 'texto' => 'Empresa descarta currículo sem previsão de formatura porque o termo de compromisso depende disso.'],
        ['titulo' => 'Currículo de empregado sênior', 'texto' => 'Listar dez competências de gestor no primeiro estágio gera desconfiança. Mostre o que a aula já permitiu fazer.'],
        ['titulo' => 'Mesmo texto para áreas diferentes', 'texto' => 'Estágio jurídico, de TI e de RH leem provas diferentes. Troque projeto e objetivo a cada área.'],
        ['titulo' => 'Foto e dados de documento', 'texto' => 'RG, CPF e foto ficam de fora. O programa de estágio pede documento na contratação, não na triagem.'],
    ],
    'exemplo' => [
        'nome' => 'Luiza Ferreira',
        'contato' => 'São Paulo, SP · (11) 97777-5555 · luiza.estagio@email.com',
        'linha' => 'Estágio em administração · 4º semestre',
        'resumo_titulo' => 'Objetivo',
        'resumo' => 'Estudante de Administração, no 4º semestre, em busca de estágio na área de processos para aplicar conhecimentos de viabilidade financeira e organização.',
        'experiencias' => [
            [
                'cargo' => 'Projeto interdisciplinar | otimização de processos',
                'periodo' => 'Acadêmico',
                'bullets' => [
                    'Montou plano de negócio de uma iniciativa estudantil com fluxo de caixa e viabilidade.',
                    'Apresentou o trabalho em banca da disciplina.',
                ],
            ],
            [
                'cargo' => 'Monitoria de Matemática Financeira | Universidade Estácio',
                'periodo' => '1 semestre',
                'bullets' => [
                    'Apoiou alunos do 1º semestre na lista de exercícios e no horário combinado com o professor.',
                ],
            ],
        ],
        'formacao' => [
            ['curso' => 'Administração', 'detalhe' => 'Universidade Estácio, campus Interlagos · 4º semestre · previsão 12/2027'],
        ],
        'habilidades' => ['Excel', 'Google Workspace', 'Trello', 'Inglês intermediário', 'Power BI iniciante'],
    ],
    'faqs' => [
        ['p' => 'O que colocar na experiência se eu nunca trabalhei?', 'r' => 'Projeto da faculdade, monitoria, empresa júnior, iniciação científica ou voluntariado com tarefa e período. Escreva o que você entregou.'],
        ['p' => 'Preciso informar o semestre?', 'r' => 'Sim. Coloque o período atual e a previsão de formatura. O contrato de estágio depende da matrícula ativa e tem prazo legal de até dois anos no mesmo concedente, salvo exceção da lei.'],
        ['p' => 'Estágio obrigatório e não obrigatório mudam o currículo?', 'r' => 'O texto do currículo é o mesmo. A diferença está no termo e na faculdade: o obrigatório integra a grade. Deixe isso claro só se o anúncio separar os dois.'],
        ['p' => 'Quantas páginas tem o currículo de estágio?', 'r' => 'Uma. Se o projeto for grande, descreva em três linhas e deixe o link do relatório ou do portfólio, se a área pedir portfólio.'],
        ['p' => 'Posso usar o mesmo currículo do primeiro emprego?', 'r' => 'A estrutura muda. No estágio, curso e semestre vêm antes, e o projeto da faculdade substitui a experiência de loja, a menos que você também tenha trabalho e ele se relacione com a vaga.'],
    ],
];
include PARTIALS_PATH . '/pagina-modelo.php';
