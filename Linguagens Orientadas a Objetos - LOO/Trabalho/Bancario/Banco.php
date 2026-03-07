<?php

$Saldo = 1967.37;
$Titular = 'Prentys Assis';

echo "Bem-Vindo. ${$Titular}.",'\n';

do {
echo "******************************\n";
echo "Escolha opção no menu abaixo. \n";
echo "1 - Consultar Saldo.  \n";
echo "2 - Sacar.    \n";
echo "3 - Depositar.    \n";
echo "4 - Adeus.    \n";
echo "******************************\n";

$opcao = $argv[1] ?? 5;

    $opcao = (float) fgets (STDIN);

switch ($opcao) {
    case 1:
        echo "\t    Você escolheu Consultar Saldo!    \n";
        echo "\t    Seu saldo atual é: ${Saldo}";
        break;



    case 2:
        echo "\t    Você escolheu Sacar!  \n";
        echo "\t    Qual valor deseja sacar?  \n";
        $Saque = (float) fgets (STDIN);
        
        if ($Saque>$Saldo){
            echo "\t    Saldo Insuficiente."
        ;}
        
        else {
            $Saldo = $Saldo - $Saque;
            echo "Saque feito com sucesso! Saldo atual: {$Saldo}";
        }
        break;



    case 3:
        echo "\t    Você escolheu Depositar!  \n";
        echo "\t    Qual valor deseja depositar?  \n";


        $Deposito = (float) fgets (STDIN);

        if ($Deposito < 0) {
            echo "\t    Error! Impossível adicionar números negativos.";
        }

        else {
            ($Valor_Final = $Deposito + $Saldo );
            echo "\t    Parabéns! Valor ${Deposito} concluída. Valor atual: ${Valor_Final}";
        }

        break;
    case 4:
        echo "\t    Você escolheu Adeus. Tchau, até logo.\n";
        break;
    default:
        echo "\t    Opção inválida\n";
}


    // Bloco executado pelo menos uma vez, mesmo que a condição seja falsa
   
    echo "\t    Entrou no bloco do-while\n";
    // atualiza a condição para demonstrar repetição
    
    $condicao = false;
} while ($condicao);