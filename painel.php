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
        <?php include('cartao_usuario.php'); ?>
        <?php include('itens_menu_lateral.php'); ?>
    </nav>
    <section class="conteudo">
        <p>CONTEÚDO</p>
    </section>
</body>

</html>