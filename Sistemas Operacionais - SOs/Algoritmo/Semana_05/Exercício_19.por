programa {

    real nota_1, nota_2, nota_3, soma, media

  funcao inicio() {
    //Pergunta.
   escreva ("Digite o primeiro valor: ")
   leia (nota_1)

   escreva ("Digite o segundo valor: ")
   leia (nota_2)

   escreva ("Digite o terceiro valor: ")
   leia (nota_3)

   
   //Conta

    soma= nota_1+nota_2+nota_3
    media= soma/3

   //Saída
    escreva ("- - - Resultados - - -\n",
    "Valores: ", nota_1, " , ", nota_2, " , ", nota_3,"\n",
    "Soma Total: ", soma, "\n",
    "Média: ", media
    
      )

   
  }
}
