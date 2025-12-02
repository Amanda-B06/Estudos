nome = input("Digite seu nome: ")
idade = int(input("Digite sua idade: "))

with open('aula9.txt', 'w') as arquivo:
    arquivo.write(f"Nome: {nome}\n")
    arquivo.write(f"Idade: {idade}\n")

