<?php
include_once("../config/conexao.php");

if($_POST){
    $id = $_POST["id"];
    $docs = $_POST["id_tipo_docs"];

    $query = "UPDATE tbl_tipo_docs SET id_tipo_docs = '$docs' WHERE id = '$id'";
    $gravar = mysqli_query($conexao, $query);
    if($gravar){
        header("Location: gestao-documentos.php");
    }else{

    }
}else{
    header("Location: gestao-documentos.php");
}