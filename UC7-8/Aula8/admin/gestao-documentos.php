<?php include_once("../config/conexao.php");?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Gestão Documentos</title>
    <link rel="stylesheet" href="../assets/css.css">
</head>

<body>
<div class="container">
<a href='index.php'><i class='fa-solid fa-arrow-left'></i></a>
<h4>Gestão Documentos</h4>
    <table>
        <thead>
            <tr>
                <th>Documentos</th>
            </tr>
        </thead>
        <tbody>

    <?php
    $consulta = mysqli_query($conexao, "SELECT * FROM tbl_tipo_docs");
    $dados_docs = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

    foreach($dados_docs as $docs){
        echo "<tr>";
        echo "<td>".$docs['id_tipo_docs']."</td>";
        echo "<td>
        <a href='?acao=editar&id=".$docs['id']."'><i class='fa-solid fa-pen-to-square'></i></a>
        <a href='deletar-documentos.php?id=".$docs['id']."'><i class='fa-solid fa-trash'></td>";
        echo "</tr>";
    }
    ?>
        </tbody>
    </table>

    <?php
    if(isset($_GET["msg"])){
        if($_GET["msg"] == "sucessocad"){
            echo"Documento cadastrado com sucesso";
        }
        if($_GET["msg"] == "errocad"){
            echo"Erro ao cadastrar documento";
        }
    }
    if(isset($_GET["msg"])){
        if($_GET["msg"] == "sucessodel"){
            echo"Documento deletado com sucesso";
        }
        if($_GET["msg"] == "errodel"){
            echo"Erro ao deletar documento";
        }
    }
    ?>

    <?php
    if(isset($_GET["acao"])){
        if($_GET["acao"] == "editar"){
            $queryConsultarDocs = "SELECT * FROM tbl_tipo_docs WHERE id = ".$_GET["id"];
            $consultarDocs = mysqli_query($conexao, $queryConsultarDocs);
            $resultado = mysqli_fetch_all($consultarDocs, MYSQLI_ASSOC);
                foreach($resultado as $docs){
                    echo'<h4>Editar Gênero</h4>
                    <form action="editar-genero.php" method="POST">
                    <input type="hidden" name="id" value="'.$docs["id"].'">
                    <input type="text" name="troca-genero" value="'.$docs["id_tipo_docs"].'">
                    <button>Salvar</button>';

                }
                    ?>
                    </form>
    <?php
        }
        }else{
    ?>
        <h4>Cadastro de Documentos</h4>
          <form action="inserir-documentos.php" method="POST" enctype="multipart/form-data">
                <label for="">Documento</label>
                <input type="text" name="tipo-docs">
                <button>Gravar</button>
            </form>
        <?php
    }
    ?>

</div>
<script src='https://kit.fontawesome.com/a342c01441.js' crossorigin='anonymous'></script>
</body>
</html>