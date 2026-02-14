<?php

$Altura = $argv[1];
$Peso = $argv[2];
$Imc = $Peso / ($Altura*$Altura);

if ($Imc < 18.5) {
    echo "\n"."\t"."Imc = $Imc. Você está abaixo do peso.";
} elseif ($Imc > 18.5 && $Imc < 24.9) {}