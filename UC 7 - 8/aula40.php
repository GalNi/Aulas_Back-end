<?php
$disc = [
    ["Português"],
    ["Matemática"],
    ["História"],
    ["Geografia"],
];
$freq = [
    [80,75,60,40],
    [75,95,85,90],
    [60,50,60,40],
    [75,75,75,80],
];
$notas = [
    [5,7,8,5],
    [6,4,6,8],
    [4,7,5,9],
    [8,9,7,6],
];

$mediaN = 0;
$mediaQ = 0;

echo"<h1>Boletim do aluno</h1>";
for($x = 0; $x < count($notas); $x++){
    for($y = 0;$y < count($disc); $y++){
    echo "<p>".($x+1)."º Bimestre ".$disc[$y][0]." - Notas: " .$notas[$x][$y]."</p>";
    echo "<p>".($x+1)."º Bimestre ".$disc[$y][0]." - Frequência: " .$freq[$x][$y]."%</p>";
    
    $mediaN = $mediaN + $notas[$x][$y];
    $mediaQ = $mediaQ + $freq[$x][$y];
    
}

echo"<h3>Média de notas : ".($mediaN/4)."</h3>";
echo"<h3>Média de frequência : ".($mediaQ/4)."%</h3>";

if(($mediaQ/4) >= 75){
    if(($mediaN/4) > 7){
        echo "<h3>Aluno Aprovado por notas e por frequência</h3>";
    }else{
        echo "<h3>Aluno Reprovado por notas</h3>";
    }
} else{
    echo "<h3>Aluno Reprovado por frequencia</h3>";
}

$mediaN = 0;
$mediaQ = 0;

}



