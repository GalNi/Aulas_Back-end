<?php

include_once("config/conexao.php");

if($_POST){

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $dataNasc = $_POST["data-nasc"];
    $genero = $_POST["genero"];
    $newsletter = $_POST["newsletter"];
    $assina_boletim = 0;
    
    if($newsletter){
        $assina_boletim = 1;
    }
    //CRIAÇÃO DA RASH - data + nome + sobrenome
    $token_cliente = sha1(md5(date('d/m/y').$nome.$sobrenome));

    $query = "INSERT INTO tbl_clientes(nome, sobrenome, data_nasc, id_genero, newsletter, id_situacao, `hash`) VALUES('$nome', '$sobrenome', '$dataNasc', '$genero', '$newsletter', 1, '$token_cliente')";

    $inserir = mysqli_query($conexao, $query);

    if($inserir){

        header('Location: completar-cadastro.php?client='.$token_cliente);
    }else{
        header("Location: cadastro.php");
    }


}else{
    header("Location: cadastro.php");
}