<?php

require __DIR__ . '/src/model/estado_Conservacao.php';
require __DIR__ . '/src/model/material_Didatico.php';
require __DIR__ . '/src/model/livros.php';
require __DIR__ . '/src/model/revista_Cientifica.php';
require __DIR__ . '/src/services/verificador_Emprestimo.php';


$meu_Livro = new livros('Pequeno Principe', 1943, estado_Conservacao::Bom, 96);

$minha_Revista = new revista_Cientifica('Nature', 1869, estado_Conservacao::Gasto, 800);

$calculadora = new calculadora_emprestimo;


// Calcular o Imposto

$calculadora->incluir_Calculo($meu_Livro);
$calculadora->incluir_Calculo($minha_Revista);

echo "Você terá o prazo de entrega de: ", $calculadora->getTotal(), " dias";
