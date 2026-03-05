alert ('Olá! Bem Vindos ao Jogo do Número Secreto!'); //Abertura do jogo.

let NumeroMaximo = prompt (`Escolha um número máximo para o jogo:`); //Declaração da variável para o número máximo do jogo, usando prompt para o usuário escolher.


let NumeroSecreto = parseInt(Math.random() * NumeroMaximo);  //Declaração da variável para o número secreto, a função Math.random() é pra gerar um número aleatório entre 0 e o número máximo escolhido pelo usuário.

//parseInt é usado para converter o número gerado em um número inteiro, já que Math.random() só gera um número decimal.



let Chute;  //Declaração da variável para o chute do usuário.
let tentativas = 1; //Declaração da quntidade de tentativa.

while (Chute != NumeroSecreto) { //Estrutura de repetição para o usuário chutar o número secreto, enquanto o chute for diferente do número secreto, o jogo continua.

    let Chute = prompt (`Escolha um número de 0 a ${NumeroMaximo}:`); //Declaração da variável para o chute do usuário, usando prompt para o usuário escolher um número entre 0 e o número máximo escolhido anteriormente.

    if (Chute == NumeroSecreto) { //Estrutura de decisão para verificar se o chute do usuário é igual ao número secreto, se for igual, o jogo termina, se não for, o jogo continua.
        break //Quebra o loop, fim do jogo.


    }   else { //Se for diferente, o jogo continua, se não for, o jogo termina.


        tentativas++ //Incrementa a quantidade de tentativas, toda vez que o usuário errar o chute, a quantidade de tentativas aumenta em 1.
        

        if (Chute > NumeroSecreto) { //Estrutura de decisão para verificar se o chute do usuário é maior ou menor que o número secreto, se for maior, o jogo continua, se for menor, o jogo continua.
        alert (`O número secreto é menor que ${Chute}. Besta hahhaha`);
        } else {
        alert (`O número secreto é maior que ${Chute}. Otário >XD.`);
        }
    }
}

//Operador Yernário


let PalavraTentativa = tentativas == 1 ? 'tentativa' : 'tentativas'; 
//Variável para a palavra tentativa, usando o operador ternário para verificar se a quantidade de tentativas é igual a 1, se for igual, a palavra tentativa é no singular, se for diferente, a palavra tentativa é no plural.

alert (`O número descobriu o número secreto! ( ${NumeroSecreto} ), com ${tentativas} ${PalavraTentativa}`);  //Usar crase para usar a variável dentro da string.
