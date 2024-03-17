<?php

 include('./assets/PHP/Conexao.php');

if(isset($_POST['nome_cad']) && isset($_POST['email_cad']) && isset($_POST['senha_cad'])){

    if(strlen($_POST['email_cad'])==0) //verifica de o campo email ta preenchido
        { echo "<script>alert('Campo E-mail em branco, Favor verifique e preencha com seu E-mail');</script>";}

    elseif(strlen($_POST['senha_cad'])==0)  // verifica de o campo senha ta preenchido
        { echo "<script>alert('Campo Senha em branco, Favor verifique e preencha com uma senha');</script>";}

    elseif(strlen($_POST['nome_cad'])==0)  // verifica de o campo senha ta preenchido
        { echo "<script>alert('Campo Nome em branco, Favor verifique e preencha com seu nome');</script>";}

    elseif(strlen($_POST['sobrenome_cad'])==0)  // verifica de o campo senha ta preenchido
        { echo "<script>alert('Campo Nome em branco, Favor verifique e preencha com seu sobrenome');</script>";}

    else
        {
            // faz a limpeza das senha e do login afim de evitar invasão de hackers
            $email = $mysqli->real_escape_string($_POST['email_cad']);
            $senha = password_hash($mysqli->real_escape_string($_POST['senha_cad']),PASSWORD_DEFAULT);
            $nome = $mysqli->real_escape_string($_POST['nome_cad']);
            $sobrenome = $mysqli->real_escape_string($_POST['sobrenome_cad']);
        
            

            $sql_code1 = "SELECT * FROM users WHERE Email = '$email'";

            // Roda a consulta se der erro ele mata a consulta
            $sql_query = $mysqli->query($sql_code1) or die("Falha na execução do codigo SQL: ".$mysqli-> error);
        
            // Armazena quantos registros foram encontrados
            $quantidade = $sql_query->num_rows;

            if($quantidade == 1)
                {
                    echo "<script>alert('E-mail ja cadastrado, caso não lembre a senha, clique em esqueci a senha na área de login');
                            window.open('index.php','_self');</script>";

                }

            elseif($quantidade == 0)
                {
                    $sql_code2 = "INSERT INTO users(Nome, Sobrenome, Senha, Email) VALUES ('$nome','$sobrenome','$senha','$email')";
                    $mysqli-> query($sql_code2) or die("Falha na execução do codigo SQL: ".$mysqli-> error);
                    echo "<script>alert('Seu cadastro foi realizado com sucesso, estamos direcionando você para a área de login');
                          window.open('index.php','_self');</script>";
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
    <title>Area de Cadastramento</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" type="text/css">
    <link rel="stylesheet" href="assets/CSS/Style_cad.css" type="text/css">
    <script src="/assets/Json/Funcoes.js"></script>
    <script src="/assets/Json/jquery-3.7.1.min.js"></script>
</head>
<body>
    <div id="divF">
        <form method="POST" class="form_cad">

            <img id="logo_cad" src="assets/imagens/logo_Kodano.svg" alt="Logo codano">

            <h4>Faça seu cadastro preenchendo os dados abaixo</h4>

            <div class="Cadastro">
                <label for="nome_cad">Nome:
                    <input 
                    type="text"
                    id="nome_cad"
                    name="nome_cad"
                    autocomplete="off"
                    placeholder="Digite seu Nome"
                    required
                    >
                </label>
            </div>

            <div class="Cadastro">
                <label for="sobrenome_cad">Sobrenome:
                    <input 
                    type="text"
                    id="sobrenome_cad"
                    name="sobrenome_cad"
                    autocomplete="off"
                    placeholder="Digite seu Sobrenome"
                    required
                    >
                </label>
            </div>


            <div class="Cadastro">
                <label for="email_cad">E-mail:
                    <input 
                    type="email"
                    id="email_cad"
                    name="email_cad"
                    autocomplete="off"
                    placeholder="Digite seu E-mail"
                    required
                    >
                </label>
            </div>

            <div class="Cadastro">
                <label for="senha_cad">Senha:
                    <input 
                    type="password"
                    id="senha_cad"
                    name="senha_cad"
                    placeholder="Digite sua senha"
                    title="Mínimo de 8 caracteres contendo pelo menos 1 letra maiuscula e 1 número"
                    pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"
                    required
                    >
                </label>
            </div>


            
            <div id="div_buttons">
                <button type="submit" class="cad-botão">Cadastrar</button>
                <button onclick="window.open('index.php','_self')">Voltar</button>
            </div>
        </form>
        
        
    </div>
</body>
</html>