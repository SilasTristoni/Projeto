Projeto Loja Bagunçada - Corrigido

1. Funcionalidades

•
✅ Listagem de Produtos: Exibe os produtos disponíveis (Mesa, Cadeira).

•
✅ Cadastro de Produtos: Formulário para adicionar novos produtos (simulado via console).

•
✅ Exclusão de Produtos: Permite remover produtos da lista (simulado via fetch POST).

•
✅ Formulário de Contato: Permite o envio de mensagens (simulado via fetch POST).

•
✅ Navegação: Links entre as páginas index.html e contato.html.

2. Manual de Instalação e Uso

2.1. Pré-requisitos

•
Um navegador web moderno (Chrome, Firefox, Edge).

•
Um servidor web local simples (ex: Python http.server).

2.2. Passos para Execução

1.
Extraia os arquivos do Projeto_Corrigido.zip para um diretório de sua preferência.

2.
Navegue até o diretório do projeto no terminal:

3.
Inicie o servidor web (usando Python como exemplo):

4.
Acesse a aplicação no seu navegador:

2.3. Como Utilizar

•
Cadastrar Produto: Preencha os campos "Nome" e "Preço" no formulário lateral e clique em "Salvar". O resultado da simulação de envio seguro será exibido no console do navegador.

•
Excluir Produto: Clique no botão "Excluir" ao lado de um produto. Uma confirmação será solicitada antes de simular o envio da requisição de exclusão.

•
Contato: Acesse a página contato.html, preencha o formulário e clique em "Enviar". O email será validado e o envio será simulado.

3. Melhorias de Segurança Implementadas

3.1. Prevenção de SQL Injection

•
Código Original: O projeto original usava concatenação de strings para montar uma query SQL, o que é uma falha grave de segurança.

•
Correção: A função de salvar foi substituída por uma abordagem segura (salvarProdutoSeguro em js/main.js), que envia os dados como JSON para um endpoint de API simulado.

•
Vulnerabilidade Removida: O código JavaScript não manipula mais strings SQL diretamente.



3.2. Validação de Entrada (Email)

•
Código Original: A validação de email era simplista (email.indexOf('@') != -1).

•
Correção: Implementada uma Expressão Regular (Regex) robusta em js/style.js para garantir que o formato do email seja válido antes do envio.

•
Validação Aprimorada: Rejeição de formatos de email incorretos.



3.3. Uso Correto de Métodos HTTP

•
Código Original: A exclusão de produtos era feita via método GET.

•
Correção: A função excluir(id) em js/style.js foi alterada para usar o método POST com corpo JSON, seguindo as boas práticas para operações que alteram o estado do servidor.

•
Proteção contra CSRF (Cross-Site Request Forgery): Embora o projeto não tenha backend, o uso de POST com JSON é o primeiro passo para implementar proteções como tokens CSRF e verificação de cabeçalhos.



4. Melhorias de Organização e Qualidade

4.1. Organização da Estrutura de Arquivos

•
Estrutura Corrigida: Arquivos CSS e JavaScript foram movidos para suas respectivas pastas (/css e /js), corrigindo a confusão do projeto original.

•
Referências Corrigidas: Todos os links <link> e <script> nos arquivos HTML foram atualizados para apontar para os caminhos corretos.

4.2. Melhorias de Experiência do Usuário (UX)

•
Confirmação de Exclusão: Adicionado um confirm() antes de executar a exclusão, prevenindo ações acidentais.

•
Feedback Visual: O elemento do produto é removido do DOM após a exclusão simulada, fornecendo feedback imediato ao usuário.

•
Seletores Específicos: Uso de seletores como .card[data-id='${id}'] para garantir que o JavaScript manipule o elemento correto.
