<?php

require __DIR__ . "/src/model/Titulo.php";
require __DIR__ . '/src/model/Genero.php';
require __DIR__ . "/src/model/Filme.php";
require __DIR__ . "/src/model/Serie.php";

echo "Bem-vindos aos filmes!\n";

$filme1 = new Filme(
    'Thor Ragnarock',
    2021,
    Genero::SuperHeroi,
    duracao_minutos: 15,
);

$filme2 = new Filme(
    'Barbie e o Castelo de Diamantes',
    2008,
    Genero::Aventura,
    duracao_minutos: 20
);

$serie1 = new Serie(
    'Friends',
    1994,
    Genero::Comedia,
    temporadas: 10,
    episodios_porTemporada: 24,
    duracao_porEpisodio: 29,
);

$filme1->avaliar(9);
$filme1->avaliar(10);
$serie1->avaliar(10);
$serie1->avaliar(9.5);

var_dump($serie1);
echo $serie1->media();
