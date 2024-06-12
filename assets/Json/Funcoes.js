function montar_form() {

var frm ='<div id="Div-main"><img src="assets/imagens/logo_Kodano.svg" alt="Logo"><h4>Digite a nova senha</h4><form method=\"POST\" class=\"Recu_senha\"><label for=\"senha_atual\">Senha:<input type=\"password\" id=\"senha_atual\" name=\"senha_atual\" placeholder=\"Digite sua nova senha\" title=\Mínimo de 8 caracteres contendo pelo menos 1 letra maiuscula e 1 número\" pattern=\"^(?=.*[A-Za-z])(?=.*\\d)[A-Za-z\\d]{8,}$\" required></label><div ID="div_buttons"><button type=\"submit\" class=\"btn_Atual_senha\"> Enviar </button></div></form></div>';        
                $("#Body").append(frm);

}




function exibeB(){
  window.open("Fim.php")
}


function TextosHTML(controle){
  
  if (controle>5){ 
    $("#Conteudo").text("os modulos de HTML já foram finalizados.")
    $("#BTN02").hide() 
    $("#BTN01").hide()
    $("#BTN03").hide()    }

  else{
  $("#Conteudo").text("Deseja continuar?")          
  $("#Titulo").text("HTML")
  $("#BTN02").show()
  $("#BTN01").show()
  $("#BTN03").hide() 
  }

}

function TextosCSS(controle){

  if (controle<5){ 
    $("#Conteudo").text("os modulos de HTML ainda não foram Finalizados")
    $("#BTN02").hide() 
    $("#BTN01").hide()
    $("#BTN03").hide()   }

  else if (controle>9){ 
    $("#Conteudo").text("os modulos de CSS já foram finalizados.")   
    $("#BTN02").hide() 
    $("#BTN01").hide()
    $("#BTN03").hide()  }

  else{
  $("#Conteudo").text("Deseja continuar?")          
  $("#Titulo").text("CSS")
  $("#BTN02").show()
  $("#BTN01").show()
  $("#BTN03").hide() 
  }
}

function TextosJS(controle){
  if (controle<5){ 
    $("#Conteudo").text("os modulos de HTML ainda não foram Finalizados")
    $("#BTN02").hide() 
    $("#BTN01").hide()
    $("#BTN03").hide()   }

  else if (controle>5 && controle<10){ 
    $("#Conteudo").text("os modulos de CSS ainda não foram Finalizados")
    $("#BTN02").hide() 
    $("#BTN01").hide()
    $("#BTN03").hide()  }

  else if (controle>13){ 
    $("#Conteudo").text("os modulos de javaScript já foram finalizados.")
    $("#BTN02").hide() 
    $("#BTN01").hide()
    $("#BTN03").hide()  }
  
  else{
  $("#Conteudo").text("Deseja continuar?")          
  $("#Titulo").text("JS")
  $("#BTN02").show()
  $("#BTN01").show()
  $("#BTN03").hide()
  }
}



function Limpartudo(){
  
  $("#Conteudo").text("")
  $("#Titulo").text("Bem Vindo ao Kodano")
  $("#BTN02").hide()
  $("#BTN01").hide()
  $("#BTN03").hide()

  allLinks.forEach((link) => {
  link.classList.remove("active")
  } )
}








const expand_btn = document.querySelector(".expand-btn");

// let activeIndex;

// quando clicado o botão de esconder inclui a classe colapsed ao body
expand_btn.addEventListener("click", () => {
  document.body.classList.toggle("collapsed");
});



const allLinks = document.querySelectorAll(".sidebar-links a");

// para todos os elementos A dentro da div de links ele ira scanear o elemento a e adicionar um evento de click
// ele ira varrer e ver qual link foi clicado e adicionar a classe a palavra ACTIVE

allLinks.forEach((elem) => {
  elem.addEventListener("click", function () {
    const hrefLinkClick = elem.href;

    allLinks.forEach((link) => {
      if (link.href == hrefLinkClick) {
        link.classList.add("active");
      } else {
        link.classList.remove("active");
      }
    });
  });
});
