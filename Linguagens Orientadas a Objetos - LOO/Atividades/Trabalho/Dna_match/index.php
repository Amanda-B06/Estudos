<?php

require __DIR__ . '/src/model/armazenamento.php';
require __DIR__ . '/src/model/equipamentos.php';
require __DIR__ . '/src/model/fonte.php';
require __DIR__ . '/src/model/memoria.php';
require __DIR__ . '/src/model/monitor.php';
require __DIR__ . '/src/model/outros.php';
require __DIR__ . '/src/model/situacao.php';


$armazenamentoNovo = new armazenamento('Hitachi', 82.3);
var_dump($armazenamentoNovo);

$equipamentoNovo = new equipamentos("Inter Core", "3.30ghz", situacao::nao_Testado);
var_dump($equipamentoNovo);

$fonteNova = new fonte("Daten", "200W", situacao::nao_Testado);
var_dump($fonteNova);

$memoriaNova = new memoria("Mark Vision", "DDR3", 4);
var_dump($memoriaNova);

$outrosNovo = new outros(situacao::nao_Testado, "Cabo Sata");
var_dump($outrosNovo);
