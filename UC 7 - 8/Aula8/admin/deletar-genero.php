<?php

include_once("../config/conexao.php");

if($_GET){
    $id = $_GET["id"];
    $query = "DELETE FROM tbl_generos WHERE id = $id";
    $deletar = mysqli_query($conexao, $query);
    if($deletar){
        header("Location: gestao-genero.php?msg=sucessodel");
    }
}else{

}