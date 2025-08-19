programa {
   real Dist, Metr

  funcao inicio() {
     //Pergunta da distância
     escreva ("Digite uma distância em metros: ")
     leia (Metr)
     escreva ("A distância de ", Metr, "m corresponde a: \n")

     //Km
     Dist=Metr/1000
     escreva (Dist, "Km\n")

     //Hm
     Dist=Metr/100
     escreva (Dist, "Hm\n")

     //Dam
     Dist=Metr/10
     escreva (Dist, "Dam\n")

      escreva ("\n")

     //Dm
     Dist=Metr*10
     escreva (Dist, "Dm\n")

     //Cm
     Dist=Metr*100
     escreva (Dist, "Cm\n")

     //Mm
     Dist=Metr*1000
     escreva (Dist, "Mm\n")
 
  }
}
