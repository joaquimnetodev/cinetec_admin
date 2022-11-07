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
                            <td id="geral-col1" class="titulolinha">Venda total</td>
                            <td id="geral-col2">50.000,00</td>
                        </tr>
                        <tr>
                            <td id ="geral-col1" class="titulolinha">Total de atendimentos</td>
                            <td id="geral-col2">125</td>
                        </tr>
                        <tr>
                            <td id="geral-col1" class="titulolinha">Venda média</td>
                            <td id="geral-col2">90,00</td>
                        </tr>
                    </table>
                </div>
                <div id="content2"> <!-- Itens mais vendidos -->
                    <table class="maisvendidos">
                        <tr>
                            <td id="item-col1" class="titulocoluna">Código</td>
                            <td id="item-col2" class="titulocoluna">Descrição</td>
                            <td id="item-col3" class="titulocoluna">Quantidade</td>
                        </tr>
                        <tr>
                            <td id="item-col1">523</td>
                            <td id="item-col2">Coca-cola 350 mL</td>
                            <td id="item-col3">35</td>
                        </tr>
                        <tr>
                            <td id="item-col1">589</td>
                            <td id="item-col2">Pipoca Grande</td>
                            <td id="item-col3">30</td>
                        </tr>
                        <tr>
                            <td id="item-col1">487</td>
                            <td id="item-col2">Pipoca pequena</td>
                            <td id="item-col3">25</td>
                        </tr>
                        <tr>
                            <td id="item-col1">488</td>
                            <td id="item-col2">Pipoca média</td>
                            <td id="item-col3">20</td>
                        </tr>
                    </table>
                </div>
                <div id="content3"> <!-- Filmes mais assistidos -->                    
                    <table>
                        <tr>
                            <td id="filme-col1" class="titulocoluna">Código</td>
                            <td id="filme-col2" class="titulocoluna">Descrição</td>
                            <td id="filme-col3" class="titulocoluna">Quantidade</td>
                        </tr>
                        <tr>
                            <td id="filme-col1">523</td>
                            <td id="filme-col2">Batman</td>
                            <td id="filme-col3">35</td>
                        </tr>
                        <tr>
                            <td id="filme-col1">589</td>
                            <td id="filme-col2">Spider-man</td>
                            <td id="filme-col3">30</td>
                        </tr>
                        <tr>
                            <td id="filme-col1">487</td>
                            <td id="filme-col2">Curinga</td>
                            <td id="filme-col3">25</td>
                        </tr>
                        <tr>
                            <td id="filme-col1">488</td>
                            <td id="filme-col2">Pipoca média</td>
                            <td id="filme-col3">20</td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
</body>

</html>