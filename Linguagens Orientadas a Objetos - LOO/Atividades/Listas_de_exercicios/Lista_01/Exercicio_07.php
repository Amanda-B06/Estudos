<?php

$Horas = $argv[1];

if ($Horas < 12) {
    echo "\n"."\t"."Olá! Bom dia!"."\n";
} elseif ($Horas < 18) {
    echo "\n"."\t"."Olá! Boa tarde!"."\n";
} else {
    echo "\n"."\t"."Olá! Boa noite!"."\n";
}