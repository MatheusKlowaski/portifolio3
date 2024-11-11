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
    <title>Cadastro</title>
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
                    <li>Olá, <?php echo $_SESSION['usuario'] ?></li>
                    <li><a href="logout.php">Deslogar</a></li>
                </ul>
        </div>
    </nav>
    <main>
        <div class="form-container">
            <h2>Continue seu cadastro</h2>
            <form action="completarcadastro.php" method="post" id="contact-form">
        
                
                <label for="nome">Nome:</label>
                <input type="text" class="caixas" name="nome" placeholder="Seu nome" required>
                
                <label for="Sobrenome">Sobrenome:</label>
                <input type="text" class="caixas" name="sobrenome" placeholder="Sobrenome" required>

                <label for="email">E-mail:</label>
                <input type="text" class="caixas" name="email" placeholder="Seu e-mail" required>

                <label for="telefone">Telefone:</label>
                <input type="number" class="caixas" name="telefone" placeholder="Seu Telefone" required>
                
                <label for="CEP">CEP:</label>
                <input type="number" class="caixas" name="cep" placeholder="CEP" required>
                
                <label for="Bairro">Bairro:</label>
                <input type="text" class="caixas" name="bairro" placeholder="Bairro" required>
                
                <label for="Cidade">Cidade:</label>
                <input type="text" class="caixas" name="cidade" placeholder="Cidade" required>
                
                <label for="estado">Estado:</label>
                <input type="text" class="caixas" name="estado" placeholder="Estado" required>

                <button input type="submit">TERMINAR CADASTRO</button>
            </form>
        </div>
    </main>
    
</body>
</html>