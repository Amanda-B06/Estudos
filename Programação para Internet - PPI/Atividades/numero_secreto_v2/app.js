//let titulo = document.querySelector('h1');
//titulo.innerHTML = 'Jogo do Número Secreto'

//let paragrafo = document.querySelector('p');
//paragrafo.innerHTML = 'Olá! Sejam bem-vindos ao Jogo do Número Secreto.';


function exibeMensagemInicial(tag, texto) {

    let campo = document.querySelector(tag);
    campo.innerHTML = (texto);

}

let tentativas = 1;

function mensagemInicio(){
exibeMensagemInicial ('h1', 'Jogo do Número Secreto.');
exibeMensagemInicial ('p', 'Por favor, escolha um número de 0 a 10');
}

mensagemInicio ();

numeroSecreto = gerarNumeroSecreto();

function gerarNumeroSecreto(){
    return parseInt(Math.random()*10+1);
}


function verificar_chute(){
    let chute = document.querySelector('input').value;
        if (chute == numeroSecreto){

            exibeMensagemInicial('h1', 'Acertou!');
            let palavraTentativa = tentativas == 1 ? 'tentativa':'tentativas';
            let mensagemTentativa = `Parabéns, você descobriu o Número Secreto, ${numeroSecreto}. Com ${tentativas} ${palavraTentativa}`
            exibeMensagemInicial('p', mensagemTentativa);
            document.getElementById('reiniciar').removeAttribute('disabled');

        }  else{
            tentativas++;
            if(chute > numeroSecreto){
                exibeMensagemInicial('p', 'O número secreto é Menor.');
            }else {
                 exibeMensagemInicial('p', 'O número secreto é Maior.');
            }

            limparCampo ()
        }
}

function limparCampo(){
    chute = document.querySelector('input');
    chute.value = '';
}


function novoJogo(){
    mensagemInicio();
    gerarNumeroSecreto();
    tentativas = 1;
    limparCampo();
    document.getElementById('reiniciar').setAttribute('disabled', true);
}