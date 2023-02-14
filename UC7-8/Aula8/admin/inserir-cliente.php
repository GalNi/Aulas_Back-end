<?php

include_once("../config/conexao.php");

$nome_doc = $_POST["doc-nome"];
$sobrenome_doc = $_POST["doc-sobrenome"];
$data_doc = $_POST["doc-data"];
$genero_doc = $_POST["doc-genero"];
$news_doc = $_POST["doc-news"];

$query = "INSERT INTO tbl_clientes(`nome`, `sobrenome`, `data_nasc`, `id_genero`, `newsletter`, `id_situacao`) VALUES('$nome_doc', '$sobrenome_doc', '$data_doc', '$genero_doc', '$news_doc', 1)";
$inserir_categoria = mysqli_query($conexao, $query);

if($inserir_categoria){
    header("Location: gestao-documentos.php?msg=sucessocad");
    //echo"<i class='fa-solid fa-arrow-left'></i> Cadastro efetuado com sucesso <a href='cadastra-categoria.php'></a>";
}else{
    header("Location: gestao-documentos.php?msg=errocad");
    //echo"<i class='fa-solid fa-arrow-left'></i> Erro ao cadastrar categoria <a href='cadastra-categoria.php'></a>";
}
?>
<script src='https://kit.fontawesome.com/a342c01441.js' crossorigin='anonymous'></script>