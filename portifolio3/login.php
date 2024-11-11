<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    
    <title>Login</title>
</head>
<body>

<nav>
    <div class="navbar">
        <img src="imagens/caricaturamarcossoares.jpg" alt="Logo" class="navbar-logo">
            <ul class="nav-list">
                <li><a href="index1.html">Home</a></li>
                <li><a href="https://www.instagram.com/marcossoaressg/?igsh=Ynk2Z2htZG03cm42" target="_blank">Social</a></li>
                <li><a href="index3.html">Projetos</a></li>
                <li><a href="index2.html">Contato</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
    </div>
</nav>

    <div class="form-container">
        <h2>Login</h2>
        <form action="auth.php" method="post" id="contact-form">
    
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" placeholder="Seu nome de usuario" required class="caixas">

            <label for="senha">Senha:</label>
            <input type="password" name="senha" placeholder="Sua senha" required class="caixas">
    
            <!--<label for="mensagem">Mensagem</label>
            <textarea id="mensagem" name="mensagem" placeholder="Escreva sua mensagem..." required></textarea>*/-->
            <?php
            if(isset($_GET['cadastro'])){
                echo "Conta cadastrada com sucesso!";
            }
            if(isset($_GET['user'])){
                echo "Usuario ou senha incorreto!";
            }
            if(isset($_GET['pass'])){
                echo "Usuario ou senha incorreto!";
            }
            if(isset($_GET['login'])){
                echo "Efetue o login!";
            }
            if(isset($_GET['errorbd'])){
                echo "Tente novamente mais tarde!";
            }
            ?>
            <div><br></div>
            <button input type="submit">LOGAR</button><br>
            
        </form>
        <form action="Cadastro.php">
            <button class="cadastrar" type="submit">CADASTRAR-SE</button>
        </form>
    </div>
</body>
</html>