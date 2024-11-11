<?php
include "BD_connect.php";
session_start();
if(!isset($_SESSION['usuario'])){
    header('location:login.php?login=true');
    exit;
}


$mensagem = $_POST['mensagem'];
$id = $_SESSION['id'];

$query = "update estudo set texto = '$mensagem' where id = $id";

try {
    mysqli_query($con,$query);
}   catch (exeption $e) {
    echo "deu ruim";
}finally{
    header("location:hometks.php");
}

   
        
      

?>