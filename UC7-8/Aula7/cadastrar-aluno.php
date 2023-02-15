<?php

include_once("conexao.php");

$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$dataNasc = $_POST["data-nasc"];
$genero = $_POST["genero"];

if($nome != "" && $sobrenome != "" && $dataNasc != "" && $genero != ""){

    $query = "INSERT INTO tbl_alunos(`nome`, `sobrenome`, `data_nasc`, `genero`, `situacao`) VALUES('$nome', '$sobrenome', '$dataNasc', '$genero', 'A')";

    $inserir = mysqli_query($conexao, $query);

    
if($inserir){
    echo"Cadastro efetuado com sucesso";
} else{
    echo"Inserir Infromações para o banco";
}
}

