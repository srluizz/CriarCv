<?php
$pagina = [
    'path' => 'modelos/curriculo-motorista',
    'breadcrumb' => 'Motorista',
    'h1' => 'Currículo para motorista: CNH, EAR e como descrever a rota',
    'lead' => 'Currículo de motorista começa pela categoria da CNH e pelo tipo de veículo. Veja onde entra a EAR, o que não colocar de documento e como contar entrega, coleta ou passageiro sem encher o PDF de sigla.',
    'cta' => 'Criar currículo de motorista',
    'cta_titulo' => 'Gere o PDF com a sua categoria',
    'cta_texto' => 'O exemplo do Roberto abre no gerador. Troque a categoria, a empresa e as rotas pelas suas.',
    'erros_titulo' => 'Erros que a transportadora corta na leitura',
    'palavras_intro' => 'A vaga diz a categoria e o serviço: entrega urbana, rodoviário, aplicativo, escolar ou carga. Repita esse serviço no resumo e deixe de fora a categoria que você não tem.',
    'palavras' => ['Motorista', 'CNH', 'EAR', 'Direção defensiva', 'Entrega', 'Roteirização', 'Conferência de nota', 'Rastreamento', 'MOPP'],
    'exemplo_titulo' => 'Exemplo de currículo de motorista entregador',
    'checklist' => [
        'Categoria da CNH, EAR e validade estão no resumo, sem o número do documento.',
        'O tipo de veículo e o serviço aparecem: van, VUC, caminhão, ônibus, moto.',
        'Entrega ou passageiro tem volume ou região, não só "dirigia bem".',
        'Curso de direção defensiva ou MOPP só entra se o certificado existe.',
    ],
    'secoes' => [
        [
            'id' => 'o-que-colocar',
            'titulo' => 'O que colocar no currículo de motorista',
            'paragrafos' => [
                'A empresa olha primeiro se você pode dirigir aquele veículo de forma remunerada. EAR é a observação "exerce atividade remunerada" na CNH. Sem ela, muita contratante nem segue a leitura. Categoria A, B, C, D ou E fica escrita por extenso no resumo, com o mês de validade.',
                'O número da CNH, o CPF e o endereço completo ficam para a admissão. No currículo bastam cidade, telefone, categoria e o trabalho. MOPP, o curso para transporte de produto perigoso, só entra se você vai concorrer a carga que exige isso e se o certificado está válido.',
            ],
            'cards' => [
                ['titulo' => 'Categoria e veículo', 'texto' => 'CNH B para carro e utilitário leve, C para caminhão, D para van de passageiro e ônibus conforme a regra da categoria, E para articulado. Escreva o que está no documento, não o que você "quase" tirou.'],
                ['titulo' => 'Serviço', 'texto' => 'Entrega, coleta, transferência entre lojas, transporte de funcionário ou aplicativo. Cada um tem rotina diferente de nota, ajudante e horário.'],
                ['titulo' => 'Cuidado com o veículo', 'texto' => 'Checklist, calibragem, limpeza, avaria e combustível. Transportadora lê isso como prejuízo evitado.'],
                ['titulo' => 'Rota', 'texto' => 'Região, cidade ou tipo de trajeto: centro, interior, noturno, serra. "Conheço a cidade inteira" é fraco. "Rota da zona oeste e Barueri, 20 a 30 paradas" é forte.'],
            ],
        ],
        [
            'id' => 'como-escrever',
            'titulo' => 'Como descrever entrega e direção',
            'paragrafos' => [
                'Fale de volume, conferência e ocorrência com calma. Multa e sinistro não precisam abrir o currículo. Se perguntarem, responda na entrevista. Direção defensiva aparece como curso com data, ou como hábito de checklist, não como slogan.',
            ],
            'frases' => [
                'Motorista com CNH categoria D e EAR, válido até 08/2028. Faço entrega urbana de van, com roteirização no celular e conferência de nota na saída e na entrega.',
                'Rodei a rota metropolitana com média de 25 entregas por dia, registrando ocorrência de avaria e de ausência do cliente no aplicativo da empresa.',
                'CNH B com EAR para vaga de motorista particular. Levo e busco em horário combinado, cuido da limpeza do carro e aviso atraso no WhatsApp.',
            ],
            'tabela' => [
                ['bom' => 'CNH C com EAR, validade 03/2027. Caminho toco 3/4 na distribuição de bebida.', 'ruim' => 'Habilitado em todas as categorias e disponível para qualquer caminhão.'],
                ['bom' => 'Conferi nota e volume antes de sair e colhi assinatura na entrega.', 'ruim' => 'Motorista responsável, pontual e que ama a estrada.'],
                ['bom' => 'Curso de direção defensiva em 2024, pela empresa.', 'ruim' => 'Nunca cometi erros no trânsito.'],
            ],
        ],
    ],
    'erros' => [
        ['titulo' => 'Número da CNH no PDF', 'texto' => 'Currículo circula por e-mail e WhatsApp. Categoria e validade bastam. Documento completo fica na integração.'],
        ['titulo' => 'Categoria diferente da vaga', 'texto' => 'Enviar CNH B para carreta faz a triagem parar. Se você está tirando a categoria, escreva "em processo" só quando o exame já tiver data, e concorra à vaga compatível.'],
        ['titulo' => 'Esconder o tipo de carga ou de app', 'texto' => 'Aplicativo, mudança e carga seca são experiências válidas. Dê nome ao serviço para a empresa comparar com a rota dela.'],
        ['titulo' => 'MOPP sem certificado', 'texto' => 'Produto perigoso tem curso próprio. Colocar a sigla sem o certificado vira problema na fiscalização da contratante.'],
    ],
    'exemplo' => [
        'nome' => 'Roberto Silva',
        'contato' => 'Osasco, SP · (11) 98888-7777',
        'linha' => 'CNH D com EAR · entrega urbana',
        'resumo_titulo' => 'Resumo',
        'resumo' => 'Motorista com experiência em rotas metropolitanas e direção segura. CNH categoria D com atividade remunerada (EAR).',
        'experiencias' => [
            [
                'cargo' => 'Motorista entregador | Transportadora Veloz',
                'periodo' => '2021 — atual',
                'bullets' => [
                    'Cumpriu média de 25 entregas por dia em rota urbana.',
                    'Usou roteirização e conferiu nota fiscal na saída e no cliente.',
                    'Fez checklist e limpeza do veículo no fim do turno.',
                ],
            ],
        ],
        'formacao' => [
            ['curso' => 'Direção defensiva', 'detalhe' => 'Curso interno da empresa · CNH D com EAR'],
        ],
        'habilidades' => ['Entrega urbana', 'Roteirização', 'Conferência de nota', 'Checklist do veículo'],
    ],
    'faqs' => [
        ['p' => 'O que é EAR no currículo?', 'r' => 'EAR significa exerce atividade remunerada. É a observação na CNH de quem dirige como trabalho. Escreva "CNH B com EAR" e a validade. Sem essa observação, muitas vagas nem chamam.'],
        ['p' => 'Coloco o número da CNH?', 'r' => 'Não. Informe categoria e validade. O número do documento e o CPF ficam para o cadastro, quando a empresa pedir cópia.'],
        ['p' => 'Como mostrar que conheço a rota?', 'r' => 'Cite região, cidades ou o tipo de trajeto e a quantidade de paradas. Exemplo: rota da zona oeste e Osasco, de 20 a 30 entregas. Evite "conheço tudo".'],
        ['p' => 'Motorista de aplicativo conta como experiência?', 'r' => 'Sim. Escreva o período, o tipo de veículo e o serviço, passageiro ou entrega. Se tiver avaliação ou quantidade de viagens que você possa mostrar no aplicativo, use o número.'],
        ['p' => 'Quando citar MOPP?', 'r' => 'Quando a vaga for de produto perigoso e você tiver o certificado válido. Nas outras vagas, direção defensiva, categoria e tipo de carga pesam mais.'],
    ],
];
include PARTIALS_PATH . '/pagina-modelo.php';
