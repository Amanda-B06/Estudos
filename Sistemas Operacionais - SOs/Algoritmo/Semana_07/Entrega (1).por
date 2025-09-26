programa {

  const real Percentual_Desconto=0.10
  cadeia Cliente
  real Valor_Total_Produtos, Valor_Desconto, Valor_Final_Compra
  cadeia Forma_Pagamento
  logico Ganhou_Brinde

  funcao inicio() {

    //Perguntas
    escreva ("- - - Sistema de Caixa de Loja - - -",
    "\n Nome do Cliente: ")
    leia (Cliente)

    escreva ("Valor total dos produtos: R$")
    leia (Valor_Total_Produtos)

    escreva ("Forma de pagamento (PIX ou Cartão): ")
    leia (Forma_Pagamento)

    //Cálculo

    Valor_Desconto= Percentual_Desconto*Valor_Total_Produtos
    Valor_Final_Compra= Valor_Total_Produtos-Valor_Desconto

    Ganhou_Brinde= (Valor_Final_Compra>100.0 e Forma_Pagamento=="PIX")

    escreva ("\n- - - Recibo para Ana Souza - - -",
    "\n Valor dos Produtos: R$", Valor_Total_Produtos,
    "\n Desconto (10%): ", Valor_Desconto,
    "\n Valor Final da Compra: ", Valor_Final_Compra,
    "\n Forma de Pagamento: ", Forma_Pagamento,
    "\n Cliente ganhou brinde especial?: ", Ganhou_Brinde)
    
  }
}
