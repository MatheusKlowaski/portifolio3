<?php
include "bd_connect.php";
session_start();
if(!isset($_SESSION['usuario'])){
    header('location:login.php?login=true');
    exit;
}
$id = $_GET['id'];
$query = "select texto,Nome from estudo where id = '$id'";
try{
    $textouser = mysqli_query($con,$query);
    $consulta = mysqli_fetch_assoc($textouser);
}catch (Exception $i){
    error_log($i);
}
$texto = $consulta["texto"];
$nome = $consulta["Nome"];
if($texto == ""){
    header("location:homeadm.php?msg=true");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Mensagem</title>
</head>
<body>
    <nav>
        <div class="navbar">
            <img src="imagens/caricaturamarcossoares.jpg" alt="Logo" class="navbar-logo">
                <ul class="nav-list">
                    <li><a href="index1.html">Home</a></li>
                    <li><a href="https://www.instagram.com/marcossoaressg/?igsh=Ynk2Z2htZG03cm42" target="_blank">Social</a></li>
                    <li><a href="index3.html">Projetos</a></li>
                    <?php echo "<li><a href=mudarsenha.php?id=".$_SESSION['id'].">Alterar senha</a></li>" ?>
                    <li>Olá, <?php echo $_SESSION['nome'] ?></li>
                    <li><a href="logout.php">Deslogar</a></li>
                </ul>
        </div>
    </nav>
    <div class="form-container">

        <h2>Mensagem de <?php echo "$nome" ?></h2>
            <div class="areamsg"><?php echo "$texto" ?></div>
            <form action="homeadm.php" method="post" id="contact-form">

            
    
    
    
    <button input type="submit">Voltar</button><br>
    
</body>
</html>