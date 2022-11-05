<?php
    include('./app/protect_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/index.css">
    <title>LOGIN :: CINETEC</title>
</head>
<body>
    <section class="area-login">
        <div class="login">
            <div>
                <img src="/img/logo.png">
            </div>
            <form method="POST" action="/app/login.php">
                <input type="text" name="usuario" placeholder="Usuário" autofocus required> 
                <input type="password" name="senha" placeholder="Senha" required>
                <input type="submit" value="Entrar">
            </form>
            <p>Não é um usuário? <a href="./cadastrar_usuario.php">Criar conta</a></p>
        </div>
    </section>    
</body>
</html>

