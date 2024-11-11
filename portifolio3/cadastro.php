<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Cadastrar-se</title>
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
    <main>
        <div class="form-container">
            <h2>Cadastro</h2>
            <form action = "new_user.php" method="post" id="contact-form">
        
                <label for="usuario">Nome de usuário:</label>
                <input type="text" name="usuario" placeholder="Nome de usuário" required class="caixas">

                <label for="password1">Senha:</label>
                <input type="password" name="password1" placeholder="Digite sua senha" required class="caixas"> 

                <label for="password1">Senha:</label>
                <input type="password" name="password2" placeholder="Repita sua senha" required class="caixas">       
                
                <?php
                if(isset($_GET['pass'])){
                    echo "As senhas não coincidem!";
                }
                if(isset($_GET['user'])){
                    echo "Usuario ja possui cadastro!";
                }
                ?>
                <div>
                    <br>
                </div>
                <button input type="submit">CADASTRAR</button><br>
                
            </form>
        </div>
    </main>
    
</body>
</html>