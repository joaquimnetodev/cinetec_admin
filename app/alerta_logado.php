<?php
    include('./protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>PAINEL :: CINETEC</title>
</head>
<body>
    <p><?php echo $_SESSION['nome']; ?>, você já está logado.</p>
    <p>Caso queira entrar com outro usuário, saia e faça o login novamente</p>
    <p><a href="/painel.php">  Voltar para o painel</a></p>
    <p><a href="/app/logout.php">SAIR</a></p>
</body>
</html>