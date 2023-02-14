<?php include_once("config/conexao.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Completar cadastro</title>
    <link rel="stylesheet" href="assets/css.css">
</head>
    
<body>
<form action="inserir-cliente-dados.php" method="POST">
<input type="text" name="cpf" placeholder="CPF">
<input type="text" name="rg" placeholder="RG">
<input type="text" name="email" placeholder="E-mail">
<input type="text" name="senha" placeholder="Senha">
<input type="text" name="celular" placeholder="Celular">
<input type="text" name="sobrenome" placeholder="Sobrenome">
<input type="date" name="data-nasc" placeholder="DD/MM/AAAA">
<select name="genero" id="">
<?php
    $query = "SELECT * FROM tbl_generos";
    $consulta_genero = mysqli_query($conexao, $query);
    $result = mysqli_fetch_all($consulta_genero, MYSQLI_ASSOC);

    foreach($result as $genero){
?>
<option value='<?=$genero["id"]?>'><?=$genero["genero"]?>
</option>
<?php
    }
?>
</select>
<button>cadastrar</button>
</form>

</body>
</html>