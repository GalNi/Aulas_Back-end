<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>

    <style>
        table tr td {
            border: solid white 1px;
            padding: 3px 5px;
            text-align: center;
            background-color: #0093E9;
            background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
            color: black;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            color: white;
        }

        table {
            margin: 0 auto;
        }

        body {
            background-color: #0086d1;
            background-image: linear-gradient(270deg, #0086d1 0%, #003356 100%);
        }

        .gradient{
            background-image: linear-gradient(270deg, #FFFFFF 0%, #6284FF 50%, #FF0000 100%);
            background-clip: text;
            -webkit-background-clip: text;
            /* Adicionado: */
            -webkit-text-fill-color: transparent;
        }

        @media screen and(max-width: 500px){
            body {
                background-color: #eeeeee;
                background-image: linear-gradient(90deg, #eeeeee 0%, #000000 100%); 
                display: none;
        }
        }
    </style>
</head>

<body>

    <div class="container">

        <h1 class="gradient">Inserindo informações na Tabela com PHP - EX01</h1>
        <hr>
        <?php
        $nome = "Marcelo";
        $cpf = "123.321.231-12";
        $dataNascimento = "07/01/2006";
        $genero = "Masculino";
        $celular = 11920003909;
        $email = "marceloaggio@gmail.com";
        $rua = "Rua mirante do jaragua";
        $bairro = "Alfavela";
        $cep = "05180-20";
        $numeroCasa = 80;

        echo "<table>
            <thead>
            <tr>
                <td>Nome</td>
                <td>Cpf</td>
                <td>Data Nasc.</td>
                <td>Genero</td>
                <td>Celular</td>
                <td>Email</td>
                <td>Rua</td>
                <td>Bairro</td>
                <td>CEP</td>
                <td>Nº Casa</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>$nome</td>
                <td>$cpf</td>
                <td>$dataNascimento</td>
                <td>$genero</td>
                <td>$celular</td>
                <td>$email</td>
                <td>$rua</td>
                <td>$bairro</td>
                <td>$cep</td>
                <td>$numeroCasa</td>
            </tr>
        </tbody>
    </table>"
        ?>
    </div>

</body>

</html>