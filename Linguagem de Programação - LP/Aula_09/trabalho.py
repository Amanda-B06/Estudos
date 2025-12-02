try:
    numero_a = int(input("Digite um número inteiro: "))

except ValueError:
    print("Entrada inválida. Tente novamente.")

else:
    print("Número válido.")

finally:
    print("O programa foi executado com sucesso.")