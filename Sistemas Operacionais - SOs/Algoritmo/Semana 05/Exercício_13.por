programa {
   real combustivel, consumo, distancia, custo_total

  funcao inicio() {
    //Perguntas do combustível, consumo e distância.
   escreva ("Preço do combustível (R$L): ")
   leia (combustivel)

   escreva ("Consumo do carro (Km/L): ")
   leia (consumo)

   escreva ("Distância da viagem (Km): ")
   leia (distancia)

   //Cálculo do custo total
   custo_total= distancia/(consumo/combustivel)

   //Saída
   escreva ("O custo total da viagem será de R$ ", custo_total)
  }
}
