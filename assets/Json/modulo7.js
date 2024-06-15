// Obtém referências para os três botões
var botao1 = document.getElementById('btn01');
var botao2 = document.getElementById('btn02');
var botao3 = document.getElementById('btn03');
var botao4 = document.getElementById('btn04');
var botao5 = document.getElementById('btn05');


// Adiciona um ouvinte de evento de clique a cada botão
botao1.addEventListener('click', function() {
    alert("resposta Incorreta, tente novamente")
    $("#btn01").hide()
});

botao3.addEventListener('click', function() {
    alert('Parabéns Você esta correto(a)');
    $("#btn01").hide()
    $("#btn03").hide()
    $("#btn02").hide()
    $(".p1").show()
    $("#btn05").show()
    $("#btn04").show()
    $(".p").show()


    // Adicione aqui qualquer ação que deseja realizar quando o botão 2 for clicado
});

botao2.addEventListener('click', function() {
    alert("resposta Incorreta, tente novamente")
    $("#btn02").hide()
});


botao4.addEventListener('click', function() {
    alert("resposta Incorreta, tente novamente")
    $("#btn04").hide()
});

botao5.addEventListener('click', function() {
    alert("Parabéns Você esta correto(a)")
    $(".p2").show()
    $("#btn05").hide()
    $("#btn04").hide()
    $(".Botoes").show()


});

