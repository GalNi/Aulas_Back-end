<?php

/* CRIPTOGRAFIAS DE DADOS
    MD5 *Sozinha é muito fraca , melhor se usar com outra junto* / crypt() / sha1 / base64() / password_hash()
*/

$texto = "Senha";

echo "<p>$texto</p><br>";
echo "<p>".md5($texto)."</p><br>";
echo "<p>".sha1($texto)."</p><br>";
echo "-----------------<br>";
echo "CRYPT<br>";
echo "-----------------<br>";
$palavraChave = "trs!052@";
$senha = "1234";
echo "<p>".crypt($palavraChave, $senha)."</p><br>";

echo "-----------------<br>";
echo "PASSWORD_HASH<br>";
echo "-----------------<br>";
$senha = "1234";
$options = [
    'cost' => 12,
];

echo "<p>".password_hash($senha, PASSWORD_BCRYPT, $options)."</p><br>";

echo "-----------------<br>";
echo "BASE64<br>";
echo "-----------------<br>";


echo "<p>".base64_encode($texto)."</p><br>";
