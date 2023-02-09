<?php include_once("../config/conexao.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market</title>
</head>
<!--
    <style>
      *{
        padding: 0;
        margin: 0;
      }

      input, select {
      display: flex;
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      border: none;
      border-bottom: 2px solid green;
      }

      input[type=submit] {
        margin: 0 auto;
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      border: none;
      border-bottom: 2px solid green;
      }

      input[type=submit]:hover {
      background-color: #45a049;
      }

      div {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
      }
      button{
      background-color: #04AA6D;
      border-radius: 30px;
      color: white;
      padding: 16px 32px;
      text-decoration: none;
      margin: 4px 2px;
      cursor: pointer;
      justify-content: center;
      }
      .container{
        width: 60%;
        margin: 0 auto;
      }

    </style>
-->
<style>
  img{
    width: 250px;
  }
</style>
<body>
        <header>
            <a href="#"><i class="fa-solid fa-house"></i></a><!--Home-->
            <a href="#"><i class="fa-solid fa-user"></i></a><!--Minha conta-->
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