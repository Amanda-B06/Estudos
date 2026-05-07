<?php

$numero = $argv[1];
$nomeDaFuncao = 'ex' . $numero;

echo "========================================\n";
echo "   Executando o Exercício $numero\n";
echo "========================================\n\n";

$nomeDaFuncao(); 

echo "\n========================================\n";


// ÁREA DOS EXERCÍCIOS: Funções com a lógica de cada questão
// ==============================================================================

function ex1() {
    echo "Olá, Mundo!\n";
}

function ex2() {
    $nome = readline("Qual é o seu nome? ");
    echo "Olá $nome, é um prazer te conhecer!\n";
}

function ex3() {

    $nome = readline('Nome do Funcionário: ');
    $salario = readline('Salário: ');

    echo "O funcionária(o) $nome tem um salário de R$ $salario em Junho.";

}

function ex4() {

    $nota_01 = readline('Digite um valor: ');
    $nota_02 = readline('Digite mais um valor: ');

    $soma_notas = $nota_01+$nota_02;

    echo "A soma dos números $nota_01 e $nota_02 é de: $soma_notas";
}

function ex5() {

    $nota_01 = readline('Digite um valor: ');
    $nota_02 = readline('Digite mais um valor: ');

    $media_notas = ($nota_01+$nota_02)/2;

    echo "A média dos números $nota_01 e $nota_02 é de: $media_notas";

}

function ex6() {

    $numero01 = readline('Digite um número: ');
    $antecessor = $numero01 - 1;
    $sucessor = $numero01 + 1;

    echo "O antecessor de $numero01 é $antecessor";
    echo "O sucessor de $numero01 é $sucessor";

}

function ex7() {

    $numero = readline('Digite um número: ');

    $dobro = $numero*2;
    $terca_parte = $numero/3;

    echo "O dobro de $numero é $dobro";
    echo "A terça parte de $numero é $terca_parte";

}

function ex8() {

    $distancia = readline("Digite uma distância em metros: ");

    echo "A distância de $distancia corresponde a: ";

    

}