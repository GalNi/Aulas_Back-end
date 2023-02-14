<?php include_once("config/seguranca.php");?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Minha conta Admin</title>
</head>
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
        td, th {
        border: 1px solid #ddd;
     padding: 8px;
     background-color: #fff;
     width: 100%;
        }

        tr:nth-child(even){
            background-color: #f2f2f2;
        }
        tr:hover {background-color: #ddd;
        }
        th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
        }   
        h4{
            text-align: center;
        }
    </style>
<body>
<div class="container">
<?php
    echo "Olá, Admin".$_SESSION["NOME_USUARIO"]."!";

?>

</div>
</body>
</html>