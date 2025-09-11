programa {

  const cadeia nome_magia= "Energy Beam"
  const inteiro custo_magia= 20
  inteiro quantidade
  real total_mana

  funcao inicio() {
    //Pergunta.
   escreva ("- - - Calculadora de Custo de Mana (Magia: Energy Beam) - - -\n")
   escreva ("Quantas vezes você pretende lançar a magia 'Energy Beam'?: ")
   leia (quantidade)
   
   //Conta
   total_mana=quantidade*custo_magia

   //Saída
    escreva ("Para lançar a magia ", nome_magia , " ", quantidade , " vez(es), você gastará: ", total_mana , " de mana.")

   
  }
}
