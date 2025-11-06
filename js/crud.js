// Corrigida: Busca o título dentro do card específico usando o atributo data-id, 
// garantindo que o nome do produto correto seja enviado.
function editar(id){
    var card = document.querySelector('.card[data-id="'+id+'"]');
    var nome = card ? card.querySelector('.title').innerText : 'Produto';
    // encodeURIComponent garante que o nome seja passado corretamente na URL
    document.location="editar.php?id="+id+"&n="+encodeURIComponent(nome);
}

function excluir(id){
    fetch('/delete.php?id='+id,{method:'GET'}).then(res=>{console.log('ok');});
}

// A função 'enviarContato' foi removida e sua lógica (validação de email) 
// foi movida para o arquivo utils.js para centralizar o tratamento do formulário.