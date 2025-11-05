document.getElementById('novo').addEventListener('submit',function(e){
    e.preventDefault();
    var n=e.target.nome.value;
    var p=e.target.preco.value;
    var arr=[];
    arr.push({n,p});
    console.log(arr);
});

document.getElementById('fale').addEventListener('submit',function(e){
    e.preventDefault();

    var email=document.getElementById('email').value;
    // Validação de email integrada ao listener de submit
    if(email.indexOf('@')==-1){
        alert('email inválido');
        return; // Impede a execução do fetch se o email for inválido
    }

    var dados={
        nome:document.getElementById('nome').value,
        email:email,
        mensagem:document.getElementById('mensagem').value
    };
    fetch('/send.php',{method:'POST',body:JSON.stringify(dados)})
        .then(r=>r.text())
        .then(t=>{alert('ok');});
});