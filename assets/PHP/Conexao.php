<?php

    // Senha e usuario do banco de dados
    $usuario = 'Eldn';
    $senha = 'Born+2024';


    // seleciona qual banco vai ser usado
    $database = 'Banco';

    $host= 'localhost';

    // cria a conexao com o banco de dados
        $mysqli = new mysqli($host, $usuario, $senha , $database);

    // se der erro ao conectar ele ira mostrar essa mensagem e matará toda a conexao
    if($mysqli->error ){ die('Falha ao conectar ao banco de dados: '.$mysqli->error);}
    


?>