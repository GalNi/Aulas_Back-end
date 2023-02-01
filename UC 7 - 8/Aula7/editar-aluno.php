<?php include_once("conexao.php"); @$id = $_GET["id"];?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar dados do aluno</title>
</head>
<style>
  *{
    padding: 0;
    margin: 0;
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
<div class="container">
    <?php
    $query = "SELECT nome, sobrenome, data_nasc FROM tbl_alunos WHERE cod_aluno = $id";
    $rs_aluno = mysqli_query($conexao, $query);
    $dados_aluno = mysqli_fetch_all($rs_aluno, MYSQLI_ASSOC);
    
    ?>
  <form action="" method="POST">
    <input type="text" name="nome" id="" value="<?=$dados_aluno[0]["nome"]?>">
    <input type="text" name="sobrenome" id="" value="<?=$dados_aluno[0]["sobrenome"]?>">
    <input type="date" name="data-nasc" id="" value="<?=$dados_aluno[0]["data_nasc"]?>">
    <input type="submit" Value="Atualizar" id="">
  </form>
</div>
</body>
</html>