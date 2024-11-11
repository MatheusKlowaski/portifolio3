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
    <title>Home</title>
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
                    <li>Olá,<?php echo $_SESSION['nome'] ?></li>
                    <li><a href="logout.php">Deslogar</a></li>
                </ul>
        </div>
    </nav>
    <div class="form-container">

        <p class="teste">Olá! Aqui é o seu radialista de plantão, pronto para dar voz ao seu projeto! Escreva aqui o tipo de trabalho que você gostaria que eu executasse. Seja uma locução animada, uma mensagem institucional ou uma narração especial, estou à disposição para tornar suas ideias realidade. Vamos juntos criar algo incrível!</p>
        
        <form action="msg.php" method="post" id="contact-form">
    
            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" placeholder="Escreva sua mensagem..." required></textarea>
    
            <button type="submit">ENVIAR</button>
        </form>
    </div>
</body>
</html>