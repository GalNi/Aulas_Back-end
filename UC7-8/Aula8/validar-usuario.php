<?php

include_once("config/conexao.php");

if($_POST){
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $queryUsuarios = "SELECT * FROM tbl_acessos WHERE usuario = '$usuario' ";
    $consultarDados = mysqli_query($conexao, $queryUsuarios);
    $resultado = mysqli_fetch_all($consultarDados, MYSQLI_ASSOC);

        if($resultado){
        //VERIFICAR SENHA
        $salt = md5($usuario.$senha);//Criar palavra chave
        $custo = "06";
        $senhaDigitada = crypt($senha, '$2b$'.$custo.'$'.$salt.'$');
        $compararSenha = hash_equals($resultado[0]["senha"], $senhaDigitada);

        if($compararSenha){
            //SESSION
            session_start();
            $_SESSION["ID_USUARIO"] = $resultado[0]["id_usuario"];
            $_SESSION["USUARIO"] = $resultado[0]["usuario"];
            $_SESSION["ID_SITUACAO"] = $resultado[0]["id_situacao"];
            $_SESSION["ID_ACESSO"] = $resultado[0]["id_acesso"];

            $queryUsuario = "SELECT * FROM tbl_acessos WHERE id_acesso = '".$_SESSION["ID_ACESSO"]."'";
            $consultarUsuario = mysqli_query($conexao, $queryUsuario);
            $resultadoUsuario = mysqli_fetch_all($consultarUsuario, MYSQLI_ASSOC);
            $_SESSION["NOME_USUARIO"] = $resultadoUsuario[0]["nome"];
            $_SESSION["SOBRENOME_USUARIO"] = $resultadoUsuario[0]["Sobrenome"];



            header("Location: ../admin/conta-admin.php");
        }
        }else{
            header("Usuário não encontrado");
        }
    }else{
        $consultarDados = mysqli_query($conexao, $query);
        $resultado = mysqli_fetch_all($consultarDados, MYSQLI_ASSOC);

        if($resultado){
            //SESSION
        session_start();
        $_SESSION["ID_USUARIO"] = $resultado[0]["id_usuario"];
        $_SESSION["USUARIO"] = $resultado[0]["usuario"];
        $_SESSION["ID_SITUACAO"] = $resultado[0]["id_situacao"];

        $queryUsuario = "SELECT * FROM tbl_clientes WHERE id = '".$_SESSION["ID_USUARIO"]."'";
        $consultarUsuario = mysqli_query($conexao, $queryUsuario);
        $resultadoUsuario = mysqli_fetch_all($consultarUsuario, MYSQLI_ASSOC);
        $_SESSION["NOME_USUARIO"] = $resultadoUsuario[0]["nome"];
        $_SESSION["SOBRENOME_USUARIO"] = $resultadoUsuario[0]["Sobrenome"];

        header("Location: minha-conta.php");
        }else{
    header("Location: login.php");
    }
}