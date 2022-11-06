<?php
include('./app/protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>..:: CINETEC : RELATÓRIO ::..</title>
    <link rel="stylesheet" type="text/css" href="./css/newsletters.css" />
</head>

<body>
    <nav class="painel-lateral">
        <img class="menulogo" src="./img/logo.png">
        <?php include('cartao_usuario.php'); ?>
        <?php include('itens_menu_lateral.php'); ?>
    </nav>
    <div class="conteudo">
        <h1>..:: NEWSLETTERS ::..</h1>
        <div class="newsletters">
            <div class="busca listagemnewsletters">
                <input type="text" placeholder="Pesquisar e-mail">
                <button>Buscar</button>
            </div>
            <div class="listagemnewsletters">
                <select id="listanews" multiple>
                    <option>fulano@gmail.com</option>
                    <option>fulano@gmail.com</option>
                    <option>fulano@gmail.com</option>
                    <option>fulano@gmail.com</option>
                    <option>fulano@gmail.com</option>
                    <option>fulano@gmail.com</option>
                    <option>fulano@gmail.com</option>
                </select>
                <div class="botoesnewsletters">
                    <button>Excluir</button>
                </div>
            </div>
            <div class="novanewsletter">
                <input type="text" id="novoemail" placeholder="fulano@email.com">
                <div id="botaoinserir">
                    <button>Inserir</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>