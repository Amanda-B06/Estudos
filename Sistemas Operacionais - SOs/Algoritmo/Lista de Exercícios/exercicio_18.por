programa {

    inteiro ano_nascimento, idade_necessaria

  funcao inicio() {

    escreva("- - - Governo Brasileiro - - -",
    "\n Qual a sua data de nascimento?: ")
    leia (ano_nascimento)

    idade_necessaria=2025-ano_nascimento

    se (idade_necessaria>=16) {
      escreva ("- - - Governo Informa: - - -",
      "\n Parabéns, você já pode votar!.")
    }

    senao
      escreva ("- - - Governo Informa: - - -",
      "\n Você não pode votar!.")
    
  }
}
