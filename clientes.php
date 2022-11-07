<?php
include('./app/protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>..:: CINETEC : RELATÓRIO ::..</title>
    <link rel="stylesheet" type="text/css" href="./css/clientes.css" />
    <script type="text/javascript" src="./js/abas_clientes.js"></script>
</head>

<body>
    <nav class="painel-lateral">
        <?php include('cartao_usuario.php'); ?>
        <?php include('itens_menu_lateral.php'); ?>
    </nav>
    <div class="conteudo">
        <div class="clientes">
            <nav class="nav_tabs">
                <div class="tabs">
                    <a href="javascript:mostrarconteudo1()" id="aba1">Novo cliente</a>
                    <a href="javascript:mostrarconteudo2()" id="aba2">Cliente existente</a>
                </div>
            </nav>
            <div class="content">
                <div id="content1">
                    <!-- NOVO CLIENTE -->
                    <form class="novocliente">
                        <p>
                            <input type="text" placeholder="nome">
                            <input type="text" placeholder="sobrenome">
                        </p>
                        <p>
                            <input type="text" placeholder="CPF (somente números)">
                            <input type="text" placeholder="E-mail">
                        </p>
                        <p>
                            <input type="text" placeholder="DDD sem o zero">
                            <input type="text" placeholder="Celular (somente números)">
                        </p>
                        <p>
                            <input type="password" placeholder="Digite sua senha">
                            <input type="password" placeholder="Confirme sua senha">
                        </p>
                        <p id="f
                        Fotoperfil">
                            Foto:
                            <input type="file">
                        </p>
                        <p class="botoesformulario">
                            <button type="submit">Cadastrar</button>
                            <button>Limpar campos</button>
                        </p>
                    </form>
                </div>

                <div id="content2">
                    <form class="clienteexistente">
                        <p class="busca">
                            <input type="text" placeholder="busca">
                            <button>Buscar</button>
                        </p>
                        <p>
                            <select id="listaclientes" multiple>
                                <option>Fulano da Silva</option>
                                <option>Fulano de Tal</option>
                                <option>Fulano do Ciclano</option>
                                <option>Alfredo Godofredo</option>
                                <option>Godofredo Alfredo</option>
                                <option>Tayna Goes de Sousa</option>
                                <option>Mirela Regina dos Santos</option>
                                <option>Gabriel Gennari da Silva Marjoto</option>
                            </select>
                        </p>
                        <p></p>
                        </p>
                        <p>
                            <input type="text" placeholder="nome">
                            <input type="text" placeholder="sobrenome">
                        </p>
                        <p>
                            <input type="text" placeholder="CPF (somente números)">
                            <input type="text" placeholder="E-mail">
                        </p>
                        <p>
                            <input type="text" placeholder="DDD sem o zero">
                            <input type="text" placeholder="Celular (somente números)">
                        </p>
                        <p>
                            <input type="password" placeholder="Digite sua senha">
                            <input type="password" placeholder="Confirme sua senha">
                        </p>
                        <p id="f
                        Fotoperfil">
                            Foto:
                            <input type="file">
                        </p>
                        <p class="cadastroativo">
                            <input type="radio" name="ativo" value="1" checked /> Ativo
                            <input type="radio" name="ativo" value="0"> Inativo
                        </p>
                        <p class="botoesformulario">
                            <button>Editar</button>
                            <button>Cancelar</button>
                            <button type="submit">Salvar alterações</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>