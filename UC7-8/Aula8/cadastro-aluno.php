<?php?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de aluno</title>
    <link rel="stylesheet" href="../assets/css.css">
</head>


<body>
  <div class="container">
    <form action="cadastrar-aluno.php" method="POST">
    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="sobrenome" placeholder="Sobrenome">
    <input type="date" name="data-nasc" placeholder="DD/MM/AAAA">
    <select name="genero">
      <option value="M">Masculino</option>
      <option value="F">Feminino</option>
    </select>
    <button>Cadastrar</button>
    </form>
  </div>
</body>
</html>

