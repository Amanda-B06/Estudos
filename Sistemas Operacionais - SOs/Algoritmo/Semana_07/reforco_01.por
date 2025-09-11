programa {

  inteiro num_1, num_2
  logico verificacao

  funcao inicio() {

    //Perguntas
    escreva ("Digite o primeiro número inteiro: ")
      leia (num_1)

    escreva ("Digite o segundo número inteiro: ")
      leia (num_2)

    //Verificação lógica
      verificacao = (num_1 % num_2) == 0

    //Saída
    escreva ("O primeiro é múltiplo do segundo?: ", verificacao)
  }
}
