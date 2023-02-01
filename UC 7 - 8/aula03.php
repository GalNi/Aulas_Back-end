<?php

//Variaveis: String | float | int
//Variaveis: Arrays (vetores)

$lista_nomes = array('Thiago','Heitor','Maicon');

var_dump($lista_nomes);

foreach($lista_nomes as $nomes){
    echo "<p> $nomes </p>";
}

echo("<ul>");
for($posicao = 0; $posicao < count($lista_nomes); $posicao++){
    echo "<li>$lista_nomes[$posicao]</li>";
}
echo("</ul>");

//Estrutura: While(){}
$pos  = 0;
echo "<ol>";

while($pos < count ($lista_nomes)){
    echo "<li>$lista_nomes[$pos]</li>";
    $pos++;
};

echo "</ol>";

?>

<?php

//condicionais: if(){}else{}

$idade = 18;

if($idade >= 18){
    echo "<p>Você terá que trabalhar hahahahah</p>";
}else{
    echo "<p>Estude Para não precisar Trabalhar</p>";
}
?>

<?php
    $media = 7;
    if($media < 5){
        echo "<h5>Aluno em Recuperação</h5>";
    }else if ($media >=5 && $media < 7){
        echo "<h5>Aluno passará pelo Conselho</h5>";
    }else{
        echo "<h5>Aluno está Aprovado</h5>";
    }
?>








