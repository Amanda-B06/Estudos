programa {

    cadeia nome_cliente, sexo_cliente
    const cadeia sexo_feminino = "Feminino"
    real valor_compra, valor_final, valor_desconto

  funcao inicio() {

    escreva("- - - Lojinha da Abelhinha - - -")
      escreva ("\nQual o nome do cliente?: ")
      leia (nome_cliente)

    escreva ("Qual o sexo dele(a)?: ")
      leia (sexo_cliente)

    escreva ("Qual o valor das compras?: ")
      leia (valor_compra)

    se (sexo_cliente==sexo_feminino) {
      valor_desconto = (valor_compra * 0.13)
      valor_final = valor_compra - valor_desconto

      escreva ("- - - Lojinha da Abelhinha - - -",
      "\n Nome do cliente: ", nome_cliente,
      "\n Sexo do cliente: ", sexo_cliente,
      "\n Valor da compra: ", valor_compra,
      "\n Desconto (13%). Valor final: ", valor_final)

    }

    senao
      valor_desconto = (valor_compra * 0.05)
      valor_final = valor_compra - valor_desconto

      escreva ("- - - Lojinha da Abelhinha - - -",
      "\n Nome do cliente: ", nome_cliente,
      "\n Sexo do cliente: ", sexo_cliente,
      "\n Valor da compra: ", valor_compra,
      "\n Desconto (5%). Valor final: ", valor_final)
  }
}
