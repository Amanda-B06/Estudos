<?php


require __DIR__. 'src/Model/tipo_combustivel.php';
require __DIR__. 'src/Model/veiculo.php';
require __DIR__. 'src/Model/carro.php';
require __DIR__. 'src/Model/onibus.php';
require __DIR__. 'src/Services/calculadora_IPVA';


// Instanciando os veículos
$meu_Carro = new Carro("Fiat", "Uno", 2020, tipo_combustivel::Gasolina, 5);
$meu_Onibus = new Onibus("Mercedes-Benz", "0500", 2018, tipo_combustivel::Diesel, 4);

$calculadora = new calculadora_IPVA();


// Calcular o Imposto

$calculadora -> incluirNo_Calculo($meu_Carro);
$calculadora -> incluirNo_Calculo($meu_Onibus);

echo "Total de impostos a pagar da frota: R$ " . $calculadora->getTotal();