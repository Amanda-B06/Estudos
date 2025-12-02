        #Prova 29/09/2025

#5 -

try:
    a = int (input ("Numerador: "))

    b = int (input ("Denominador: "))

    d = a / b

except ZeroDivisionError:
    print ("Não é possível dividir um número por zero.")


else:
    print (f"O resultado é {d}.")

                