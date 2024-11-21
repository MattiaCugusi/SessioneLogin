<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script_Login</title>
</head>
<body>
    <?php
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "admin" && $password="1234"){
        header("Location: benvenuto.php");
    }else{
        header("Location: errore.php");
    }

    
    
    
    
    ?>
</body>
</html>