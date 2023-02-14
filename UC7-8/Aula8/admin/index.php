<?php include_once("../config/conexao.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market</title>
</head>
<style>
  img{
    width: 250px;
  }
</style>
<body>
        <header>
            <a href="#"><i class="fa-solid fa-house"></i></a><!--Home-->
            <a href="../login.php"><i class="fa-solid fa-user"></i></a><!--Minha conta-->
            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a><!--Carrinho-->
        </header>
<div class="container">
  <main>

      <div id="categorias">
<!--------------------------------Categorias--------------------------------->
      <?php include_once("../includes/vitrine-categorias.php"); ?>
      </div >
      <div id="top-categorias">
<!--------------------------------Top Categorias----------------------------->


      </div>
      <div id="banner">
<!------------------------------------Banner--------------------------------->


      </div>
      <div id="top-mercados">
<!------------------------------Top Mercados--------------------------------->


      </div>
      <h3>Mercados</h3>
      <div id="mercado">

      </div>

      </div>
  </main>
</div>

<script src='https://kit.fontawesome.com/a342c01441.js' crossorigin='anonymous'></script>
</body>

</html>