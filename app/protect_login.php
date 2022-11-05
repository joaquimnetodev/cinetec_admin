<?php
    if(!isset($_SESSION)) {
        session_start();
    }

    if(isset($_SESSION['id'])) {

        header("Location: /app/alerta_logado.php");
    }
?>