<?php
$pagina = [
    'path' => 'modelos/curriculo-jovem-aprendiz',
    'breadcrumb' => 'Jovem Aprendiz',
    'h1' => 'Currículo para jovem aprendiz: o que a empresa e o curso pedem',
    'lead' => 'A vaga de aprendiz olha idade, matrícula na escola e vontade de aprender uma rotina. Veja o que escrever, o que a lei muda no horário e um exemplo para quem ainda está no ensino médio.',
    'cta' => 'Criar currículo de jovem aprendiz',
    'cta_titulo' => 'Monte o PDF do aprendiz',
    'cta_texto' => 'O gerador abre o exemplo do Ricardo. Troque escola, série e o objetivo pela área do edital.',
    'erros_titulo' => 'Erros no currículo de aprendiz',
    'palavras_intro' => 'O edital do CIEE, Senac, Senai ou da própria empresa diz a área: administrativo, varejo, indústria. Use as palavras dessa área só se você já teve contato com elas na escola ou em casa.',
    'palavras' => ['Jovem aprendiz', 'Ensino médio', 'Matrícula ativa', 'Disponibilidade', 'Informática básica', 'Atendimento', 'Organização', 'Pontualidade'],
    'exemplo_titulo' => 'Exemplo de currículo para jovem aprendiz',
    'checklist' => [
        'Idade, série, escola e turno estão fáceis de achar.',
        'O objetivo cita aprendiz e a área do edital.',
        'Atividades da escola ou de casa mostram uma tarefa, não só "sou dedicado".',
        'O horário prometido não atrapalha a aula.',
    ],
    'secoes' => [
        [
            'id' => 'o-que-colocar',
            'titulo' => 'O que colocar no currículo de jovem aprendiz',
            'paragrafos' => [
                'A Lei da Aprendizagem (Lei 10.097/2000) admite jovens de 14 a 24 anos incompletos. Pessoa com deficiência pode participar sem esse limite de idade. A empresa não espera emprego anterior. Ela confere se você estuda e se consegue cumprir a jornada junto com a aula.',
                'A jornada é de até 6 horas por dia. Quem já concluiu o ensino fundamental pode ter jornada de até 8 horas, conforme a lei, desde que as horas de teoria e prática caibam no contrato. Por isso turno da escola e disponibilidade são dados do currículo, não detalhe secundário.',
            ],
            'cards' => [
                ['titulo' => 'Escola em primeiro lugar', 'texto' => 'Nome da escola, série, turno e previsão de conclusão. Escola técnica pode ser citada junto com o curso, por exemplo administração ou logística.'],
                ['titulo' => 'Informática do dia a dia', 'texto' => 'Word, planilha básica, e-mail e digitação. Diga o que você já fez: trabalho escolar, tabela simples, pesquisa.'],
                ['titulo' => 'Atividade com responsabilidade', 'texto' => 'Grêmio, feira, time, culto, ajuda na loja da família ou cuidado com irmão em horário fixo. O recrutador lê compromisso de horário.'],
                ['titulo' => 'Área do edital', 'texto' => 'Se a vaga é no varejo, fale de atendimento e organização de material. Se é no escritório, fale de arquivo, recado e computador. Não mande o mesmo texto para as duas.'],
            ],
        ],
        [
            'id' => 'como-escrever',
            'titulo' => 'Como escrever sem curso e sem emprego',
            'paragrafos' => [
                'Uma atividade da escola bem contada substitui o curso que você ainda não fez. O contrato de aprendizagem é anotado na carteira de trabalho e combina teoria na entidade formadora com prática na empresa. Você não precisa explicar a lei inteira no currículo. Basta mostrar que estuda e que tem horário compatível.',
            ],
            'frases' => [
                'Estudante do 2º ano do ensino médio, período noturno, em busca de vaga de jovem aprendiz administrativo. Uso Word e Excel básico nos trabalhos da escola e posso estudar de manhã na entidade e praticar à tarde.',
                'Quero a primeira oportunidade como aprendiz no varejo. Ajudei a organizar a feira da escola, recebi as pessoas na entrada e contei o material no fim do dia.',
            ],
            'tabela' => [
                ['bom' => '2º ano do ensino médio, Colégio Estadual Vila Yara, noturno, previsão de conclusão em 12/2026.', 'ruim' => 'Estudante esforçado em busca de crescimento.'],
                ['bom' => 'Trabalho de geografia: pesquisei, montei os slides e apresentei para a turma.', 'ruim' => 'Domínio avançado de informática e inglês fluente.'],
                ['bom' => 'Disponibilidade de manhã, porque estudo à noite.', 'ruim' => 'Disponibilidade total, inclusive no horário da aula.'],
            ],
        ],
    ],
    'erros' => [
        ['titulo' => 'Esconder a série ou o turno', 'texto' => 'Sem turno, a empresa não sabe se a teoria do curso de aprendizagem cabe na sua semana.'],
        ['titulo' => 'Currículo com cara de gerente', 'texto' => 'Lista de liderança, metas e ERP afasta o selecionador. Aprendiz entra para aprender a rotina com supervisão.'],
        ['titulo' => 'Idade fora da regra sem explicar', 'texto' => 'Se você tem 24 anos completos, a vaga de aprendiz em geral não se aplica, salvo deficiência, pela lei. Não force o título.'],
        ['titulo' => 'Prometer horário que corta a aula', 'texto' => 'Falta na escola pode encerrar o contrato. Escreva só o período em que você realmente pode estar na empresa.'],
    ],
    'exemplo' => [
        'nome' => 'Ricardo Almeida',
        'contato' => 'Osasco, SP · (11) 90000-0000 · ricardo.aprendiz@email.com',
        'linha' => 'Jovem aprendiz · ensino médio noturno',
        'resumo_titulo' => 'Objetivo',
        'resumo' => 'Estudante em busca da primeira vaga de jovem aprendiz para ajudar nas rotinas da empresa e aprender processos administrativos e operacionais.',
        'experiencias' => [],
        'formacao' => [
            ['curso' => 'Ensino médio | 2º ano, noturno', 'detalhe' => 'Colégio Estadual Vila Yara · previsão 12/2026'],
        ],
        'habilidades' => ['Word e Excel básico', 'Digitação', 'Atendimento por telefone', 'Inglês iniciante'],
    ],
    'faqs' => [
        ['p' => 'Qual a idade para ser jovem aprendiz?', 'r' => 'De 14 a 24 anos incompletos, pela Lei 10.097/2000. Pessoa com deficiência pode ser aprendiz sem esse teto de idade. Confira também o edital da entidade, porque ele pode exigir matrícula e frequência.'],
        ['p' => 'Aprendiz tem carteira assinada?', 'r' => 'O contrato de aprendizagem é um contrato especial, registrado na carteira de trabalho, com teoria e prática. A remuneração considera o salário-hora do mínimo e as horas trabalhadas. Leia o edital para bolsa, vale e horário da turma.'],
        ['p' => 'Pode trabalhar em qualquer horário?', 'r' => 'Não. A jornada legal é de até 6 horas, ou até 8 horas para quem já terminou o ensino fundamental, e não pode prejudicar a escola. Menor de 18 anos também não faz horário noturno.'],
        ['p' => 'O que fazer se eu não tiver curso extra?', 'r' => 'Use trabalho da escola, feira, grêmio ou ajuda em casa e no comércio da família. Descreva a tarefa. Um curso curto de informática ajuda, mas a falta dele não impede de enviar o currículo.'],
        ['p' => 'Onde consigo a vaga?', 'r' => 'Na empresa e nas entidades formadoras, como Senai, Senac e programas parceiros do CIEE ou institutos da sua cidade. O currículo segue o mesmo modelo. O edital diz a área e o turno.'],
    ],
];
include PARTIALS_PATH . '/pagina-modelo.php';
