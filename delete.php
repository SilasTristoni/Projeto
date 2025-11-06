<?php
header('Content-Type: application/json'); // Define o tipo de conteúdo da resposta como JSON

// 1. Receber o ID
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$response = [
    'success' => false,
    'message' => 'Erro desconhecido.'
];

if ($id > 0) {
    // 2. Lógica de Conexão e Exclusão no Banco de Dados
    /*
    Exemplo de Lógica:
    
    $conexao = new PDO('mysql:host=localhost;dbname=sua_base', 'usuario', 'senha');
    $stmt = $conexao->prepare("DELETE FROM produtos WHERE id = :id");
    $stmt->bindParam(':id', $id);
    
    if ($stmt->execute()) {
        $response['success'] = true;
        $response['message'] = 'Produto excluído com sucesso.';
        http_response_code(200); // OK
    } else {
        $response['message'] = 'Falha ao executar a exclusão no banco de dados.';
        http_response_code(500); // Internal Server Error
    }
    */
    
    // Simulação de Sucesso (remover este bloco ao adicionar a lógica do BD)
    $response['success'] = true;
    $response['message'] = "Produto com ID {$id} excluído (Simulado).";
    http_response_code(200);

} else {
    $response['message'] = 'ID de produto inválido ou não fornecido.';
    http_response_code(400); // Bad Request
}

// 3. Retornar a Resposta
echo json_encode($response);

// Opcional: Adicionar um arquivo update.php para receber os dados do formulário do editar.php e atualizar o BD.
?>