<?php
    include("./assets/PHP/Protect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logado</title>
</head>
<body>
    Parabens <?php echo $_SESSION["Nome"]; ?> voce esta logado. <br><br><br>
    
   <a href="Logout.php">Logout</a>


</body> 
</html>