<?php

$query = "SELECT nome, slug, img FROM tbl_categorias";
$resultado = mysqli_query($conexao, $query);
$dados_categorias = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

foreach($dados_categorias as $categoria){
    echo"<h4>".$categoria["nome"]."</h4>";
    echo"<img src='".$categoria["img"]."'>";
}

?>