programa {

    const real percentual_desconto=0.15
    cadeia nome_produto
    real preco_original, desconto, preco_final

  funcao inicio() {
    //Pergunta.
   escreva ("Nome do produto: ")
   leia (nome_produto)

   escreva ("Preço Original: ")
   leia (preco_original)

   
   //Conta

    desconto= preco_original*percentual_desconto
    preco_final= preco_original-desconto

   //Saída
    escreva ("- - - Preço Promocional - - -\n",
    "Produto: ", nome_produto, "\n",
    "Preço Original: ", preco_original, "\n",
    "Desconto (15.0%): R$", desconto, "\n",
    "Preço Final: R$ ", preco_final
    
      )

   
  }
}
