function montar_form() {

var frm ='<form method=\"POST\" class=\"atualiza_senha\"><label for=\"senha_atual\">Senha:<input type=\"password\" id=\"senha_atual\" name=\"senha_atual\" placeholder=\"Digite sua nova senha\" title=\Mínimo de 8 caracteres contendo pelo menos 1 letra maiuscula e 1 número\" pattern=\"^(?=.*[A-Za-z])(?=.*\\d)[A-Za-z\\d]{8,}$\" required></label><button type=\"submit\" class=\"btn_Atual_senha\"> Enviar </button></form>';
                
                $("#Body").append(frm);

}