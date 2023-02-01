<?php

include_once("conexao.php");

if($_GET["id"]){
    $id_aluno = $_GET["id"];

    $query = "DELETE FROM tbl_alunos WHERE cod_aluno = $id_aluno";
    $excluir = mysqli_query($conexao, $query);

    if($excluir){
        echo "Aluno excluido com sucesso.";
    }else{
        echo "Erro ao excluir aluno.";
    }
}else{
    echo"Por afvor informe um RA para exclusão.";
}