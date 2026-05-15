<?php

require __DIR__ . '/src/model/categoria_Eletronico.php';
require __DIR__ . '/src/model/produtos.php';
require __DIR__ . '/src/model/geladeira.php';
require __DIR__ . '/src/model/smartphone.php';
require __DIR__ . '/src/services/calculadora_Frete.php';


$meu_Smartphone = new smartphone('Iphone', 10.000, categoria_Eletronico::Informatica, 3);

$minha_Geladeira = new geladeira('Eletrolux', 6.000, categoria_Eletronico::Eletrodomestico, 2);

$calculadora = new calculadora_Frete;


// Calcular o Imposto

$calculadora->incluir_Calculo($meu_Smartphone);
$calculadora->incluir_Calculo($minha_Geladeira);

echo "O valor final do Frete é de: R$ " . $calculadora->getTotal();
