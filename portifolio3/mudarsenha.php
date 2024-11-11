<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header('location:login.php?login=true');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Alterar senha</title>
</head>
<body>
    <nav>
        <div class="navbar">
            <img src="imagens/caricaturamarcossoares.jpg" alt="Logo" class="navbar-logo">
                <ul class="nav-list">
                    <li><a href="index1.html">Home</a></li>
                    <li><a href="https://www.instagram.com/marcossoaressg/?igsh=Ynk2Z2htZG03cm42" target="_blank">Social</a></li>
                    <li><a href="index3.html">Projetos</a></li>
                    <?php echo "<li><a href=home.php>Painel</a></li>" ?>
                    <li>Olá,<?php echo $_SESSION['nome'] ?></li>
                    <li><a href="logout.php">Deslogar</a></li>
                </ul>
        </div>
    </nav>
    <div class="form-container">

        <h2>Mude sua senha</h2>
        
        <form action="passchange.php" method="post" id="contact-form">

            <label for="senhaatual">Senha atual:</label>
            <input type="password" name="senhaatual" placeholder="Senha atual" required class="caixas">
            
            <label for="senhanova">Nova senha:</label>
            <input type="password" name="senhanova" placeholder="Nova senha" required class="caixas">
            
            <label for="senhanovar">Repetir nova senha:</label>
            <input type="password" name="senhanovar" placeholder="Repetir nova senha" required class="caixas">
            <?php
            if(isset($_GET['ok'])){
                echo "Senha alterada com sucesso!";
            }
            if(isset($_GET['erron'])){
                echo "Nova senha não confere!";
            }
            if(isset($_GET['pass'])){
                echo "Senha atual invalida!";
            }
            ?>
            <div><br></div>
            <button type="submit">ALTERAR SENHA</button>
        </form>
    </div>
    
</body>
</html>