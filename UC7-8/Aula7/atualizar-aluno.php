<?php

include_once("conexao.php");

$id = $_POST["cod_aluno"];
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$dataNasc = $_POST["data-nasc"];

$query = "UPDATE tbl_alunos SET nome = '$nome', sobrenome = '$sobrenome', data_nasc = '$dataNasc' WHERE cod_aluno = $id";
$atualizar = mysqli_query($conexao, $query);

if($atualizar){
    echo"Dados do aluno atualizados com sucesso, <a href='listar-aluno.php'><i class='fa-solid fa-left-long'></i></a>";
}else{
    echo"Erro ao atualizar dados do aluno, <a href='listar-aluno.php'><i class='fa-solid fa-left-long'></i></a>";
}