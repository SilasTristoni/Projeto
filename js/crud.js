// 1. Funções de CRUD (corrigidas para buscar o nome E PREÇO)
function editar(id){
    // Busca o card específico usando o data-id
    var card = document.querySelector('.card[data-id="'+id+'"]');
    
    // Se o card for encontrado, pega os dados. Caso contrário, usa um fallback.
    var nome = card ? card.querySelector('.title').innerText : 'Produto Desconhecido';
    var preco = card ? card.querySelector('.price').innerText : '0'; // Ex: "R$ 1200"

    // Limpa o preço para enviar apenas o número (Remove "R$ " e espaços)
    var precoLimpo = preco.replace('R$', '').trim(); 
    
    // Codifica o nome e adiciona o preço (p) na URL
    document.location="editar.php?id="+id+"&n="+encodeURIComponent(nome)+"&p="+precoLimpo;
}

function excluir(id){
    if (confirm('Tem certeza que deseja excluir o produto ' + id + '?')) {
        fetch('/delete.php?id='+id,{method:'GET'})
            .then(res => {
                console.log('Produto ' + id + ' excluído com sucesso.');
                // Opcional: Remover o elemento do DOM ou recarregar a página
            })
            .catch(error => console.error('Erro ao excluir:', error));
    }
}

// 2. Anexar Event Listeners (Corrigindo a falta de resposta)
// Este bloco garante que o JS adicione o comportamento aos botões após o HTML carregar.
document.addEventListener('DOMContentLoaded', function() {
    // Seleciona todos os botões de ação dentro dos cards de produto
    document.querySelectorAll('.card button').forEach(button => {
        button.addEventListener('click', function() {
            // Obtém os dados dos atributos data-* definidos no HTML
            const id = this.getAttribute('data-id');
            const action = this.getAttribute('data-action');
            
            if (action === 'editar') {
                editar(id);
            } else if (action === 'excluir') {
                excluir(id);
            }
        });
    });
});