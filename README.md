# CriarCV.online

Gerador de currículos profissionais de alto impacto com visualização em tempo real e exportação em formato PDF otimizado para sistemas de recrutamento (ATS).

## 🔗 URL do projeto

https://criarcv.online

## 📸 Preview da Interface

### Home Page
![Home Page do CriarCV.online](public/assets/img/readme/preview-site.jpg)

### Editor com Live Preview
![Editor do CriarCV.online](https://img.lightshot.app/RJPHSvT8TJC-q931TOSBAQ.png)

## 📝 Descrição do Projeto

O CriarCV.online é uma ferramenta web desenvolvida para auxiliar candidatos na criação de currículos modernos e bem estruturados. O sistema utiliza uma arquitetura baseada em PHP para o processamento de arquivos e JavaScript para a interatividade do editor, garantindo uma experiência de usuário fluida e segura.

## 🚀 Estratégia de SEO e Modelos

O projeto conta com uma estrutura de **SEO Dinâmico** e **Landing Pages** focadas em nichos específicos para atrair tráfego orgânico:
- **Páginas de Destino:** Modelos otimizados para Primeiro Emprego, Jovem Aprendiz e Auxiliar Administrativo.
- **Dados Estruturados:** Implementação de JSON-LD (`FAQPage`, `HowTo` e `ItemList`) para maximizar a visibilidade nos resultados de busca do Google.
- **Roteamento Customizado:** Router em PHP focado em URLs amigáveis para melhor indexação.

## ✨ Principais Funcionalidades

- **Editor com Live Preview:** Visualização instantânea das alterações durante o preenchimento.
- **Layout Otimizado para ATS:** Formatação testada para leitura por algoritmos de recrutamento.
- **Exportação em PDF:** Geração de arquivos de alta qualidade via Dompdf.
- **Armazenamento Zero:** Os dados do usuário são processados apenas em memória de sessão e não são persistidos em banco de dados, garantindo privacidade total.
- **Interface Responsiva:** Acessível via desktop e dispositivos móveis.

## 🛠️ Tecnologias Utilizadas

- **Backend:** PHP 8.x
- **Frontend:** Tailwind CSS, JavaScript (ES6+)
- **Bibliotecas:** Dompdf (Gerador de PDF)
- **Servidor:** Apache (via .htaccess para roteamento de URLs amigáveis)

## 📂 Estrutura de Pastas

public/
  ├── assets/          # Arquivos estáticos (CSS, JS, Imagens)
  ├── index.php        # Ponto de entrada (Router)
  ├── exportar.php     # Lógica de geração do PDF
  └── .htaccess        # Configurações de roteamento e segurança
src/
  ├── app/
      ├── Views/       # Templates, Partials e Páginas de SEO
vendor/                # Dependências instaladas via Composer

## ⚙️ Requisitos do Sistema

- Servidor Web (Apache/Nginx)
- PHP 8.0 ou superior
- Extensões PHP ativas: mbstring, dom, gd
- Composer (para gerenciamento de dependências)

## 📥 Instalação e Configuração

1. Clone o repositório ou baixe os arquivos para o seu diretório de servidor.
2. Instale as dependências via terminal na raiz do projeto:
   composer install
3. Configure o DocumentRoot do seu servidor para apontar para a pasta /public.
4. Certifique-se de que o módulo mod_rewrite está ativado no Apache.
5. Verifique as permissões de escrita para a geração de arquivos temporários do Dompdf.

## 🔒 Segurança e Privacidade

O sistema adota a política de armazenamento zero. Nenhuma informação pessoal inserida no editor é salva em logs ou bancos de dados do servidor. O processamento do currículo ocorre inteiramente no lado do cliente e a conversão para PDF é feita via buffer de saída no PHP.

## 📄 Licença

Este projeto usa a licença MIT.