programa {

    real nota_01, nota_02, media
    cadeia nome_aluno
    logico nota_final

  funcao inicio() {

      //perguntas do nome e notas
    escreva ("- - - Escolinha Hortinho Belenzinho - - -",
    "\n Nome do aluno(a): ")
    leia (nome_aluno)

    escreva (" Primeira nota: ")
    leia (nota_01)

    escreva (" Segunda nota: ")
    leia (nota_02)

      //Calculos
    media = (nota_01 * nota_02)/2
    nota_final = media > 7.0

      //Saída
    se (media>7.0) {
      escreva ("\n Média: ", media,
      "\n Teve um bom aproveitamento?: ", nota_final)
    }

    senao
      escreva ("\n Média: ", media,
      "\n Teve um bom aproveitamento?: ", nota_final)
    
  }
}
