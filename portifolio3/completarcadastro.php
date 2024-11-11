<?php
include "BD_connect.php";
session_start();

$id = $_SESSION['id'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cep = $_POST['cep'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$query = "update estudo set nome = '$nome', sobrenome = '$sobrenome', telefone = '$telefone', email = '$email', cep = '$cep', bairro = '$bairro', cidade = '$cidade', estado = '$estado' where id = $id";

mysqli_query($con,$query);

if(mysqli_connect_error()){
    session_destroy();
    header("location:login.php?regi=true");
    exit;
}else{
    header("location:home.php");
}
?>