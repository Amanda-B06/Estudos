programa {

   real Dias, Horas, HoraTrab, Salario, Total

   funcao inicio() {
    Horas=8
    HoraTrab=25

     //Pergunta do produto
      escreva ("Digite os dias trabalhados: ")
      leia (Dias)

  
     //Conta
      Salario= Horas*HoraTrab
      Total= Dias*Salario
      
     //Saída
      escreva ("O salário do funcionário é: R$", Total)
 
  }
}
