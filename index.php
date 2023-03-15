<?php
session_start();
require('header.php');

if($_SESSION['aviso']){
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    
    <form method="POST" action="recebedor.php">

    
        <label>
            Nome:
            <br>
            <input type="text" name="nome">
        </label>
        <br>
        <br>

        <label>
            Idade:
            <br>
            <input type="text" name="idade">
        </label>
        <br>
        <br>
        
        <label>
            Email:
            <br>
            <input type="text" name="email">
        </label>
        <br>
        <br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>