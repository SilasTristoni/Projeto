<?php
// Este arquivo é responsável por receber os dados do formulário de edição 
// e atualizar o registro no banco de dados.

// 1. Verificar se a requisição é POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // 2. Receber e sanitizar os dados do formulário
    $id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
    $nome = isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : '';
    $preco = isset($_POST['preco']) ? $_POST['preco'] : 0;

    // A lógica de conexão com o banco de dados e execução do UPDATE deve vir aqui
    /*
    Exemplo de Lógica (simulação):
    
    if ($id > 0) {
        // EXECUTE: UPDATE produtos SET nome = :nome, preco = :preco WHERE id = :id
        echo "Sucesso! Produto {$id} atualizado para Nome: {$nome}, Preço: {$preco}.";
        
        // Em caso de sucesso real no banco:
        // header("Location: index.html?update=success");
        // exit();
    } else {
        echo "Erro: ID de produto inválido.";
    }
    */
    
    // Simulação de resposta (Retire esta linha ao adicionar o código do BD)
    echo "<h1>Atualização Simulada Concluída!</h1>
          <p>Produto ID: {$id}</p>
          <p>Novo Nome: {$nome}</p>
          <p>Novo Preço: {$preco}</p>
          <p>Voltando para a lista de produtos em 3 segundos...</p>";
          
    // Redireciona para a página principal após a conclusão
    header("refresh:3;url=index.html");

} else {
    // Se a requisição não for POST, redireciona para a página inicial
    header("Location: index.html");
    exit();
}
?>