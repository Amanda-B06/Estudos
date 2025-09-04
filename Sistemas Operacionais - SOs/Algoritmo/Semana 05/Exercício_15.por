programa {

  real peso, altura, imc

  funcao inicio() {
    //Pergunta do peso e altura.
   escreva ("Digite seu peso (Kg): ")
   leia (peso)

   escreva ("Digite sua altura (m): ")
   leia (altura)

   imc= peso/(altura*altura)

    //Saída
    escreva ("Seu IMC é: ", imc)

   
  }
}
