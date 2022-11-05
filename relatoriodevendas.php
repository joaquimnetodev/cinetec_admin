<?php
include('./app/protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>..:: CINETEC : RELATÓRIO ::..</title>
    <link rel="stylesheet" type="text/css" href="./css/relatoriodevendas.css" />
    <script type="text/javascript" src="./js/relatoriodevendas.js"></script>
</head>

<body>
    <nav class="painel-lateral">
        <img class="menulogo" src="./img/logo.png">
        <?php include('cartao_usuario.php'); ?>
        <?php include('itens_menu_lateral.php'); ?>
    </nav>
    <section class="conteudo">
        <div class="relatorio">
            <h1>..:: RELATÓRIO DE VENDA DIÁRIA ::..</h1>
            <nav class="nav_tabs">
                <div class="tabs">
                    <a href="javascript:mostrarconteudo1()" id="abageral">Geral</a>
                    <a href="javascript:mostrarconteudo2()" id="abaitens">Item mais vendido</a>
                    <a href="javascript:mostrarconteudo3()" id="abafilmes">Filme mais assistido</a>
                </div>
                <div class="content">
                    <div id="content1">
                        <p>Selecione a data desejada:</p>
                        <p><input type="date"><button>Consultar</button>
                        <table>
                            <tr>
                                <td class="titulolinha">Venda total</td>
                                <td>50.000,00</td>
                            </tr>
                            <tr>
                                <td class="titulolinha">Total de atendimentos</td>
                                <td>125</td>
                            </tr>
                            <tr>
                                <td class="titulolinha">Venda média</td>
                                <td>90,00</td>
                            </tr>
                        </table>
                    </div>
                    <div id="content2">
                        <p>Itens mais vendidos</p>
                        <table class="maisvendidos">
                            <tr>
                                <td class="titulocoluna" >Código</td>
                                <td class="titulocoluna">Descrição</td>
                                <td class="titulocoluna">Quantidade</td>
                            </tr>
                            <tr>
                                <td>523</td>
                                <td>Coca-cola 350 mL sdfafadsfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfsadf</td>
                                <td>35</td>
                            </tr>
                            <tr>
                                <td>589</td>
                                <td>Pipoca Grande</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td>487</td>
                                <td>Pipoca pequena</td>
                                <td>25</td>
                            </tr>
                            <tr>
                                <td>488</td>
                                <td>Pipoca média</td>
                                <td>20</td>
                            </tr>
                        </table>
                    </div>
                    <div id="content3">
                        <p>Filmes mais assistidos</p>
                        <table>
                            <tr>
                                <td class="titulocoluna">Código</td>
                                <td class="titulocoluna">Descrição</td>
                                <td class="titulocoluna">Quantidade</td>
                            </tr>
                            <tr>
                                <td>523</td>
                                <td>Batman</td>
                                <td>35</td>
                            </tr>
                            <tr>
                                <td>589</td>
                                <td>Spider-man</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td>487</td>
                                <td>Curinga</td>
                                <td>25</td>
                            </tr>
                            <tr>
                                <td>488</td>
                                <td>Pipoca média</td>
                                <td>20</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </nav>
        </div>
    </section>
</body>

</html>