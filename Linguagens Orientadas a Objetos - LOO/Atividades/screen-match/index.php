<?php

require __DIR__ . '/src/modelo/Genero.php';
require __DIR__ . "/src/modelo/Filme.php";

echo "Bem-vindos aos filmes!\n";

$filme1 = new Filme(
    'Thor Ragnarock',
    2021,
    Genero::SuperHeroi
);

$filme2 = new Filme(
    'Barbie e o Castelo de Diamantes',
    2008,
    Genero::Aventura
);

$filme1 -> avalia (9);
$filme2 -> avalia (9);
$filme1 -> avalia (10);
$filme2 -> avalia (10);

var_dump($filme2);
echo $filme2 -> media();