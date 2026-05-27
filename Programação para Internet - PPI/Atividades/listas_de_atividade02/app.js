function ex001() {

  let texto = document.querySelector("h1");
  texto.textContent = ("Hora do Desafio!");

}


function ex002() {

  console.log("O botão foi clicado.");

}

function ex003() {

  alert("Eu amo JS!");

}

function ex004() {

  let cidade_brasil = prompt("Escolha qualquer cidade do Brasil");
  alert(`Estive em ${cidade_brasil} e lembrei de você.`);

}

function ex005() {

  let nota_01 = parseInt(prompt("Escolha um número inteiro: "));
  let nota_02 = parseInt(prompt("Escolha um número inteiro: "));

  let soma = nota_01 + nota_02;
  alert(`O resultado da soma é ${soma}`);
}


function ex006() {

  console.log("Olá Mundo!");
}

function ex007() {

  let nome = document.getElementById("inputEx07").value;
  console.log(`Olá, ${nome}`);
}

function ex008() {

  let nota_01 = document.getElementById("inputNumber2").value;

  let resultado = document.getElementById("resultado");
  let dobro = (nota_01 * 2);
  resultado.textContent = dobro;
}

function ex009() {

  let nota_01 = parseInt(document.getElementById("inputNumber_1").value);
  let nota_02 = parseInt(document.getElementById("inputNumber_2").value);
  let nota_03 = parseInt(document.getElementById("inputNumber_3").value);

  let media = (nota_01 + nota_02 + nota_03) / 3;
  let resultado = document.getElementById("resultado_09");
  resultado.textContent = media;
}

function ex010() {
  let nota_01 = parseInt(document.getElementById("Number1").value);
  let nota_02 = parseInt(document.getElementById("Number2").value);

  let resultadoo = document.getElementById("maioral")

  if (nota_01 > nota_02) {
    resultadoo.textContent = nota_01;
  }

  else {
    resultadoo.textContent = nota_02;
  }
}

function ex011() {

  let Number1 = parseInt(document.getElementById("Number11").value)

  let result = document.getElementById("resultado_11")
  let multi = (Number1 * Number1);

  result.textContent = multi;

}

function ex012() {
  let numero_01 = parseFloat(document.getElementById("inputAltura").value);
  let numero_02 = parseInt(document.getElementById("inputPeso").value);
  let resultado = document.getElementById("resultado_12")
  let imc = numero_02 / (numero_01 * numero_01);
  resultado.textContent = imc;

}

function ex013() {

  let number_01 = parseInt(document.getElementById("inputFatorial").value);
  let fatorial = 1;
  for (let i = 1; i <= number_01; i++) {
    fatorial *= i;

  }

  let resultado_13 = document.getElementById("resultado_13")
  resultado_13.textContent = fatorial;

}

function ex014() {

  let number_01 = parseFloat(document.getElementById("inputReais").value);

  let conversao = number_01 * 4.80;

  let resultado_14 = document.getElementById("resultado_14");
  resultado_14.textContent = conversao
}

function ex015() {


  let altura = parseFloat(document.getElementById("inputAltura").value)
  let largura = parseFloat(document.getElementById("inputLarg").value)

  let area = altura * largura;

  let perimetro = (altura * 2) + (largura * 2);

  let resultado_15 = document.getElementById("resultado_15");
  resultado_15.textContent = area;

  let resultado_15_1 = document.getElementById("resultado_15.1");
  resultado_15_1.textContent = perimetro;

}


function ex016() {



  let raio = parseFloat(document.getElementById("inputArea").value)

  let area = 3.14 * (raio * raio);

  let perimetro = 2 * 3.14 * raio;

  let resultado_16 = document.getElementById("resultado_16");
  resultado_16.textContent = area;

  let resultado_16_1 = document.getElementById("resultado_16.1");
  resultado_16_1.textContent = perimetro;


}

