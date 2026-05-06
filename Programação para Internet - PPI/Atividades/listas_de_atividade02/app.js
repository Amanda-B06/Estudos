function ex001() {

  let texto = document.querySelector("h1");
  texto.textContent = ("Hora do Desafio!");

}


function ex002() {

  console.log ("O botão foi clicado.");

}

function ex003() {

  alert ("Eu amo JS!");

}

function ex004() {

  let cidade_brasil = prompt ("Escolha qualquer cidade do Brasil");
  alert (`Estive em ${cidade_brasil} e lembrei de você.`);

}

function ex005() {

  let nota_01 = parseInt(prompt("Escolha um número inteiro: "));
  let nota_02 = parseInt(prompt("Escolha um número inteiro: "));

  let soma = nota_01 + nota_02;
  alert (`O resultado da soma é ${soma}`);
}


function ex006() {

  console.log ("Olá Mundo!");
}

function ex007() {

  let nome = document.getElementById("inputEx07").value;
  console.log (`Olá, ${nome}`);
}

function ex008() {

  let nota_01 = document.getElementById("inputNumber2").value;

  let resultado = document.getElementById("resultado");
  let dobro = (nota_01*2);
  resultado.textContent = dobro;
}

function ex009() {

  let nota_01 = parseInt(document.getElementById("inputNumber1")).value;
  let nota_02 = parseInt(document.getElementById("inputNumber2")).value;
  let nota_03 = parseInt(document.getElementById("inputNumber3")).value;
 
  let resultado = document.getElementById("resultado2");
  let media = (nota_01+nota_02+nota_03)/3;
  resultado.textContent = media;
}