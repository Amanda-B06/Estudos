<?php

$Ano = $argv[1];

if ( ($Ano % 4 == 0 && $Ano % 100 != 0) || ($Ano % 400 == 0 ) ) {
    echo "\n"."\t"."O ano $Ano é bissexto."."\n";
} else {
    echo "\n"."\t"."$Ano não é bissexto."."\n";
}

// O ano é bissexto se for divisível por 4, mas não for divisível por 100, a menos que seja divisível por 400.