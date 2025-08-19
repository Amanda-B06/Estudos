programa {

   real Largura, Altura, AreaF, Litros

  funcao inicio() {
     //Pergunta a largura da área
     escreva ("Qual a largura da sua área?: ")
     leia (Largura)

     //Pergunta a altura da área
     escreva ("E qual a altura?: ")
     leia (Altura)

     //Conta
      AreaF= Largura*Altura
      Litros= AreaF/2
      
     //Saída
      escreva ("A área a ser pintada é ", AreaF, " com ", Litros, " litros de tinta.")
 
  }
}
