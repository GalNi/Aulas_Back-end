<?php include_once("../config/conexao.php");?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Gestão de categorias</title>
    <link rel="stylesheet" href="../assets/css.css">
</head>
<body>
<div class="container">
<a href='gestao-categoria.php'><i class='fa-solid fa-arrow-left'></i></a>
<h4>Gestão de categorias</h4>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Visibilidade</th>
                <th>Situação</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>

    <?php
    $consulta = mysqli_query($conexao, "SELECT * FROM tbl_categorias");
    $dados_categorias = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

    foreach($dados_categorias as $categoria){
        echo "<tr>";
        echo "<td>".$categoria['nome']."</td>";
        echo "<td>".$categoria['visibilidade']."</td>";
        echo "<td>".$categoria['id_situacao']."</td>";
        echo "<td>
        <a href='?acao=editar&id=".$categoria['id']."'><i class='fa-solid fa-pen-to-square'></i></a>
        <a href='deletar-categoria.php?id=".$categoria['id']."'><i class='fa-solid fa-trash'></td>";
        echo "</tr>";
    }
    ?>
        </tbody>
    </table>

    <?php
    if(isset($_GET["msg"])){
        if($_GET["msg"] == "sucessocad"){
            echo"Categoria cadastrada com sucesso";
        }
        if($_GET["msg"] == "errocad"){
            echo"Erro ao cadastrar categoria";
        }
    }
    if(isset($_GET["msg"])){
        if($_GET["msg"] == "sucessodel"){
            echo"Categoria deletada com sucesso";
        }
        if($_GET["msg"] == "errodel"){
            echo"Erro ao deletar categoria";
        }
    }
    ?>

    <?php
    if(isset($_GET["acao"])){
        if($_GET["acao"] == "editar"){
            $queryConsultarCategoria = "SELECT * FROM tbl_categorias WHERE id = ".$_GET["id"];
            $consultarCategoria = mysqli_query($conexao, $queryConsultarCategoria);
            $resultado = mysqli_fetch_all($consultarCategoria, MYSQLI_ASSOC);
                foreach($resultado as $categoria){
                    echo'<h4>Editar categoria</h4>
                    <form action="editar-categoria.php" method="POST">
                    <input type="hidden" name="id" value="'.$categoria["id"].'">
                    <input type="text" name="nome-categoria" value="'.$categoria["nome"].'">
                    <input type="text" name="img-categoria"value="'.$categoria["img"].'">
                    <input type="text" name="slug-categoria" value="'.$categoria["slug"].'">
                    <button>Salvar</button>';
                }
                    ?>
                    </form>
    <?php
        }
        }else{
    ?>
        <h4>cadastro de categoria</h4>
          <form action="inserir-categoria.php" method="POST" enctype="multipart/form-data">
                <label for="">Nome</label>
                <input type="text" name="nome-categoria">
                <label for="">Imagem</label>
                <input type="text" name="img-categoria">
                <label for="">Slug</label>
                <input type="text" name="slug-categoria">
                <button>Gravar</button>
            </form>
        <?php
    }
    ?>

</div>
<script src='https://kit.fontawesome.com/a342c01441.js' crossorigin='anonymous'></script>
</body>
</html>