programa {

      real ano_escolhido


  funcao inicio() {

    escreva ("Escolha um ano aleatório: ")
    leia (ano_escolhido)

    se (ano_escolhido %4==0){
      escreva ("Este ano foi/será bissextos.")
      }

    senao
      escreva ("Este ano foi/será normal.")
    
  }
}
