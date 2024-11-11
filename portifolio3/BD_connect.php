<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "devweb";

try{
    $con = mysqli_connect($host, $user, $password, $database);
}catch (Exception $i) {
    print "Erro ao se conectar ao banco de dados!!";
    error_log($i,0);
    session_destroy();
    header("location:login.php?errorbd=true");
}

?>