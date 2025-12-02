#Km, Dias.
#60 por dia, 0.15 por km

#Pergunta dos Km percorridos.
Dist=int (input("Quantos Km o carro pecorreu?: "))

#Pergunta dos dias alugados.
Days=int (input("Quantos dias ele foi alugado?: "))

#Cálculos.
Total=(Days*60)+(Dist*0.15)

#Saída.
print (f"O(s) dias que o carro foi alugado: {Days} dias e os Km percorridos foram {Dist}. O valor total foi de: R${Total}")

