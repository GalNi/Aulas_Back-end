<?php include_once("../config/conexao.php");?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Gestão gêneros</title>
    <link rel="stylesheet" href="../assets/css.css">
</head>
   
<body>
<div class="container">
<a href='index.php'><i class='fa-solid fa-arrow-left'></i></a>
<h4>Gestão de documentos</h4>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Data Nascimento</th>
                <th>Gênero</th>
                <th>Newsletter</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>

    <?php
    $consulta = mysqli_query($conexao, "SELECT * FROM tbl_clientes");
    $dados_clientes = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

    foreach($dados_clientes as $clientes){
        echo "<tr>";
        echo "<td>".$clientes['nome']."</td>";
        echo "<td>".$clientes['sobrenome']."</td>";
        echo "<td>".$clientes['data_nasc']."</td>";
        echo "<td>".$clientes['id_genero']."</td>";
        echo "<td>".$clientes['newsletter']."</td>";
        echo "<td>
        <a href='?acao=editar&id=".$clientes['id']."'><i class='fa-solid fa-pen-to-square'></i></a>
        <a href='deletar-genero.php?id=".$clientes['id']."'><i class='fa-solid fa-trash'></td>";
        echo "</tr>";
    }
    ?>
        </tbody>
    </table>

    <?php
    if(isset($_GET["msg"])){
        if($_GET["msg"] == "sucessocad"){
            echo"Dados cadastrados com sucesso";
        }
        if($_GET["msg"] == "errocad"){
            echo"Erro ao cadastrar dados";
        }
    }
    if(isset($_GET["msg"])){
        if($_GET["msg"] == "sucessodel"){
            echo"Dados deletados com sucesso";
        }
        if($_GET["msg"] == "errodel"){
            echo"Erro ao deletar dados";
        }
    }
    ?>

    <?php
    if(isset($_GET["acao"])){
        if($_GET["acao"] == "editar"){
            $queryConsultarDados = "SELECT * FROM tbl_clientes WHERE id = ".$_GET["id"];
            $consultarDados = mysqli_query($conexao, $queryConsultarDados);
            $resultado = mysqli_fetch_all($consultarDados, MYSQLI_ASSOC);
                foreach($resultado as $dados){
                    echo'<h4>Editar Documentos</h4>
                    <form action="editar-genero.php" method="POST">
                    <input type="hidden" name="id" value="'.$dados["id"].'">
                    <input type="text" name="nome-cliente" value="'.$dados["nome"].'">
                    <input type="text" name="sobrenome-cliente" value="'.$dados["sobrenome"].'">
                    <input type="text" name="tdataNasc_cliente" value="'.$dados["data_nasc"].'">
                    <input type="text" name="genero-cliente" value="'.$dados["id_genero"].'">
                    <input type="text" name="newsletter-cliente" value="'.$dados["newsletter"].'">
                    <button>Salvar</button>';

                }
                    ?>
                    </form>
    <?php
        }
        }else{
    ?>
        <h4>Cadastro de documentos</h4>
            <form action="inserir-cliente.php" method="POST" enctype="multipart/form-data">
                <label for="">Nome</label>
                <input type="text" name="doc-nome">
                <label for="">Sobrenome</label>
                <input type="text" name="doc-sobrenome">
                <label for="">Data de nascimento</label>
                <input type="date" name="doc-data">
                <label for="">Gênero</label>
                <select name="genero" id="">
                <?php
                    $query = "SELECT * FROM tbl_generos";
                    $consulta_genero = mysqli_query($conexao, $query);
                    $result = mysqli_fetch_all($consulta_genero, MYSQLI_ASSOC);

                foreach($result as $genero){
                ?>
                <option value='<?=$genero["id"]?>'><?=$genero["genero"]?>
                </option>
                <?php
                    }
                ?>
                
                
                <?php
                echo"
                <div>
                <label for=''>Newsletter</label>
                <input type='checkbox' name='doc-news'>
            </div>
            <button>Gravar</button>

        </form>";
    }
    ?>

</div>
<script src='https://kit.fontawesome.com/a342c01441.js' crossorigin='anonymous'></script>
</body>
</html>