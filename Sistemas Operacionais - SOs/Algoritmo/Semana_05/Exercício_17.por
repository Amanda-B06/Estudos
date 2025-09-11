programa {

  cadeia nome
  real peso, peso_total
  inteiro quantidade

  funcao inicio() {
    //Pergunta.
   escreva ("Nome do item: ")
   leia (nome)

   escreva ("Peso unitário (Oz): ")
   leia (peso)

   escreva ("Quantidade em posse: ")
   leia (quantidade)
   
   //Conta

    peso_total= peso*quantidade

   //Saída
    escreva ("- - - Detalhes do Item - - -\n",
    "Item: ", nome, "\n",
    "Quantidade: ", quantidade,"\n",
    "Peso Unitário: ", peso, " Oz\n",
    "Peso Total: ", peso_total, " Oz"
    
    
    
    
    )

   
  }
}
