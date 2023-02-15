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
    //password_hash()
    //$query = "SELECT * FROM tbl_acessos WHERE ";
}