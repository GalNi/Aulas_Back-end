<?php

include_once("../config/conexao.php");

$nome_categoria = $_POST["nome-categoria"];
$img_categoria = $_POST["img-categoria"];
$slug_categoria = $_POST["slug-categoria"];

$query = "INSERT INTO tbl_categorias(`nome`, `img`, `slug`, `id_situacao`) VALUES('$nome_categoria', '$img_categoria', '$slug_categoria', 1)";
$inserir_categoria = mysqli_query($conexao, $query);

if($inserir_categoria){
    header("Location: gestao-categoria.php?msg=sucessocad");
    //echo"<i class='fa-solid fa-arrow-left'></i> Cadastro efetuado com sucesso <a href='cadastra-categoria.php'></a>";
}else{
    header("Location: gestao-categoria.php?msg=errocad");
    //echo"<i class='fa-solid fa-arrow-left'></i> Erro ao cadastrar categoria <a href='cadastra-categoria.php'></a>";
}
?>
<script src='https://kit.fontawesome.com/a342c01441.js' crossorigin='anonymous'></script>