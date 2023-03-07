<?php

include_once("../config/conexao.php");

$docs = $_POST["tipo-docs"];

$query = "INSERT INTO tbl_tipo_docs(`id_tipo_docs`) VALUES('$docs')";
$inserir_docs = mysqli_query($conexao, $query);

if($inserir_docs){
    header("Location: gestao-documentos.php?msg=sucessocad");

}else{
    header("Location: gestao-documentos.php?msg=errocad");

}
?>
<script src='https://kit.fontawesome.com/a342c01441.js' crossorigin='anonymous'></script>