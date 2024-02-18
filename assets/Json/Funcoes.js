function montar_form() {

var frm ='<div id="Div-main"><img src="assets/imagens/logo_Kodano.svg" alt="Logo"><h4>Digite a nova senha</h4><form method=\"POST\" class=\"Recu_senha\"><label for=\"senha_atual\">Senha:<input type=\"password\" id=\"senha_atual\" name=\"senha_atual\" placeholder=\"Digite sua nova senha\" title=\Mínimo de 8 caracteres contendo pelo menos 1 letra maiuscula e 1 número\" pattern=\"^(?=.*[A-Za-z])(?=.*\\d)[A-Za-z\\d]{8,}$\" required></label><div ID="div_buttons"><button type=\"submit\" class=\"btn_Atual_senha\"> Enviar </button></div></form></div>';
                
                $("#Body").append(frm);

}