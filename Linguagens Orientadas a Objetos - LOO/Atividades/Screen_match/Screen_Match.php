<?php 
    $nome = 'Top - Gun: Maverick';  // String
    $anoLancamento = 2022;          // Int
    $somaDeNotas = 9+6+8+7.5+5;      // Int
    $notaFilme = $somaDeNotas/5;   // Float
    $incluidoNoPlano = true;        // Bool

    // Todas as variáveis começam com $.




    echo "\nOis, bem-vindo ao Screen Match! :D
    ";

    
    echo "\t"."Nome do Filme: $nome
    "; //Interpolação: Aceitar variável (") no texto. Haverá situações em que será preciso contatenar, nesse caso precisará usar as aspas simples (').
    echo "\t".'Ano de Lançamento: ' . $anoLancamento . "\n"
    ; //Isso é um exemplo de concatenação .
    echo "\t"."Nota do Filme: $notaFilme
    "; //Isso é um exemplo de interpolar.
    echo "\t"."Incluído no Plano? $incluidoNoPlano";
    //Aspas duplas: Interpreta ("); Já as aspas simples: Não interpreta (').


