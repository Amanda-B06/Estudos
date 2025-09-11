programa {

     //Cosntantes
    const cadeia nome_mosntro_padrao = "Cyclops"
    const real xp_por_monstro = 150
    const real gp_medio_por_monstro = 25.50
    const real peso_loot_medio_por_mosntro = 3.2

    //Não constantes
   cadeia nome_jogador
    inteiro quantidade_derrotados
   real tempo_gasto, custo_suprimentos

      //Não constantes- Resultado
    inteiro xp_total
    real gp_total, peso_total, lucro_cacada, xp_por_hora, gp_por_hora

  funcao inicio() {
    
      //Perguntas
    
    escreva ("\n- - - Relatório Detalhado de Caçada no Tibia - - -\n",
    "Mosntro Caçado: ", nome_mosntro_padrao, "\n\n")

    escreva ("Nome do seu Personagem: ")
    leia (nome_jogador)

    escreva ("Quantos ", nome_mosntro_padrao, " você derrotou?: ")
    leia (quantidade_derrotados)

    escreva ("Tempo total gasto na caçada (em horas, ex: 1.5 para 1h30min): ")
    leia (tempo_gasto)

    escreva ("Custo total dos suprimentos (poções, etc.) em GPs: ")
    leia (custo_suprimentos)

    //Cálculos

    xp_total= quantidade_derrotados*xp_por_monstro

    gp_total= quantidade_derrotados*gp_medio_por_monstro

    peso_total= quantidade_derrotados*peso_loot_medio_por_mosntro

    lucro_cacada= gp_total-custo_suprimentos

    xp_por_hora= xp_total/tempo_gasto

    gp_por_hora=  gp_total/tempo_gasto

    //Saída
   
    escreva ("\n- - - Relatório da Caçada de Paladino Aventureiro - - -\n",
    "Mosntro Focado: ", nome_mosntro_padrao,
    "\nQuantidade Derrotada: ", quantidade_derrotados,
    "\nTempo da Caçada: ", tempo_gasto,
    "\n---------------------------------------------------\n",
    "\nXP Total Ganhada: ", xp_total,
    "\nGP Total Estimado Coletado: ", gp_total,
    "\nPeso Estimado do Loot: ", peso_total,
    "\n---------------------------------------------------\n",
    "Custo dos Suprimentos: ", custo_suprimentos, " GPs\n",
    "Lucro/Prejuízo Estimado: ", lucro_cacada, " GPs\n",
    "---------------------------------------------------\n",
    "Média de XP por Hora: ", xp_por_hora, " XP/h\n",
    "Média de GP por Hora: ", gp_por_hora, " GPs/h\n",
    "---------------------------------------------------\n",
    "Bom jogo, ", nome_jogador, "!"    
    
    )  
  }
}
