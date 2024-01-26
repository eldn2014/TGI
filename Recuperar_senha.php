<?php

include('./assets/PHP/Conexao.php');

use PHPMailer\PHPMailer\PHPMailer;

require './assets/vendor/autoload.php';

$mail = new PHPMailer(true);

    // Função para gerar um token único
    function generateToken($length = 20) {
        return bin2hex(random_bytes($length));
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Verifica se o e-mail foi enviado
        $email = $_POST['email'];

        // Verifica se o e-mail existe no banco de dados
        $sql1 = "SELECT * FROM users WHERE email = '$email'";

        $sql_query = $mysqli->query($sql1);

        $result = $sql_query->fetch_assoc();

        if ($sql_query->num_rows == 1) {
            // Gera um token único
            $token = generateToken();

            // Atualiza o banco de dados com o token gerado
            $sql = "UPDATE users SET Senha='$token' WHERE email='$email'";
            $mysqli->query($sql);

            // Envie o e-mail com o link para redefinir a senha (substitua com sua própria lógica de envio de e-mail)
            $link = "http://localhost/TGI/atualizar_senha.php?chave=$token";
            
                    $mail->CharSet = 'UTF-8';
                    $mail->isSMTP();
                    $mail->Host       = 'sandbox.smtp.mailtrap.io';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = '51c2887eb67657';
                    $mail->Password   = '721cd08b50757c';
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port       = 2525;

                    $mail->setFrom('atendimento@kodano.com', 'Atendimento');
                    $mail->addAddress($email);

                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'Recuperar senha';
                    $mail->Body    = 'Prezado(a) ' . $result['Nome'] .".<br><br>Você solicitou alteração de senha.<br><br>Para continuar o processo de recuperação de sua senha, clique no link abaixo ou cole o endereço no seu navegador: <br><br><a href='" . $link . "'>" . $link . "</a><br><br>Se você não solicitou essa alteração, nenhuma ação é necessária. Sua senha permanecerá a mesma até que você ative este código.<br><br>";
                    $mail->AltBody = 'Prezado(a) ' . $result['Nome'] ."\n\nVocê solicitou alteração de senha.\n\nPara continuar o processo de recuperação de sua senha, clique no link abaixo ou cole o endereço no seu navegador: \n\n" . $link . "\n\nSe você não solicitou essa alteração, nenhuma ação é necessária. Sua senha permanecerá a mesma até que você ative este código.\n\n";

                    $mail->send();





            echo "Um e-mail foi enviado com instruções para redefinir a senha.";
        } else {
            echo "Este e-mail não está cadastrado.";
        }
    }

    $mysqli->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset de senha</title>
</head>
<body>

    <form method="POST" class="Recu_senha">
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

        <button type="submit" class="btn_rec_senha"> Enviar </button>

    </form>
     
    
</body>
</html>