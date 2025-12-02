
import pandas as pd

dados_df=pd.read_excel ('produtos_ficticios.xlsx')

dados_df['Imposto'] = dados_df['Produtos'] * dados_df[0.03]
