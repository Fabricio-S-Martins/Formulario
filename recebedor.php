<?php
session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

$tipoArquivos = ['image/jpeg', 'image/jpg', 'image/png'];

if($nome){
    $expiracao = time() + (86400 * 30);
    setcookie('nome', $nome, $expiracao);

    require('header.php');

    echo 'NOME: '.$nome."<br>";
    echo 'IDADE: '.$idade."<br>";
    echo 'E-mail: '.$email."<br>";
} else {
$_SESSION['aviso'] = 'Preencha os itens corretamente!';

    header("Location: index.php");
    exit;
}

if(in_array($_FILES['arquivo']['type'], $tipoArquivos)) {
    $nomeArquivo = md5(time().rand(0, 1000)).'.jpg';
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/'.$nomeArquivo);

    echo 'Arquivo anexado';
} else {
    echo 'Arquivo não permitido';
}

?>