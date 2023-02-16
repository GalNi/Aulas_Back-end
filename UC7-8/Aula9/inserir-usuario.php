<?php

include_once("config/conexao.php");

if($_POST){
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    //criptografar
    //crypt(senha, options)
    $salt = md5($usuario.$senha);
    $custo = "06";
    $senhaHash = crypt($senha, '$2b$' . $custo . '$'. $salt . '$');
    //Inserir dados no banco de dados
    $query = "INSERT INTO tbl_acessos(`usuario`, `senha`, `id_situacao`) VALUES ('$usuario', '$senhaHash', 1)";
    $inserir = mysqli_query($conexao, $query);
    //Verificar se os dados foram para o banco corretamente
    if($inserir){
        echo"Usuário cadastrado com sucesso!";
    }else{
        echo"Cadastrar usuário!";
    }
}else{

}