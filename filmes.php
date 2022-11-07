<?php
include('./app/protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>..:: CINETEC : RELATÓRIO ::..</title>
    <link rel="stylesheet" type="text/css" href="./css/filmes.css" />
    <script type="text/javascript" src="./js/abas.js"></script>
</head>

<body>
    <nav class="painel-lateral">
        <?php include('cartao_usuario.php'); ?>
        <?php include('itens_menu_lateral.php'); ?>
    </nav>
    <div class="conteudo">
        <div class="filmes">
            <div class="abas">
                <a href="javascript:mostrarconteudo1()" id="aba1">Novo filme</a>
                <a href="javascript:mostrarconteudo2()" id="aba2">Filme existente</a>
                <a href="javascript:mostrarconteudo3()" id="aba3">Categoria</a>
            </div>
            <div class="content">
                <div id="content1">
                    <!-- NOVO FILME -->
                    <form class="novofilme">
                        <div class="nome-sinopse">
                            <input id="nomedofilme" type="text" placeholder="Nome do filme">
                            <textarea id="sinopsedofilme" cols="30" rows="5" placeholder="Sinopse"></textarea>
                        </div>
                        <div class="categoria-audio-faixaetaria">
                            <select id="categoria" placeholder="Categoria do filme">
                                <option>Categoria Filme</option>
                                <option>Drama</option>
                            </select>
                            <select id="audio" name="Áudio">
                                <option>Áudio do filme</option>
                                <option>Dublado</option>
                                <option>Legendado</option>
                            </select>
                            <select id="faixaetaria">
                                <option>Faixa Etária</option>
                                <option>Livre</option>
                                <option>12</option>
                                <option>14</option>
                                <option>16</option>
                                <option>18</option>
                            </select>
                        </div>
                        <div id="duracao">
                            <input type="number" placeholder="Duração (em minutos)">
                        </div>
                        <div class="elenco">
                            <input type="text" placeholder="Diretor Principal">
                            <input type="text" placeholder="Ator Principal 1">
                            <input type="text" placeholder="Ator Principal 2">
                            <input type="text" placeholder="Ator Principal 3">
                        </div>
                        <div class="precos">
                            <input type="number" step=".01" placeholder="Preço Ingresso Inteira">
                            <input type="number" step=".01" placeholder="Preço Ingresso Meia">
                        </div>
                        <div class="capadofilme">
                            <label for="capadofilme">Capa do filme: </label><input id="capadofilme" type="file">
                        </div>
                        <div class="dados">
                            <button type="submit">Cadastrar</button>
                            <button>Limpar campos</button>
                        </div>
                    </form>
                </div>
                <div id="content2">

                </div>
                <div id="content3">

                </div>
            </div>
        </div>
    </div>
</body>

</html>