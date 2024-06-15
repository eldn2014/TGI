// Obtém referências para os três botões
var botao1 = document.getElementById('btn01');

var botao3 = document.getElementById('btn03');


// Adiciona um ouvinte de evento de clique a cada botão
botao1.addEventListener('click', function() {
    $("#explicação").hide()
    $("#div_teste").show()
    $("#btn01").hide()
    $("#btn02").show()

    
});

function pegarTexto() {

    var texto_resp1 = document.getElementById('caixa_input1').value;
    var texto_resp2 = document.getElementById('caixa_input2').value;

    if(texto_resp1 == "<p>olá mundo</p>" && texto_resp2 ==  "<h1>olá mundo</h1>"){
        alert("resposta certa")
        $("#btn02").hide()
        $("#BTN01").show()
        $("#BTN02").show()
        $("#Conteudo").append('<br><p style=\'color: #019601\'>Parabéns vi que você esta prestando atenção. continue assim.</p>')

    }
    else{
        alert("resposta Incorreta tente novamente")
    }



}