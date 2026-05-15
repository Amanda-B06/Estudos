<?php

require __DIR__. '/src/model/tipo_combustivel.php';
require __DIR__. '/src/model/veiculo.php';
require __DIR__. '/src/model/carro.php';
require __DIR__. '/src/model/onibus.php';
require __DIR__. '/src/services/calculadora_IPVA.php';


// Instanciando os veículos
$meu_Carro = new Carro("Fiat", "Uno", 2020, tipo_combustivel::Gasolina, 5);
$meu_Onibus = new Onibus("Mercedes-Benz", "0500", 2018, tipo_combustivel::Diesel, 4);

$calculadora = new calculadora_IPVA();


// Calcular o Imposto

$calculadora -> incluirNo_Calculo($meu_Carro);
$calculadora -> incluirNo_Calculo($meu_Onibus);

echo "Total de impostos a pagar da frota: R$ " . $calculadora->getTotal();