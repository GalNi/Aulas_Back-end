<?php

include_once("config/conexao.php");

if($_POST){
    //Capturar as informações do POST

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    //Consultar o usuário

    $queryUsuario = "SELECT * FROM tbl_acessos WHERE usuario = '$usuario'";
    $consultaUsuario = mysqli_query($conexao, $queryUsuario); //se deu certo a consulta
    $resultadoConsulta = mysqli_fetch_all($consultaUsuario, MYSQLI_ASSOC); //se achou algum dado
    
    if($resultadoConsulta){
        //verificar a senha do usuário

        $salt = md5($usuario.$senha);
        $custo = "06";
        $senhaHash = crypt($senha, '$2b$' . $custo . '$'. $salt . '$');

        $compararSenha = hash_equals($resultadoConsulta[0]["senha"], $senhaHash);
        
        if($compararSenha){
            echo "Usuário autenticado";
            //header("Local: index.php");
        }else{
            echo "Usuário e/ou senha incorretos";
        }
        //SESSION
        //session_start();
        //$_SESSION[""] = $resultadoConsulta[][""];
        //$_SESSION[""] = $resultadoConsulta[][""];
    }
}