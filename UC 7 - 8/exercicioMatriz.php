<?php

$mercadorias = [
    [100,'Arroz',21.90],
    [101,'Feijão',7.90],
];

foreach($mercadorias as $produtos){
    
    echo "<p>Código: $produtos[0]</p>";
    echo "<p>Produto: $produtos[1]</p>";
    echo "<p>Preço: $produtos[2]</p>";
}


echo "<h4>Percorrendo Arrays de matriz com For: </h4>";

for($i = 0; $i < count($mercadorias); $i++){
    echo "<p>Codigo:" .$mercadorias[$i][0]."</p>";
}