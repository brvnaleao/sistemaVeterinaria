<?php


$mysqli = new mysqli('localhost', 'root', '', 'caomania') or die(mysqli_error($mysqli));

if(isset($_POST['save'])){
    
    $nome = $_POST['nome'];
    $cachorro = $_POST['cachorro'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $endereco = $_POST['endereco'];

    $mysqli->query("INSERT INTO vet(nome, cachorro, email, tel, endereco) VALUES('$nome', '$cachorro', '$email', '$tel', '$endereco')") or die($mysqli->error);

    $_SESSION['message'] = "Dado foi salvo!";
    $_SESSION['msg_type']= "success";

    header('location:index.php');

} 

if(isset($_POST['save2'])){
    
    $nome_pessoa = $_POST['nomepessoa'];
    $email_mensagem = $_POST['emailmsg'];
    $mensagem = $_POST['mensagem'];

    $mysqli->query("INSERT INTO mensagem(nomepessoa, emailmsg, mensagem) VALUES('$nome_pessoa', '$email_mensagem', '$mensagem')") or die($mysqli->error);

    $_SESSION['message'] = "Dado foi salvo!";
    $_SESSION['msg_type']= "success";

    header('location:index.php');

} ?>
