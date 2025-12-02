
try:
    a = int (input ("Numerador: "))

    b = int (input ("Denominador: "))

    d = a / b

except ZeroDivisionError:
    print ("Não é possível dividir um número por zero.") #Esse vai ser executado se der erro

except ValueError:
    print ("Valor inválido. Digite apenas números inteiros.") #Esse vai ser executado se der erro

else:
    print (f"O resultado é {d}.") #Esse vai ser executado se der certo
    #Sempre que quiser aparecer a variável, cololoque o f antes das aspas

finally:
    print ("O programa foi executado.") #Esse vai ser executado de qualquer jeito