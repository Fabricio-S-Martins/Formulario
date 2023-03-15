<?php
session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($nome){
    require('header.php');

    echo 'NOME: '.$nome."<br>";
    echo 'IDADE: '.$idade."<br>";
    echo 'E-mail: '.$email;
} else {
$_SESSION['aviso'] = 'Preencha os itens corretamente!';

    header("Location: index.php");
    exit;
}

?>