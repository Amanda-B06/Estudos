        #Prova 29/09/2025

#4 -
nome = input("Digite seu nome: ")
nomes = str (input("Digite outro nome: "))
nomess = str (input("Digite mais um nome: "))


with open('alunos.txt', 'w') as arquivo:
    arquivo.write(f"Nome: {nome}\n")
    arquivo.write(f"Nome: {nomes}\n")
    arquivo.write(f"Nome: {nomess}\n")
