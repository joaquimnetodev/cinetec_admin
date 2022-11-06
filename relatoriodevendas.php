<?php
include('./app/protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>..:: CINETEC : RELATÓRIO ::..</title>
    <link rel="stylesheet" type="text/css" href="./css/relatorio_de_vendas.css" />
    <script type="text/javascript" src="./js/abas.js"></script>
</head>

<body>
    <nav class="painel-lateral">
        <img class="menulogo" src="./img/logo.png">
        <?php include('cartao_usuario.php'); ?>
        <?php include('itens_menu_lateral.php'); ?>
    </nav>
    <div class="conteudo">
        <h1>..:: RELATÓRIO DE VENDAS ::..</h1>
        <div class="relatorio">
            <nav class="nav_tabs">
                <div class="tabs">
                    <a href="javascript:mostrarconteudo1()" id="aba1">Geral</a>
                    <a href="javascript:mostrarconteudo2()" id="aba2">Item mais vendido</a>
                    <a href="javascript:mostrarconteudo3()" id="aba3">Filme mais assistido</a>
                </div>
            </nav>
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
                <div id="content2"> <!-- Itens mais vendidos -->
                    <table class="maisvendidos">
                        <tr>
                            <td class="titulocoluna">Código</td>
                            <td class="titulocoluna">Descrição</td>
                            <td class="titulocoluna">Quantidade</td>
                        </tr>
                        <tr>
                            <td>523</td>
                            <td>Coca-cola 350 mL</td>
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
                <div id="content3"> <!-- Filmes mais assistidos -->                    
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
        </div>
</body>

</html>