<?php
session_start();

if(!(isset($_SESSION["tempo"]))){
    $_SESSION["tempo"] = time();
}

if ((time() - $_SESSION["tempo"]) > 20){
    header("Location: sessione_scaduta.php");
}


 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina di benvenuto</title>
</head>
<body style="text-align: center">
    <?php
    echo "<p>Cognome: Cugusi</p>";
    echo "<p>Nome: Mattia</p>";
    echo "<p>Data di nascita: 28/07/2006</p>";
    echo "<p>Data e ora login: " . date("d-m-Y h:i:s A") . "</p>";
    echo "<a href='./script_logout.php'>Log-out</a>"
    ?>
</body>
</html>