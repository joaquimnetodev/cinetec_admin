<?php
echo
        '<div class="cartao-usuario">
        <img src="./img/user/semfoto.jpg">
        <p>Seja bem-vindo<br>';

echo $_SESSION['nome'];
echo '</p>';
echo
    '<p>Usuário: '; 
echo $_SESSION['usuario'];
echo 
    '</p>
    <a href="editarcadastro.php">Editar cadastro</a><br>
    <a href="./app/logout.php">Sair</a><br>
    </div>';
?>