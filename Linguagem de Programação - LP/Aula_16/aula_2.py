
import pandas as pd

dados_df=pd.read_excel ('produtos_ficticios.xlsx')


dados_df['Valor em estoque'] = dados_df['Preço'] * dados_df['Quantidade em estoque']
print(dados_df)


dados_df['Imposto'] = 0
print (dados_df)

dados_df.loc[:, 'Status'] = 'Esgotado.'
print (dados_df)

dados_df.to_excel('produtos_ficticios02.xlsx', index='False')