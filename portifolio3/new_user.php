<?php

include 'BD_connect.php';

$usuario = $_POST['usuario'];
$userver = "select * from estudo";

try{
    $usuarioex = mysqli_query($con,$userver);
    $consulta = mysqli_fetch_assoc($usuarioex);
}catch (Exception $i){
    error_log($i);
}
$retorno = $consulta['usuario'];
if($consulta['usuario'] == $usuario){
    header("location:cadastro.php?user=true");
}

$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

if ($password1 !== $password2){
    echo "senha errada";
    header("location:cadastro.php?pass=true");
}
$senha = $password1;

$query = "insert into estudo(usuario,password,nivel) values('$usuario', '$senha','u')";

try {
    mysqli_query($con,$query);
    
}catch (Exception $e){
    error_log($e);
    header("location:cadastro.php?erro=true");
}finally{
    header("location:login.php?cadastro=true");
}


?>


