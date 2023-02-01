<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar aluno</title>
</head>
<style>
    #customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 80%;
    margin: 0 auto;
    text-align: center;
    }

  #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
  }

  #customers thead:nth-child(even){background-color: #f2f2f2;}

  #customers tr:hover {background-color: #ddd;}

  #customers thead {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
    text-align: center;
  }
</style>

<?php

include_once("conexao.php");

$consulta = mysqli_query($conexao, "SELECT * FROM tbl_alunos");

$dados_alunos = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

//var_dump($dados_alunos);

echo "<table id='customers'>
            <thead>
            <tr>
                <td>Código</td>
                <td>Nome</td>
                <td>Sobrenome</td>
                <td>Data Nasc.</td>
                <td>Gênero</td>
                <td>Situação</td>
                <td>Ações</td>
            </tr>
        </thead>";

foreach($dados_alunos as $aluno){
    //echo"<p>Nome do Aluno: ".$aluno["nome"]." ".$aluno["sobrenome"]."</p>";
    echo"<tbody>
            <tr>
                <td>".$aluno['cod_aluno']."</td>
                <td>".$aluno['nome']."</td>
                <td>".$aluno['sobrenome']."</td>
                <td>".$aluno['data_nasc']."</td>
                <td>".$aluno['genero']."</td>
                <td>A</td>
                <td><a href='editar-aluno.php?id=".$aluno["cod_aluno"]."'><i class='fa-solid fa-pen-to-square'></i></a> <a href='excluir-aluno.php?id=".$aluno["cod_aluno"]."'><i class='fa-solid fa-trash'></a></i></td>
            </tr>
        </tbody>";
}
echo"</table>
<script src='https://kit.fontawesome.com/a342c01441.js' crossorigin='anonymous'></script>
";
