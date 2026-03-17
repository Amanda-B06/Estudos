<?php 
   // Todas as variáveis começam com $..

   require __DIR__. "/funcoes.php";


   $nomeFilme = 'Thor: Ragnarok';                 // String
      //Operador de coalensência Nula (??).
      //$somaDeNotas = 9+6+8+7.5+5;               // Int
      //$notaFilme = $somaDeNotas/5;              // Float
      //$incluidoNoPlano = true;                  // Bool (true ou false)

   $genero = match ($nomeFilme) {
      'Top - Gun: Maverick' => 'Ação',
      'Thor: Ragnarok'      => 'Super-Herói',
      'Se beber não case'   => 'Comédia',
      default => 'Indefinido'
   };


   $anoLancamento = 2021;  // Int

   $qntddNotas = ($argc-1) == 0 ? 1 : ($argc-1);
   $notas = [];
      for ($i = 1; $i < $argc; $contador++){
      $notas[] = (float) $argv[$i]; 
   };

   $somaDeNotas = 0;


   //Para cada indice em $Notas, você dá o nome de $Nota, depois $somaDeNotas vai ser incrementado a cada $Nota.
   //foreach ($Notas as $Nota) {
   // $somaDeNotas += $Nota;
   // };
   //for ($i = 0; $i < count($Notas); $i++){



   //   $somaDeNotas += $Notas[$i];
   //};  //Count() é uma função que conta o número de elementos em um array.


   $notaFilme = array_sum($notas) / $qntddNotas;   // arrat_sum() é uma função que soma os valores de um array.

   $planoPrime = true;

   $incluiNoPrime = $planoPrime || $anoLancamento < 2000; 
   //Operador lógico "OU" (||): Se um dos dois for verdadeiro, o resultado é verdadeiro.
   //Operador lógico "E" (&&): Os dois precisam ser verdadeiros para o resultado ser verdadeiro.



      echo "\nOis, bem-vindo ao Screen Match! :D
      ";

      
      echo "\t"."Nome do Filme: $nomeFilme";    //Interpolação: Aceitar variável (") no texto. Haverá situações em que será preciso contatenar, nesse caso precisará usar as aspas simples (').
      echo "\t".'Ano de Lançamento: ' .$anoLancamento. "\n";   //Isso é um exemplo de concatenação .
      echo "\t"."Nota do Filme: $notaFilme";    //Isso é um exemplo de interpolar.
      echo "\t"."Incluído no Plano? $incluidoNoPlano". "\n";   //Aspas duplas: Interpreta ("); Já as aspas simples: Não interpreta (').
      echo "\t"."Gênero do Filme: $genero"."\n";
      exibeAnoLancamento($anoLancamento);

   $filme = [
      'Nome: '          => "Thor: Ragnarok", 
      'Ano: '           => 2021, 
      'Nota do Filme: ' => 7.1, 
      'Gênero: '        => "Super-Herói"
   ];

   //var_dump() é uma função que exibe informações sobre uma variável, incluindo seu tipo e valor.

   echo 'Notas: '."\n";
   var_dump($notas);
   echo $argc;