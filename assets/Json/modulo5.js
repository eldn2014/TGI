// Obtém referências para os três botões
var botao1 = document.getElementById('btn01');
var botao2 = document.getElementById('btn02');
var botao3 = document.getElementById('btn03');


// Adiciona um ouvinte de evento de clique a cada botão
botao1.addEventListener('click', function() {
    alert("resposta Incorreta, tente novamente")
    $("#btn01").hide()
});

botao2.addEventListener('click', function() {
    alert('Parabéns Você esta correto(a)');
    $("#btn01").hide()
    botao2.disabled = true;
    $("#btn03").hide()
    $("#BTN02").show()
    $("#Conteudo").append('<br><p style=\'color: #019601\'>Você esta certo, o CSS Uma linguagem de estilização para designs em paginas HTML.</p>')


    // Adicione aqui qualquer ação que deseja realizar quando o botão 2 for clicado
});

botao3.addEventListener('click', function() {
    alert("resposta Incorreta, tente novamente")
    $("#btn03").hide()
});
