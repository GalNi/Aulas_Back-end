<?php

include_once("config/conexao.php");

if($_POST){
    $razaoSocial = $_POST["razao-social"];
    $nomeFantasia = $_POST["nome-fantasia"];
    $cnpj = $_POST["cnpj"];
    $ie = $_POST["ie"];
    $im = $_POST["im"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $endereço = $_POST["endereço"];
    $cep = $_POST["cep"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $uf = $_POST["uf"];

    //CRIAÇÃO DA RASH - data + nome + sobrenome
    $token_parceiro = sha1(md5(date('d/m/y').$nomeFantasia.$razaoSocial));

        $queryParceiros = "INSERT INTO tbl_parceiros(razao_social, nome_fantasia, ie, im, `hash`, id_situacao) VALUES ('$razaoSocial', '$nomeFantasia', '$ie', '$im', '$token_parceiro', 1)";
        $queryDocs = "INSERT INTO tbl_docs(`hash_usuario`, documento, id_situacao) VALUES ('$token_parceiro', '$cnpj', 1)";
        $queryEmail = "INSERT INTO tbl_contatos_emails(`hash_usuario`, email, id_situacao) VALUES('$token_parceiro', '$email', 1)";

        $inserirParceiros = mysqli_query($conexao, $queryParceiros);
        $inserirDocs = mysqli_query($conexao, $queryDocs);
        $inserirEmail = mysqli_query($conexao, $queryEmail);

        if($inserirParceiros && $inserirDocs && $inserirEmail){
            header("Location: admin/index.php?parceiro='.$token_parceiro");
        }else{
            header("Location: parceiros.php?parceiro='.$token_parceiro");
        }

}