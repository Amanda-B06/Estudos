programa {

   real Salario, SalarioF, Aumento
   cadeia Funcionario

  funcao inicio() {
     //Pergunta do produto
      escreva ("Digite o nome do funcionário: ")
      leia (Funcionario)

     //Pergunta o preço
      escreva ("Digite o salário dele: ")
      leia (Salario)

     //Conta
      Aumento= Salario*0.15
      SalarioF= Salario+Aumento

     //Saída
      escreva ("O novo salário de ", Funcionario, " é de: R$", SalarioF)
 
  }
}
