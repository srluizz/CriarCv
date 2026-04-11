# CriarCV.online

Gerador de currículos profissionais de alto impacto com visualização em tempo real e exportação em formato PDF otimizado para sistemas de recrutamento (ATS).

## URL do projeto

https://criarcv.online

## Descrição do Projeto

O CriarCV.online é uma ferramenta web desenvolvida para auxiliar candidatos na criação de currículos modernos e bem estruturados. O sistema utiliza uma arquitetura baseada em PHP para o processamento de arquivos e JavaScript para a interatividade do editor, garantindo uma experiência de usuário fluida e segura.

## Principais Funcionalidades

- Editor com Live Preview: Visualização instantânea das alterações durante o preenchimento.
- Layout Otimizado para ATS: Formatação testada para leitura por algoritmos de recrutamento.
- Exportação em PDF: Geração de arquivos de alta qualidade via Dompdf.
- Armazenamento Zero: Os dados do usuário são processados apenas em memória de sessão e não são persistidos em banco de dados, garantindo privacidade total.
- Interface Responsiva: Acessível via desktop e dispositivos móveis.

## Tecnologias Utilizadas

- Backend: PHP 8.x
- Frontend: Tailwind CSS, JavaScript (Vanilla)
- Bibliotecas: Dompdf (Gerador de PDF)
- Servidor: Apache (via .htaccess para roteamento de URLs amigáveis)

## Estrutura de Pastas

public/
  ├── assets/          # Arquivos estáticos (CSS, JS, Imagens)
  ├── index.php        # Ponto de entrada do sistema
  ├── exportar.php     # Lógica de geração do PDF
  └── .htaccess        # Configurações de roteamento e segurança
src/
  ├── app/
      ├── Views/       # Templates e componentes da interface
vendor/                # Dependências instaladas via Composer

## Requisitos do Sistema

- Servidor Web (Apache/Nginx)
- PHP 8.0 ou superior
- Extensões PHP ativas: mbstring, dom, gd
- Composer (para gerenciamento de dependências)

## Instalação e Configuração

1. Clone o repositório ou baixe os arquivos para o seu diretório de servidor (ex: htdocs).
2. Instale as dependências necessárias via terminal na raiz do projeto:
   composer install
3. Configure o DocumentRoot do seu servidor ou domínio para apontar para a pasta /public.
4. Certifique-se de que o módulo mod_rewrite está ativado no Apache para o funcionamento das URLs amigáveis.
5. Verifique as permissões de escrita na pasta do projeto para a geração de arquivos temporários do Dompdf.


## Segurança e Privacidade

O sistema adota a política de armazenamento zero. Nenhuma informação pessoal inserida no editor é salva em logs ou bancos de dados do servidor. O processamento do currículo ocorre inteiramente no lado do cliente (navegador) e a conversão para PDF é feita via buffer de saída no PHP.

## Licença

Este projeto usa a licença MIT.