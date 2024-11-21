<?php
session_start();

session_unset();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessione Scaduta</title>
</head>
<body>
<?php
    echo "<h1 style='color: red'>Sessione Scaduta!!</h2>";
    echo "<p><a href='./pagina_login.html'>Torna al Login</a></p>";
    
    

    ?>
</body>
</html>