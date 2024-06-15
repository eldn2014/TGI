// Obtém referências para os três botões
var botao1 = document.getElementById('btn01');
var botao2 = document.getElementById('btn02');

var botao3 = document.getElementById('btn03');
var botao4 = document.getElementById('btn04');

var botao5 = document.getElementById('btn05');
var botao6 = document.getElementById('btn06');

var botao7 = document.getElementById('btn07');
var botao8 = document.getElementById('btn08');


// Adiciona um ouvinte de evento de clique a cada botão
botao1.addEventListener('click', function() {
    alert("resposta Incorreta, tente novamente")
    $("#btn01").hide()
});

botao2.addEventListener('click', function() {
   

    alert("Parabéns Você esta correto(a)")
    $("#btn02").hide()
    $("#btn01").hide()
    mudarcor("pergunta1")
    $(".pergunta2").show()

    
});


function mudarcor(parag){

var paragrafo = document.getElementsByClassName(parag);

for (var i = 0; i < paragrafo.length; i++) {
    // Muda a cor de cada parágrafo para vermelho
    paragrafo[i].style.color = 'green';
}


}

botao3.addEventListener('click', function() {
    alert("Parabéns Você esta correto(a)")
    $("#btn04").hide()
    $("#btn03").hide()
    mudarcor("pergunta2")
    $(".pergunta3").show()
});



botao4.addEventListener('click', function() {
    alert("resposta Incorreta, tente novamente")
    $("#btn04").hide()
});



botao5.addEventListener('click', function() {

    alert("Parabéns Você esta correto(a)")
    $("#btn05").hide()
    $("#btn06").hide()
    mudarcor("pergunta3")
    $(".pergunta4").show()


});

botao6.addEventListener('click', function() {
    alert("resposta Incorreta, tente novamente")
    $("#btn06").hide()
});

botao7.addEventListener('click', function() {
    alert("resposta Incorreta, tente novamente")
    $("#btn07").hide()
});


botao8.addEventListener('click', function() {

    alert("Parabéns Você esta correto(a)")
    $("#btn07").hide()
    $("#btn08").hide()
    mudarcor("pergunta4")
    $(".Botoes").show()


});
