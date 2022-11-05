<?php
    if(!isset($_SESSION)) {
        session_start();

    }

    if(!isset($_SESSION['id'])) {
        die("Você precisa estar logado para acessar esta página.<br>
             Caso o erro persista, contate o administrador<br>
             <a href=\"/index.php\">Entrar</a>");
    }
?>


