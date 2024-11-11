<?php
include "bd_connect.php";

$id = $_GET['id'];

$query = "delete from estudo where id = '$id'";
try{
    mysqli_query($con,$query);
}catch (Exption $i){
    error_log($i);
    session_destroy();
    header("location:login.php?errorbd=true");
}finally{
    header("location:homeadm.php?UserR=true");
}
?>