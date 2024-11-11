<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header('location:login.php?login=true');
    exit;
}
include "show_users.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Admin</title>
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
    <div class="paineladm">
        <div >
            <?php
                echo "<table class=\"dados\">";
                echo "<tr>";
                echo    "<th>ID</th>
                        <th>Nome</th>
                        <th>Usuario</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>cidade</th>
                        <th>Mensagem</th>
                        <th>ADM</th>
                        <th>Mudar tipo</th>
                        <th>Apagar conta</th>
                        </tr>";
                    
                while($row = mysqli_fetch_assoc($susers)){
                    if($row['nivel'] == 'u'){
                        $tipo = 'Não';
                        $change = 'Dar ADM';
                    }else{
                        $tipo = 'Sim';
                        $change = 'Tirar ADM';
                    }
                    
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['nome']."</td>";
                    echo "<td>".$row['usuario']."</td>";
                    echo "<td>".$row['telefone']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['cidade']."</td>";
                    echo "<td><a href=msgread.php?id=".$row["id"].">Clique aki</a></td>";
                    echo "<td>".$tipo."</td>";
                    echo "<td><a href='clevel.php?id=".$row['id']."&nivel=".$row['nivel']."'>".$change."</a></td>";
                    echo "<td><a href='remove_user.php?id=".$row['id']."'>Remover</a></td>";
                    echo "</tr>";
                }
                echo "</table><br>";    
                if(isset($_GET['UserR'])){
                    echo "Usuario Removido!";
                }
                if(isset($_GET['userc'])){
                    echo "Tipo de acesso alterado!";
                }
                
                
            ?>      
        </div>
        
    </div>
</body>
</html>