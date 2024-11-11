<?php
include "BD_connect.php";

$query = "select id,nome,sobrenome,usuario,telefone,email,cidade,nivel,texto from estudo";
$susers = mysqli_query($con,$query);

?>