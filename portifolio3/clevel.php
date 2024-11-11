<?php
include "bd_connect.php";

$nivel = $_GET['nivel'];
$id = $_GET['id'];

if($nivel == 'u'){
    $query = "update estudo set nivel = 'a' where id = '$id'";
}elseif($nivel == 'a'){
    $query = "update estudo set nivel = 'u' where id = '$id'";
}

try{
    mysqli_query($con,$query);
}catch (Exption $i){
    error_log($i);
    session_destroy();
    header("location:login.php?errorbd=true");
}finally{
    header("location:homeadm.php?userc=true");
}
?>