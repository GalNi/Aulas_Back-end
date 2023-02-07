<?php

include_once("config/conexao.php");

if($_POST){

    $id = $_POST['id_client'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];

    $queryDocs = "INSERT INTO tbl_docs(id_usuario, documento, id_tipo_documento) VALUES('$id', '$cpf', 1), ('$id', '$rg', 2)";

    $inserirDocs = mysqli_query($conexao, $queryDocs);
    if($inserirDocs){
        $queryEmail = "INSERT INTO tbl_contatos_emails(id_usuario, email) VALUES('$id', '$email')";
        $inserirEmail = mysqli_query($conexao, $queryEmail);
        if($inserirEmail){
            $queryTelefone = "INSERT INTO tbl_contatos(id_usuario, numero) VALUES('$id', '$celular')";
            $inserirTelefone = mysqli_query($conexao, $queryTelefone);
            if($inserirTelefone){
                header("Location: index.php");
            }else{
                header("location: completar-cadastro.php?client=".$id);
            }
        }else{
            header("location: completar-cadastro.php?client=".$id);
        }
}else{
    header("Location: cadastro.php");
}
}