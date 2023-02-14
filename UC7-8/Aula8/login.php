<?php include_once("config/conexao.php");?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Login</title>
    <link rel="stylesheet" href="assets/css.css">
</head>
    
<body>
<div class="container">
    <form action="validar-usuario.php" method="post">
        <input type="text" name="usuario" id="" placeholder="Usuário">
        <input type="password" name="senha" id="" placeholder="Senha">
        <button>Acessar</button>
    </form>
<a href="cadastro.php">Cadastre-se</a>
    </div>
    </body>
    </html>