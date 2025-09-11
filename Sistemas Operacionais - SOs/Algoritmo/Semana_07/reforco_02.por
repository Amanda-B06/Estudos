programa {

  real produto_A, produto_B
  logico verificacao, verificacao_2

  funcao inicio() {

    //Perguntas
      escreva ("Preço do Produto A: ")
       leia (produto_A)

      escreva ("Preço do Produto A: ")
        leia (produto_B)

    //Verificação lógica
      verificacao = produto_A < produto_B
      verificacao_2 = produto_A == produto_B

    //Saída
     escreva (" O Produto A é mais barato que B?: ", verificacao,
     "\n Os preços são iguais?: ", verificacao_2)
  }
}
