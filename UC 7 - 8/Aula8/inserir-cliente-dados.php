<?php

include_once("config/conexao.php");

if($_POST){

    $id = $_POST['id_client'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $senha = $_POST['senha'];

    $queryDocs = "INSERT INTO tbl_docs(id_usuario, documento, id_tipo_documento) VALUES('$id', '$cpf', 1), ('$id', '$rg', 2)";
    $queryUsuario = "INSERT INTO tbl_acessos(usuario, senha, id_situacao, id_acesso) VALUES('$email', '$senha', 1, 0)";

    $inserirDocs = mysqli_query($conexao, $queryDocs);
    $inserirUsuario = mysqli_query($conexao, $queryUsuario);

    if($inserirDocs && $inserirUsuario){
        $queryEmail = "INSERT INTO tbl_contatos_emails(id_usuario, email) VALUES('$id', '$email')";
        $inserirEmail = mysqli_query($conexao, $queryEmail);
        if($inserirEmail){
            $queryTelefone = "INSERT INTO tbl_contatos(id_usuario, numero) VALUES('$id', '$celular')";
            $inserirTelefone = mysqli_query($conexao, $queryTelefone);
            if($inserirTelefone){
                header("Location: ../admin/index.php");
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