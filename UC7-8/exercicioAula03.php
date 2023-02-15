<?php
/**
 * Se o aluno tiver uma frequencia menor que 75% a reprovação será automatica, se a frequencia for igual ou maior que 75% o aluno precisara ter media maior que 7 para aprovação, caso média for entre 5 e 7 aluno deverá passar por conselho, qualquer média menor que 5 aluno estará reprovado
 */

$media = 5;
$frequencia = 75;

if($frequencia >= 75){
    //verificação da média
    if($media < 5){
        echo "<p>Aluno Reprovado, porem frequencia é de $frequencia</p>";
    }else if($media >= 5 && $media <7){
        echo "<p>Aluno Passará por conselho, porém sua frequencia é de $frequencia</p>";
    }else{
        echo "<p>Aluno Reprovado</p>";
    }
}else{
    echo "<p>Aluno Reprovado por Frequencia</p>";
}