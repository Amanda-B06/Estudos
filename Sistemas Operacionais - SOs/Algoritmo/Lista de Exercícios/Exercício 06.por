programa {
   inteiro Num1, Antecessor, Sucessor

  funcao inicio() {
    //Pergunta para o número
    escreva ("Digite um número: ")
    leia (Num1)
     
    //O antecessor
    Antecessor=Num1-1
    escreva ("O antecessor de ", Num1, " é: ", Antecessor, ".\n")
 
    //O sucessor
    Sucessor=Num1+1
    escreva ("O sucessor de ", Num1, " é: ", Sucessor, ".")
  }
}
