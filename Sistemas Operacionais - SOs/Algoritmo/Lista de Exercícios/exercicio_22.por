programa {

    inteiro ano_nascimento, anos_faltando, idade
    const inteiro ano_maioridade = 18

  funcao inicio() {

      escreva ("Qual o ano que você nasceu?: ")
      leia (ano_nascimento)

        idade=2025-ano_nascimento

      se (idade<ano_maioridade) {
        anos_faltando = ano_maioridade - idade

        escreva ("Você não está ápito para se alistar. Faltam ", anos_faltando , " ano(s).")
      }

      senao
        escreva ("Parabéns, vai ser chamado para se alistar! Vai ficar pintando meio-fio da calçada.")
    
  }
}
