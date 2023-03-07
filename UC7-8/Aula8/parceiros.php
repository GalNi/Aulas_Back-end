<?php include_once("config/conexao.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Parceiros</title>
    <link rel="stylesheet" href="assets/css.css">
</head>
    
<body>
    <div class="container">
        <h3>Cadastro de parceiros</h3>
<form action="inserir-parceiro.php" method="POST">
<input type="text" name="razao-social" placeholder="Razão Social">
<input type="text" name="nome-fantasia" placeholder="Nome Fantasia">
<input type="text" name="cnpj" placeholder="CNPJ">
<input type="text" name="ie" placeholder="Inscrição Estadual">
<input type="text" name="im" placeholder="Inscrição Municipal">
<input type="text" name="email" placeholder="E-mail">
<input type="text" name="telefone" placeholder="(00) 00000-0000">
<input type="text" name="endereço" placeholder="Endereço">
<input type="text" name="cep" placeholder="CEP">
<input type="text" name="bairro" placeholder="Bairro">
<input type="text" name="cidade" placeholder="Cidade">
<input type="text" name="uf" placeholder="UF">
</select>
<button>cadastrar</button>
</form>
</div>
</body>
</html>