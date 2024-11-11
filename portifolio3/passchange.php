<?php
session_start();
include "bd_connect.php";

$id = $_SESSION['id'];

$senha = $_POST['senhaatual'];
$senhan = $_POST['senhanova'];
$senhan2 = $_POST['senhanovar'];

if($senhan !== $senhan2){
    header("location:mudarsenha.php?erron=true");
    exit;
}

$query = "select password from estudo where id = '$id'";

try{
    $userpass = mysqli_query($con,$query);
    $consulta = mysqli_fetch_assoc($userpass);
}catch (Exception $i){
    error_log($i);
}
$retorno = $consulta['password'];

if($retorno !== $senha){
    header("location:mudarsenha.php?pass=true");
    exit;
}else{
    $query2 = "update estudo set password = '$senhan2' where id = '$id'";
    try{
        mysqli_query($con,$query2);
    }catch (Exception $i){
        error_log($i);
    }finally{
        header("location:mudarsenha.php?ok=true");
    }

}





?>