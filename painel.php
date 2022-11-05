<?php
include('./app/protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>..:: CINETEC : PAINEL ::..</title>
    <link rel="stylesheet" type="text/css" href="./css/painel.css" />
</head>

<body>
    <nav class="painel-lateral">
        <div class="cartao-usuario">
            <img src="./img/user/semfoto.jpg">
            <p>Seja bem-vindo<br>
                <?php echo $_SESSION['nome']; ?></p>
            <p>Usuário: <?php echo $_SESSION['usuario']; ?></p>
            <a href="editarcadastro.php">Editar cadastro</a><br>
            <a href="./app/logout.php">Sair</a><br>
        </div>
        <div class="rodape-painel-lateral">
            <ul class="menuslaterais">
                    <li><a href="">FILMES</a></li>
                    <li><a href="">SALAS</a></li>
                    <li><a href="">SESSÕES</a></li>
                    <li><a href="">POLTRONAS</a></li>
                    <li><a href="">PRODUTOS</a></li>
                    <li><a href="">CLIENTES</a></li>
                    <li><a href="">CARRINHOS</a></li>
                    <li><a href="">NEWSLETTERS</a></li>
            </ul>
        </div>
    </nav>
    <section class="conteudo">
        <img class="logo" src="./img/logo.png">
    </section>
</body>

</html>