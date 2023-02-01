<?php

$dados = ["Edmilson","Chefe","12/02/2012",7500];
$desInss = 0;
$desVt = 0;
$desVr = 120;
$salN = 0;

echo"<h1>Folha de pagamento</h1>";
echo"<p>Nome do funcionário: ".$dados[0]."</p>";
echo"<p>Cargo do funcionário: ".$dados[1]."</p>";
echo"<p>Data de admissão do funcionário: ".$dados[2]."</p>";
echo"<p>Salário bruto do funcionário: R$".$dados[3]."</p>";

//referencia site https://www.coalize.com.br/desconto-inss

if($dados[3] < 1212){
    $desInss = $dados[3]*0.075;
} else if(1212 < $dados[3] && $dados[3] < 2427.03){
    $desInss = $dados[3]*0.09;
} else if(2427.03 < $dados[3] && $dados[3] < 3614.03){
    $desInss = $dados[3]*0.12;
} else{
    $desInss = $dados[3]*0.14;
}
$desVt = $dados[3]*0.06;

$salN = $dados[3] - $desInss - $desVt - $desVr;

echo"<p>Desconto de INSS do funcionário: R$".$desInss."</p>";
echo"<p>Desconto de VT do funcionário: R$".$desVt."</p>";
echo"<p>Desconto de VR do funcionário: R$".$desVr."</p>";
echo"<p>Salário liquido do funcionário: R$".$salN."</p>";

