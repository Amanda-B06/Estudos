Pessoa={
    "Nome":"Amanda",  
    "Idade": 19,
    "Peso": 47
}
Pessoa["Altura"]=1.60

print (Pessoa)
print (Pessoa ["Nome"])

print (Pessoa.keys())
print (Pessoa.values())
Pessoa["Peso"]=50
print(Pessoa)

del Pessoa["Idade"]
print(Pessoa)

print ("Nome" in Pessoa)
print (Pessoa)
print ("Idade" in Pessoa)
print (Pessoa)