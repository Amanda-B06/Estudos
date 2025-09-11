programa {

  funcao inicio() {
    //Isso aqui é as variáveis
     cadeia Produto_1, Produto_2

     inteiro Quantidade_1, Quantidade_2

     real Preco_1, Preco_2, Subtotall, Subtotall2, Total

     //Isso aqui é as boas vindas
     escreva ("--- Supermercado Preço Bom ---\n")
     escreva ("Vamos registrar sua compra!\n")

     //Primeiro produto
     escreva ("\n")
     escreva ("--- PRODUTO 1 ---\n")
     escreva ("Digite o nome do produto: ")
     leia (Produto_1)
     escreva ("Digite a quantidade: ")
     leia (Quantidade_1)
     escreva ("Digite o preço unitário: ")
     leia (Preco_1)

      //Segundo produto
     escreva ("\n")
     escreva ("--- PRODUTO 2 ---\n")
     escreva ("Digite o nome do produto: ")
     leia (Produto_2)
     escreva ("Digite a quantidade: ")
     leia (Quantidade_2)
     escreva ("Digite o preço unitário: ")
     leia (Preco_2)

     //Recibo da compra
     escreva ("--- RECIDO DA COMPRA ---\n")
     escreva ("Item: ",Produto_1,"\n")
     Subtotall=Quantidade_1*Preco_1
     escreva ("Qtde: ",Quantidade_1,"| Preço Unit: ",Preco_1,"| Subtotal: ",Subtotall,"\n")

     escreva ("Item: ",Produto_2,"\n")
     Subtotall2=Quantidade_2*Preco_2
     escreva ("Qtde: ",Quantidade_2,"| Preço Unit: ",Preco_2,"| Subtotal: ",Subtotall2,"\n") 
    
    //Valor total
     escreva ("---------------------------------\n")
     Total=Subtotall+Subtotall2
     escreva ("VALOR TOTAL DA COMPRA: R$ ",Total,"\n")
     escreva ("---------------------------------\n")
  }
}
