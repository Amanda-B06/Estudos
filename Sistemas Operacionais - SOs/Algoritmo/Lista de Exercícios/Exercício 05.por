programa {
   real Nota1, Nota2, Media

  funcao inicio() {
    //Pergunta para a primeira nota
    escreva ("Nota 1: ")
    leia (Nota1)
     
    //Pergunta para a segunda nota
    escreva ("Nota 2: ")
    leia (Nota2)
 
    //Cálculo dos números
    Media=Nota1+Nota2/2

    //Saída do cálculo
    escreva ("A média entre ", Nota1, " e ", Nota2, " é igual a ", Media, ".")
  }
}
