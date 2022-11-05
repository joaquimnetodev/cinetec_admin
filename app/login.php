<?php
    include('conexao.php');

if(isset($_POST['usuario']) || isset($_POST['senha'])) {
    if(strlen($_POST['usuario']) == 0) {
        echo "<script type='text/javascript'>
        alert('Preencha seu nome de usuario');
        document.getElementByName('usuario').focus();
        </script>";
    } else if(strlen($_POST['senha']) == 0) {
        echo "<script type='text/javascript'>
        alert('Preencha sua senha');
        document.getElementByName('usuario').focus();
        </script>";        
    } else {
        $usuario = $mysqli->real_escape_string($_POST['usuario']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
    
        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['usuario'] = $usuario['usuario'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['foto'] = $usuario['foto'];

            header("Location: /painel.php");
        } else {
            echo "<p>Usuário e/ou senha incorretos. Caso o erro persista, entre em contato com o admistrador</p>";
            echo "<p><a href='/index.php'>Voltar para login</a></p>";
        }
    }
}
?>