<?php
include_once("../config/conexao.php");

if($_POST){
    $id = $_POST["id"];
    $genero = $_POST["troca-genero"];

    $query = "UPDATE tbl_generos SET genero = '$genero' WHERE id = '$id'";
    $gravar = mysqli_query($conexao, $query);
    if($gravar){
        header("Location: gestao-genero.php");
    }else{

    }
}else{
    header("Location: gestao-genero.php");
}