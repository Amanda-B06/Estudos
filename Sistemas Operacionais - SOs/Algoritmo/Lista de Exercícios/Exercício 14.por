programa {

   real Km, Dias, Total, Carro, KmRodado

   funcao inicio() {
    Carro=90
    KmRodado=0.20

     //Pergunta do produto
      escreva ("Digite os Km pecorridos: ")
      leia (Km)

     //Pergunta o preço
      escreva ("Digite os dias que o carro foi alugado: ")
      leia (Dias)

     //Conta (Carro: 90 por dia. Km:0.20)
      Total= (KmRodado*Km)+(Carro*Dias)

     //Saída
      escreva ("Preço total a pagar: R$", Total)
 
  }
}
