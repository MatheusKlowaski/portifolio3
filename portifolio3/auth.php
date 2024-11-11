<?php
session_start();
include 'BD_connect.php';

$user = $_POST['usuario'];
$senha = $_POST['senha'];

$query = "Select * from estudo where usuario = '$user'";


$connect = mysqli_query($con,$query);

$row = mysqli_fetch_assoc($connect);
$userr = $row['usuario'];
$senhar = $row['password'];
$nivel = $row['nivel'];
$contato = $row['email'];
$_SESSION['id'] = $row['id'];
$_SESSION['nome'] = $row['nome'];

if($contato == ''){
    $contato = 'Incompleto';
}else{
    $contato = 'Completo';
}

if($userr !== $user){
    header("location:login.php?user=true");
    exit;
}elseif($senhar !== $senha){
    header("location:login.php?pass=true");
    exit;
}
if($nivel == 'u'){
    $nivel = 'Usuario';
}elseif($nivel == 'a'){
    $nivel = 'Administrador';
}

if($user == $userr && $senha == $senhar && $nivel == 'Administrador'){
    $_SESSION['usuario'] = $user;
    header("location:homeadm.php");
}elseif($user == $userr && $senha == $senhar && $nivel == 'Usuario' && $contato == 'Completo'){
    $_SESSION['usuario'] = $user;
    header("location:home.php");
}elseif($user == $userr && $senha == $senhar && $nivel == 'Usuario' && $contato == 'Incompleto'){
    $_SESSION['usuario'] = $user;
    header("location:homein.php");
}

?>