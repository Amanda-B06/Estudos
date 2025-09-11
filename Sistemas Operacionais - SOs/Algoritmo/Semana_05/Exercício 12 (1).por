programa {
  real Celsius, Formula

  funcao inicio() {
    
      escreva ("Digite a temperatura em Celsius: ")
      leia (Celsius)

      Formula= (Celsius*9.0/5.0) + 32

      escreva ("Temperatura em Celsius: ", Celsius, " C \n",
      "Temperatura em Fahrenheit: ", Formula, " F")
  }
}
