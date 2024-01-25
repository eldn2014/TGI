<?php

// inclui o arquivo para abrir a conexao com o banco de dados
 include('./assets/PHP/Conexao.php');

//  verifica se o post contem email e senha
 if(isset($_POST['email']) || isset($_POST['password'])){

    if(strlen($_POST['email'])==0) //verifica de o campo email ta preenchido
        {echo "Campo e-mail em branco, Favor verifique e preencha com seu E-mail";}

    elseif(strlen($_POST['password'])==0)  // verifica de o campo senha ta preenchido
        { echo "Campo Senha em branco, Favor verifique e preencha com sua senha";}

    else
        {
            // faz a limpeza das senha e do login afim de evitar invasão de hackers
            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['password']);

            // monta a query pra rodar
            $sql_code = "SELECT * FROM users WHERE Email = '$email' AND Senha = '$senha'";

            // Roda a consulta se der erro ele mata a consulta
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do codigo SQL: ".$mysqli-> error);
        
            // Armazena quantos registros foram encontrados
            $quantidade = $sql_query->num_rows;

            if($quantidade == 1)
                {
                    // seta os dados encontrados na quarie a uma variavel
                    $usuario = $sql_query->fetch_assoc();

                    // verifica se não tem nenhuma outra session aberta
                    if(!isset($_SESSION)){session_start(); }

                    $_SESSION ['ID'] = $usuario['ID'];
                    $_SESSION ['Nome'] = $usuario['Nome'];

                    // Direciona para o painel apos o login
                    header("Location: Painel.php");

                }
            else
                {
                    
                    echo "<script>alert('Falha ao Logar revise seu E-mail e senha e tente novamente.');</script>";}


        
        }


 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" type="text/css">
    
    <!-- link de conexao do arquivo css -->
    <link rel="stylesheet" type="text/css" href="assets/CSS/Style.css">

    <!-- Titulo que vai na aba de navegação -->
    <title>Kodano</title>

    <!-- logo que vai na aba de navegação -->
    <link rel="shortcut icon" type="imagem/png" href="assets/imagens/logo_Kodano.svg">

</head>



<body>
    <div class="form-wrapper">
        <div class="lado-formulario">
            <!-- <a href="#" title="logo" ><img src="imagens/Logo_Kodano.png" class="logo" alt="0fin"></a> -->
                
                <!-- cria o formulario e login -->
                <form class="meu-form" method="POST">

                    <!-- mensagem de bem vindo -->
                    <div class="linha-formulario-bem-vindo"> 
                        <h1>Seja Bem-vindo ao</h1>
                    </div>
                    <div class="logo">
                        <img src="assets/imagens/logo_Kodano.svg" alt="logo">
                    </div>

                
                    <!-- esse div cria um divisor com a palavra ou para dividir entre o metodo de login -->
                    <div class="divisor">
                        <div class="divisor-linha"></div>-<div class="divisor-linha"></div>
                    </div>

                    <!-- cria a caixa de digitação do email -->
                    <div class="formulario-digitaveis">
                        <label for="email">E-mail:
                            <input 
                            type="email"
                            id="email"
                            name="email"
                            autocomplete="off"
                            placeholder="Digite seu E-mail"
                            required
                            >
                        </label>
                    </div>
                    
                    <!-- cria a caixa de digitação de senha -->
                    <!-- ^ e $ - indica o começo e fim de uma string respctivamente
                    (?=.*[A-Z]) verifica se possui ao menos uma letra maiuscula
                    (?=.*\d) verifica se possui ao menos um numero entre 0-9
                    [A-Za-z\d]{6,} verifica se o codigo possui 6 carateres possuindo ao menos 1 letra maiuscula e um numero. -->
                    <div class="formulario-digitaveis">
                        <label for="Senha">Senha:
                            <input 
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Digite sua senha"
                            title="Mínimo de 8 caracteres contendo pelo menos 1 letra maiuscula e 1 número"
                            pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"
                            required
                            >
                        </label>
                    </div>

                    <!-- cria o botão de submite -->
                    <button type="submit" class="my-form_butão">Login</button>

                    <!-- cria dois links com reset e criação de senha -->
                    <div class="my-form_actions">
                        <a href="#" title="reset de senha">Reset de Senha</a>
                        <a href="#" title="cria conta">Ainda não tenho uma conta</a>
                    </div>
                </form>
            </div>
            <div class="lado-informação">
                <img src="assets/imagens/apresentacao.gif" alt="mockup" class="mockup">
            </div>
        </div>
        <script src="Script.js"></script
</body>

</html>
