programa {

   real Preco, Desc, PrecoF
   cadeia Produto

  funcao inicio() {
     //Pergunta do produto
      escreva ("Digite o produto: ")
      leia (Produto)

     //Pergunta o preço
      escreva ("Digite o valor do produto: ")
      leia (Preco)

     //Conta
      Desc= Preco*0.05
      PrecoF= Preco-Desc

     //Saída
      escreva ("O valor de ", Produto, " = ", PrecoF)
 
  }
}
