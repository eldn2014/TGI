<?php

// restaura a seção anterior dos usuarios e logins
if(!isset($_SESSION))
    {session_start();}

    // verifica se a seção iniciada possui o atributo ID
if(!isset($_SESSION['ID_conta']))
    {die("Voce não pode acessar essa pagina Porque não esta logado. <br>
        <p><a href=\"index.php\">Login</a></p>");}

?>

