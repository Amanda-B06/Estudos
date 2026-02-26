<?php 
      // Todas as variáveis começam com $..

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

      $anoLancamento = 2021;                       // Int


   $QntddNotas = ($argc-1);

   $Notas = [];

   for ($i = 1; $i < $argc; $i++){
         $Notas[] = (float) $argv[$i]; 
      };

   $somaDeNotas = 0;


      //Para cada indice em $Notas, você dá o nome de $Nota, depois $somaDeNotas vai ser incrementado a cada $Nota.
   //foreach ($Notas as $Nota) {
        // $somaDeNotas += $Nota;
     // };


      //for ($i = 0; $i < count($Notas); $i++){
      //   $somaDeNotas += $Notas[$i];
      //};  //Count() é uma função que conta o número de elementos em um array.


      $notaFilme =  array_sum($Notas) / $QntddNotas;   // arrat_sum() é uma função que soma os valores de um array.

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

   $Filme = [
      'Nome: '          => "Thor: Ragnarok", 
      'Ano: '           => 2021, 
      'Nota do Filme: ' => 7.1, 
      'Gênero: '        => "Super-Herói"
   
   ];

      //var_dump() é uma função que exibe informações sobre uma variável, incluindo seu tipo e valor.

   echo 'Notas: '."\n";
   var_dump($Notas);
   echo $argc;