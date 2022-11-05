<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/cadastrar_usuario.css">
    <title>LOGIN :: CINETEC</title>
</head>
<body>
    <section class="area-cadastro">
        <div class="cadastro">
            <div>
                <img src="/img/logo.png">
            </div>
            <form method="POST" action="/app/cadastrar_usuario.php">
                <input type="text" name="usuarioadmin" placeholder="Usuário do administrador" autofocus required>
                <input type="password" name="senhaadmin" placeholder="Senha do administrador" required>
                <input type="text" name="usuario" placeholder="Novo usuário" required> 
                <input type="password" name="senha" placeholder="Nova senha" required>
                <input type="text" name="nome" placeholder="Nome" required>
                <input type="text" name="sobrenome" placeholder="Sobrenome" required>
                <input type="email" name="email" placeholder="E-mail" required>
                <input type="text" name="DDD do celular" placeholder="DDD do celular" required>
                <input type="text" name="Número do celular" placeholder="Número do celular" required>
                <input type="text" name="cpf" placeholder="CPF" required>
                <input type="submit" value="Cadastrar">
            </form>
            <p><a href="./index.php">Voltar para login</a></p>
        </div>
    </section>    
</body>
</html>

