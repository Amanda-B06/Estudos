programa {

  real Velocidade_Carro
  real Custo_Multa

  funcao inicio() {

    escreva ("Policial: Qual a velocidade do seu veículo?: ")
    leia (Velocidade_Carro)

    se (Velocidade_Carro>80){
      
      Custo_Multa=(Velocidade_Carro-80)*5
      
      escreva ("Policial: Você será multado em R$", Custo_Multa,".",
      "\nQue fique de aviso.")
    }
     
    senao

        escreva ("Policial: Pode continuar. Perdão por interromper")
    
  }
}
