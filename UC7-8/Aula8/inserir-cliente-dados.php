<?php

include_once("config/conexao.php");

if($_POST){

    $token_cliente = $_POST['id_client'];//alterar esse post
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    //palavra chave - email+ senha
    $salt = md5($email.$senha);
    $custo = "06";
    $senha_segura = crypt($senha.'$2b$'.$custo.'$'.$salt.'$');
    $celular = $_POST['celular'];

    $queryConsultaToken = "SELECT * FROM tbl_clientes WHERE `hash` = '$token_cliente'";
    $resultado = mysqli_query($conexao, $queryConsultaToken);
    $dados_cliente = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    $id = $dados_cliente[0]["id"];

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
                $queryAcesso = "INSERT INTO tbl_acessos(id_usuario, usuario, senha, id_situacao) VALUES ('$id', '$email', '$senha_segura', 1,)";
                $inserirAcesso = mysqli_query($conexao, $queryAcesso);

                if($inserirAcesso){
                    header("Location: admin/index.php")
                }else{
                    header("Location: completar-cadastro.php?client=".$token_cliente);
                }
                header("Location: admin/index.php");
            }else{
                header("location: completar-cadastro.php?client=".$token_cliente);//mudar id para token
            }
        }else{
            header("location: completar-cadastro.php?client=".$token_cliente);
        }
}else{  
    header("Location: cadastro.php");
}
}