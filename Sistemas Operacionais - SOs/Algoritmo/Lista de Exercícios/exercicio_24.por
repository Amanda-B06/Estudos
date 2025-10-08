programa {

    real km_pecorrido, valor_pago

  funcao inicio() {

    escreva ("Qual a distância que deseja percorrer?: ")
    leia (km_pecorrido)

    se (km_pecorrido<200) {
      
      valor_pago = km_pecorrido * 0.50
      
      escreva ("Valor total a pagar: ", valor_pago)
    }

      senao
      valor_pago = km_pecorrido * 0.45

      escreva ("Valor total a pagar: ", valor_pago)

    
  }
}
