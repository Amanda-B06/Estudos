<?php

function exibeAnoLancamento ($ano): void{
    if ($ano > 2022){
        echo "O filme é lançamento.";
    }
    elseif ($ano > 2022 && $ano <= 2022){
        echo "O filme ainda é novo.";
    }
    else {
        echo "O filme não é o lançamento.";
    }
};

function incluiNoPrime (bool $planoPrime, int $anoLancamento): bool{
    return $planoPrime || $anoLancamento < 2000;
};