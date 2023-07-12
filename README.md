# README

Este é um arquivo README para o projeto hospedado no GitHub. O código fornecido é um exemplo de um roteador em PHP que trata diferentes rotas e inclui arquivos correspondentes com base nos parâmetros fornecidos.

## Requisitos

- Servidor web compatível com PHP
- PHP versão 5.3 ou superior

## Como usar

1. Faça o download ou clone este repositório em sua máquina local.
2. Certifique-se de ter um servidor web configurado com suporte a PHP.
3. Copie todos os arquivos deste repositório para a pasta raiz do seu servidor web.
4. Certifique-se de ter configurado corretamente o arquivo `config.php` com as informações necessárias.
5. Acesse o projeto através do navegador da web, fornecendo as rotas desejadas como parâmetros na URL.

## Estrutura de diretórios

- `config.php`: Arquivo de configuração contendo informações necessárias para o funcionamento do roteador.
- `src/desktop/screens/`: Pasta contendo os arquivos correspondentes às telas para a versão desktop.
- `src/mobile/screens/`: Pasta contendo os arquivos correspondentes às telas para a versão mobile.
- `src/painel/`: Pasta contendo arquivos relacionados ao painel de controle.
- `src/painel/index.php`: Arquivo principal do painel de controle.
- `src/painel/auth.php`: Arquivo de autenticação para o painel de controle.
- `src/painel/logged/index.php`: Arquivo principal do painel administrativo.

## Notas adicionais

- O código incluído neste exemplo verifica se o usuário está acessando a partir de um dispositivo móvel ou desktop e inclui os arquivos correspondentes com base nessa verificação.
- Para adicionar novas rotas, você pode adicionar blocos condicionais `if` dentro do código, conforme necessário, seguindo o padrão existente.
- Este código é apenas um exemplo e pode precisar ser adaptado às suas necessidades específicas.

## Licença

Este projeto é licenciado sob a [MIT License](LICENSE).
