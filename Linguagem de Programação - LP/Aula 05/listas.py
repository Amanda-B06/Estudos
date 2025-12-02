#Aula de hoje: Criar listas
numero = [2,5,10,1,4,9,22,100,3]

print (len (numero)) #Len: Tamanho da lista

print (min (numero)) #Min: O menor valor da lista

print (max (numero)) #Max: O maior valor da lista

print (sum (numero)) #Sum: Obviamente ele soma todos os números da lista

print (sorted (numero)) #Sorted: Ele organiza os números da lista

print (sorted(numero, reverse=True)) #Reverse=True: Ordem decrescente


print (numero[5])

print (100 in numero) #in: Se o número descrito tiver na lista vai aparecer true
print (0 in numero) #Se não tiver= false

print (numero)

print (numero [2:8]) #[:]: O primeiro número aí é onde começa no vetor e quando termina

print (numero [2:]) #Mesma coisa, porém se não especificar o terminal o programa vai usar o resto da lista

del (numero[1]) #Del: Ele deleta o numero desse vetor
print (numero)

numero.append(101) #Append: Ele adiciona números
print (numero)