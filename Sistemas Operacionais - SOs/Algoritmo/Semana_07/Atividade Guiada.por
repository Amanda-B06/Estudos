programa {

  real nota_prova, nota_trabalho, media_semestral
  logico atingiu_media_minima
  const real media_aprovacao=7.0

  funcao inicio() {

    //Perguntas
    escreva ("Qual a nota da prova?: ")
      leia (nota_prova)

    escreva ("Qual a nota do trabalho?: ")
      leia (nota_trabalho)

    //Cálculos
    media_semestral= (nota_prova+nota_trabalho)/2

    //Verificação lógica
    atingiu_media_minima= media_semestral>=media_aprovacao

    //Saída
    escreva ("\n - - - Boletim do Aluno - - - \n",
    " Nota da Prova: ", nota_prova,
    "\n Nota do Trabalho: ", nota_trabalho,
    "\n Média Semestral Calculada: ", media_semestral,
    "\n Atingiu a média de aprovação ", media_aprovacao, "?: ", atingiu_media_minima)
  }
}
