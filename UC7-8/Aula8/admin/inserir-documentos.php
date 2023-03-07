<?php

include_once("../config/conexao.php");

$genero = $_POST["tipo-genero"];

$query = "INSERT INTO tbl_generos(`genero`) VALUES('$genero')";
$inserir_genero = mysqli_query($conexao, $query);

if($inserir_genero){
    header("Location: gestao-genero.php?msg=sucessocad");

}else{
    header("Location: gestao-genero.php?msg=errocad");

}
?>
<script src='https://kit.fontawesome.com/a342c01441.js' crossorigin='anonymous'></script>