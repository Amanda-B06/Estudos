    function sortear(){

        let quantidade = parseInt(document.getElementById('quantidade').value);
        let de = parseInt(document.getElementById('de').value);
        let ate = parseInt(document.getElementById('ate').value);

        
        let numero;
        let sortear = [];
        let somaDeAte = ate - de;


            if(somaDeAte > quantidade){
                for(let i = 0; i < quantidade; i++){
                numero = gerarNumeroAleatorio(de, ate);
                while(sortear.includes(numero)){
                numero = gerarNumeroAleatorio(de,ate);
                }
                sortear.push(numero);
                }
                let resultado = document.getElementById('resultado');
                resultado.innerHTML = `<label class="texto__paragrafo"> Números sorteados: ${sortear} </label>`;
                alterarStatusBotao()
            }else(
                alert("Error! Algo está errado. Por favor, preste atenção ao preencher os campos corretamente.")
            )

    }

    function reiniciarJogo(){
        document.getElementById ('quantidade').value = '';
        document.getElementById ('de').value = '';
        document.getElementById ('ate').value = '';
        document.getElementById ('resultado').innerHTML = `<label class="texto__paragrafo"> Números sorteados: nenhuma ate agora </label>`;
        alterarStatusBotao()
    }

    function alterarStatusBotao(){
        let botao = document.getElementById('btn-reiniciar');
        if(botao.classList.contains('container__botao-desabilitado')){
            botao.classList.remove('container__botao-desabilitado');
            botao.classList.add('container__botao'); 
        }else{
            botao.classList.add('container__botao-desabilitado');
            botao.classList.remove('container__botao'); 

        }
    }

    function gerarNumeroAleatorio(max, min){

        return Math.floor(Math.random() * (max - min + 1)) + min;

    }