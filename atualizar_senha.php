<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizando Senha</title>
    <script src="jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/Json/Funcoes.js"></script>
</head>
<body id="Body">
    
    <?php

        include('./assets/PHP/Conexao.php');

        $chave = filter_input(INPUT_GET, 'chave', FILTER_DEFAULT);

        if (!empty($chave)) 
            {
                $sql1 = "SELECT * FROM users WHERE Senha = '$chave'";

                $sql_query = $mysqli->query($sql1);

                $result = $sql_query->fetch_assoc();
                $Email  = $result['Email'];

                if ($sql_query->num_rows == 1) 
                    { 
                      echo "<script>montar_form()</script>";
                }
                else
                    {echo "<p style='color: #ff0000'>Erro: Link inválido, solicite novo link para atualizar a senha!</p>";}

            }
        else
            {echo "<p style='color: #ff0000'>Erro: Link inválido, solicite novo link para atualizar a senha!</p>";}




            
        if(isset($_POST['senha_atual'])){

            if(strlen($_POST['senha_atual'])==0)  // verifica de o campo senha ta preenchido
                { echo "<script>alert('Campo Senha em branco, Favor verifique e preencha com uma senha');</script>";}
            else
                {
                    $senha = password_hash($mysqli->real_escape_string($_POST['senha_atual']),PASSWORD_DEFAULT);

                    $sql_code2 = "UPDATE users SET Senha='$senha' WHERE email='$Email'";
                    $mysqli->query($sql_code2) or die("Falha na execução do codigo SQL: ".$mysqli-> error);
                    echo "<script>alert('Sua senha foi atualizada com sucesso, estamos direcionando você para a área de login');
                          window.open('index.php','_self');</script>";
                }
        }
    ?>

</body>
</html>