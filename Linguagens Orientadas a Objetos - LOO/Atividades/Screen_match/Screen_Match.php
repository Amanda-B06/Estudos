<?php 


    $nomeFilme = 'Thor: Ragnarok';                  // String
    //Operador de coalensência Nula (??).
    //$somaDeNotas = 9+6+8+7.5+5;                   // Int
    //$notaFilme = $somaDeNotas/5;                  // Float
    //$incluidoNoPlano = true;                      // Bool (true ou false)

    $genero = match ($nomeFilme) {
    'Top - Gun: Maverick' => 'Ação',
    'Thor: Ragnarok'      => 'Super-Herói',
    'Se beber não case'   => 'Comédia',
    default => 'Indefinido'
};

    $anoLancamento = $argv[2]  ?? 2022;      //2022;         // Int


    $somaDeNotas = 9;
    $somaDeNotas += 6;
    $somaDeNotas += 8;
    $somaDeNotas += 7.5;
    $somaDeNotas += 5;

    $notaFilme = $somaDeNotas/5;   // Float

    // Todas as variáveis começam com $.


    $PlanoPrime = true;
    

    $incluidoNoPlano = $PlanoPrime || $anoLancamento < 2000; 
    //Operador lógico "OU" (||): Se um dos dois for verdadeiro, o resultado é verdadeiro.
    //Operador lógico "E" (&&): Os dois precisam ser verdadeiros para o resultado ser verdadeiro.


    echo "\nOis, bem-vindo ao Screen Match! :D
    ";

    
    echo "\t"."Nome do Filme: $nomeFilme
    "; //Interpolação: Aceitar variável (") no texto. Haverá situações em que será preciso contatenar, nesse caso precisará usar as aspas simples (').
    echo "\t".'Ano de Lançamento: ' . $anoLancamento . "\n"
    ; //Isso é um exemplo de concatenação .
    echo "\t"."Nota do Filme: $notaFilme
    "; //Isso é um exemplo de interpolar.
    echo "\t"."Incluído no Plano? $incluidoNoPlano"."\n";
    //Aspas duplas: Interpreta ("); Já as aspas simples: Não interpreta (').
    echo "\t"."Gênero do Filme: $genero"."\n";


     if ($anoLancamento > 2022) {       //Se
        echo "\n"."\t".'Lançamento!
        ';
     }  elseif ($anoLancamento > 2020 && $anoLancamento <= 2022) {      //Senão se
        echo "\n"."\t".'Ainda é novo.
        ';
     }  else {      //Senão
        echo "\n"."\t".'Não é lançamento.
        ';
     }