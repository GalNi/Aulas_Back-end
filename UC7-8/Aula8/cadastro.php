<?php include_once("config/conexao.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market</title>
    <link rel="stylesheet" href="assets/css.css">
</head>
   
<body>
<div class="container">
<form action="inserir-cliente.php" method="POST">
<input type="text" name="nome" placeholder="Nome">
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
<label for="">Deseja receber as newsletter?</label>
<input type="checkbox" name="newsletter" placeholder="">
<input type="numero" name="numero" id="" placeholder="(00) 0 0000-0000">
<input type="text" name="email" id="" placeholder="Email">
<button>cadastrar</button>
</form>
</div>
<script src='https://kit.fontawesome.com/a342c01441.js' crossorigin='anonymous'></script>
</body>

</html>