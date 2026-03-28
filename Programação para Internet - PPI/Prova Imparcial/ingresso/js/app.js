

function comprar(){

 let qtd =parseInt (document.getElementById('qtd').value);
 let tipo = document.getElementById('tipo-ingresso').value;
 
 if(tipo == 'pista'){
    compraPista(qtd);
    
 } else if(tipo == 'inferior'){
    compracadeiraInferior(qtd);
    
 } else {
    compracadeiraSuperior(qtd);
    
 }


}

function compraPista(qtd){
    let ingresso =parseInt (document.getElementById('qtd-pista').textContent);
    if(qtd <  ingresso){ 
     let subtracao =  ingresso - qtd;

        alert("compra realizada com sucesso");
    let resultado = document.getElementById('qtd-pista');
     resultado.innerHTML = `<span id="qtd-pista">${subtracao}</span> `
        

    } else{
        alert("quantidade insuficiente")
    }


}

function compracadeiraInferior(qtd){
    let ingresso =parseInt (document.getElementById('qtd-inferior').textContent);
    if(qtd <  ingresso){ 
     let subtracao =  ingresso - qtd;

        alert("compra realizada com sucesso");
    let resultado = document.getElementById('qtd-inferior');
     resultado.innerHTML = `<span id="qtd-inferior">${subtracao}</span> `
        

    } else{
        alert("quantidade insuficiente")
    }


}

function compracadeiraSuperior(qtd){
    let ingresso =parseInt (document.getElementById('qtd-superior').textContent);
    if(qtd <  ingresso){ 
     let subtracao =  ingresso - qtd;

        alert("compra realizada com sucesso");
    let resultado = document.getElementById('qtd-superior');
     resultado.innerHTML = `<span id="qtd-superior">${subtracao}</span> `
        

    } else{
        alert("quantidade insuficiente")
    }


}
