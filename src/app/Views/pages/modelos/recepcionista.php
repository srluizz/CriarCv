<?php
$pagina = [
    'path' => 'modelos/curriculo-recepcionista',
    'breadcrumb' => 'Recepcionista',
    'h1' => 'Currículo para recepcionista: clínica, hotel e escritório',
    'lead' => 'Recepção muda conforme a porta: paciente, hóspede ou visita de empresa. Veja o que escrever em agenda, telefone e organização, e um exemplo de clínica.',
    'cta' => 'Criar currículo de recepcionista',
    'cta_titulo' => 'Abra o exemplo de recepção',
    'cta_texto' => 'O gerador carrega o currículo da Fernanda, pensado para clínica. Ajuste o segmento se a sua vaga for hotel ou escritório.',
    'erros_titulo' => 'Erros na triagem de recepção',
    'palavras_intro' => 'Leia o anúncio e puxe o vocabulário do lugar: convênio e agenda médica, check-in e reserva, ou visita, correspondência e sala de reunião.',
    'palavras' => ['Recepcionista', 'Atendimento', 'Agenda', 'PABX', 'Telefone', 'Cadastro', 'Organização', 'Inglês para recepção', 'Controle de visita'],
    'exemplo_titulo' => 'Exemplo de currículo de recepcionista de clínica',
    'checklist' => [
        'O resumo diz o tipo de recepção: clínica, hotel, condomínio ou empresa.',
        'Agenda ou telefone aparece com a ferramenta e o volume, se você souber.',
        'Idioma está com nível e, se for o caso, com a situação em que você atendeu.',
        'Foto só entra se o anúncio pedir.',
    ],
    'secoes' => [
        [
            'id' => 'o-que-colocar',
            'titulo' => 'O que colocar no currículo de recepcionista',
            'paragrafos' => [
                'A recepção é o primeiro contato e também controle: quem entrou, quem foi atendido, o que ficou para o setor seguinte. O currículo mostra calma na fila, cuidado com dado pessoal e domínio da ferramenta da casa.',
                'Quem nunca trabalhou na função pode usar secretaria de escola, igreja, evento ou estágio. Descreva a mesa, o telefone e o que você anotava. Não copie um currículo de clínica se a sua prática foi só balcão de loja: dê a volta e fale de atendimento e organização.',
            ],
            'cards' => [
                ['titulo' => 'Clínica e consultório', 'texto' => 'Agenda, confirmação, cadastro, convênio, atraso de médico e orientação de sala. Cite o sistema se usou, como iClinic, Feegow ou agenda em planilha.'],
                ['titulo' => 'Hotel e pousada', 'texto' => 'Check-in, check-out, reserva, chave ou cartão e pedido do hóspede. Inglês entra aqui quando você recebeu gente de fora.'],
                ['titulo' => 'Escritório', 'texto' => 'Visita, crachá, correspondência, sala de reunião, café de recepção e ramal. É rotina administrativa de porta, diferente de auxiliar que fica no financeiro.'],
                ['titulo' => 'Telefone', 'texto' => 'PABX, celular da empresa ou WhatsApp oficial. Diga se transferia, anotava recado ou retornava ligação.'],
            ],
        ],
        [
            'id' => 'como-escrever',
            'titulo' => 'Como escrever atendimento sem adjetivo vazio',
            'paragrafos' => [
                '"Simpática e educada" não diferencia ninguém. Volume, ferramenta e um problema resolvido diferenciam. Mantenha o sigilo: não cite nome de paciente, hóspede ou o conteúdo de documento.',
            ],
            'frases' => [
                'Recepcionista de clínica, com agenda de mais de um profissional, confirmação de consulta e cadastro no sistema. Atendo o paciente na chegada e organizo a fila quando o atraso passa de 20 minutos.',
                'Busco a primeira vaga de recepcionista de escritório. Na secretaria da escola eu anotava visita, ligava para os responsáveis e separava a correspondência do dia.',
            ],
            'tabela' => [
                ['bom' => 'Confirmei a agenda do dia anterior por WhatsApp e reduzi a falta sem aviso.', 'ruim' => 'Atendimento humanizado e amor ao próximo.'],
                ['bom' => 'Operei o PABX, anotei recado e devolvi a ligação para o ramal certo.', 'ruim' => 'Boa comunicação e proatividade.'],
                ['bom' => 'Inglês intermediário para check-in de hóspede estrangeiro, com frase de reserva e horário.', 'ruim' => 'Inglês fluente e espanhol avançado.'],
            ],
        ],
    ],
    'erros' => [
        ['titulo' => 'Um texto só para clínica, hotel e empresa', 'texto' => 'Troque o resumo e dois tópicos conforme a porta. O resto da experiência pode permanecer.'],
        ['titulo' => 'Nome de paciente ou caso', 'texto' => 'Dado de terceiro não entra no currículo. Fale de volume e de processo.'],
        ['titulo' => 'Foto desnecessária', 'texto' => 'Salvo pedido do anúncio, a foto não prova organização. Aparência não substitui agenda e telefone.'],
        ['titulo' => 'Confundir com telefonista ou copeira', 'texto' => 'Se você fez as três funções, separe em tópicos. O anúncio de recepção quer a mesa de entrada, não só o cafezinho.'],
    ],
    'exemplo' => [
        'nome' => 'Fernanda Souza',
        'contato' => 'Osasco, SP · (11) 97777-6666 · fernanda.recepcao@email.com',
        'linha' => 'Recepcionista de clínica',
        'resumo_titulo' => 'Resumo',
        'resumo' => 'Recepcionista com experiência em atendimento ao público e organização de agenda, em busca de manter um fluxo calmo para pacientes e equipe.',
        'experiencias' => [
            [
                'cargo' => 'Recepcionista | Clínica Bem-Estar',
                'periodo' => '05/2022 — atual',
                'bullets' => [
                    'Recebeu mais de 40 pacientes por dia, com cadastro e encaminhamento de sala.',
                    'Cuidou da agenda no iClinic e no Google Calendar.',
                    'Controlou material de escritório da recepção.',
                ],
            ],
        ],
        'formacao' => [
            ['curso' => 'Tecnólogo em Secretariado executivo | 2021', 'detalhe' => 'Universidade Nove de Julho (Uninove)'],
        ],
        'habilidades' => ['Agenda médica', 'PABX', 'Pacote Office', 'Inglês intermediário', 'Atendimento'],
    ],
    'faqs' => [
        ['p' => 'O que escrever no objetivo sem experiência em recepção?', 'r' => 'Diga a vaga e a prática mais próxima: secretaria, evento, loja ou estágio. Exemplo: busco a primeira vaga de recepcionista para usar organização de agenda e atendimento que já fiz na secretaria da escola.'],
        ['p' => 'Recepcionista precisa de foto?', 'r' => 'Só se o anúncio pedir. Na maior parte das vagas de clínica e escritório, o PDF sem foto passa. Invista o espaço em ferramenta e rotina.'],
        ['p' => 'Como mostrar que atendo em outro idioma?', 'r' => 'Crie a linha de idiomas com o nível e, na experiência, a situação: check-in, telefone ou e-mail. Nível intermediário honesto vale mais do que fluente que trava na entrevista.'],
        ['p' => 'Quais habilidades entram?', 'r' => 'Agenda, telefone ou PABX, cadastro, organização de visita e o sistema da área. Empatia aparece no exemplo de fila ou atraso, não como palavra solta.'],
        ['p' => 'Serve o mesmo currículo para jovem aprendiz de recepção?', 'r' => 'A experiência muda. Se você ainda estuda e não teve a função, use a página de jovem aprendiz e mencione no objetivo o interesse pela recepção, com escola e turno.'],
    ],
];
include PARTIALS_PATH . '/pagina-modelo.php';
