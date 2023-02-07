<?php include_once("config/conexao.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market</title>
</head>
    <style>
      *{
        padding: 0;
        margin: 0;
      }
      img{
        width: 250px;
        }

      input, select {
      display: flex;
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      border: none;
      border-bottom: 2px solid green;
      }

      input[type=submit] {
        margin: 0 auto;
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      border: none;
      border-bottom: 2px solid green;
      }

      input[type=submit]:hover {
      background-color: #45a049;
      }

      div {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
      }
      button{
      background-color: #04AA6D;
      border-radius: 30px;
      color: white;
      padding: 16px 32px;
      text-decoration: none;
      margin: 4px 2px;
      cursor: pointer;
      justify-content: center;
      }
      .container{
        width: 60%;
        margin: 0 auto;
      }

    </style>
<body>
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

<input type="checkbox" name="newsletter" placeholder="Deseja receber as newsletter?">
<input type="numero" name="numero" id="" placeholder="(00) 0 0000-0000">
<input type="text" name="email" id="" placeholder="Email">
<button>cadastrar</button>
</form>
<script src='https://kit.fontawesome.com/a342c01441.js' crossorigin='anonymous'></script>
</body>

</html>