<?php
// Define variáveis para facilitar a leitura.
// O ideal é sempre sanitizar dados de entrada.
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
// Note que o nome do produto vem como string codificada na URL (encodeURIComponent no JS)
$nome = isset($_GET['n']) ? htmlspecialchars(urldecode($_GET['n'])) : 'Produto Desconhecido';
// Captura o preço da URL
$preco = isset($_GET['p']) ? htmlspecialchars($_GET['p']) : '0';


// Em um projeto real, você usaria o $id para buscar todos os dados do produto no banco.
// Ex: $produto = buscar_produto_por_id($id);
// Se não encontrar o produto, você redirecionaria para uma página de erro.

if ($id === 0) {
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto: <?php echo $nome; ?></title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header><h1>Editar Produto</h1></header>
    <main>
        <div class="card">
            <h2>Editando: <?php echo $nome; ?> (ID: <?php echo $id; ?>)</h2>
            
            <form action="update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                
                <label>
                    Nome do Produto:
                    <input type="text" name="nome" value="<?php echo $nome; ?>" required>
                </label>
                
                <label>
                    Preço:
                    <input type="text" name="preco" value="<?php echo $preco; ?>" required>
                </label>
                
                <button type="submit">Salvar Alterações</button>
            </form>
        </div>
    </main>
    <footer><p>© Loja Bagunçada</p></footer>
</body>
</html>