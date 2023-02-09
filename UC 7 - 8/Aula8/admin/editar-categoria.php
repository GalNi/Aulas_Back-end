<?php
include_once("../config/conexao.php");

if($_POST){
    $id = $_POST["id"];
    $nome = $_POST["nome-categoria"];
    $img = $_POST["img"];
    $slug = $_POST["slug"];
    $query = "UPDATE tbl_categorias SET nome = '$nome', img = '$img', slug = '$slug' WHERE id = '$id'";
    $gravar = mysqli_query($conexao, $query);
    if($gravar){
        header("Location: gestao-categoria.php");
    }else{

    }
}else{
    header("Location: gestao-categoria.php");
}