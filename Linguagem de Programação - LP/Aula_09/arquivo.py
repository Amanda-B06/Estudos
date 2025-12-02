    #Manipulação de arquivos

#R - Read - Ler
#A - Append - Adicionar
#W - Write - Escrever (sobrescrever)

with open('dados.txt', 'w') as arquivo: #as: alias/apelido
    arquivo.write("Amanda.\n")

with open('dados.txt', 'r') as arquivo:
    conteudo=arquivo.read()
    print(conteudo)

with open('dados.txt', 'a') as arquivo:
    arquivo.write("Asmandin.\n")