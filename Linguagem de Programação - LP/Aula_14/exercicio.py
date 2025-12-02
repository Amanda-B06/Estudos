# Criar um pequeno sistema automatizado que mostre uma mensagem de alerta e confirmação para o usuário, peça informações básicas (nome e email). Confirme se o usuário quer continuar, caso sim tire automaticamente uma captura de tela.

import pyautogui
import time


pyautogui.alert(text='Bem-vindos ao sistema automatizado!',
                title='Inicio da automação...',
                button='Ok')

nome=pyautogui.prompt(text='Digite seu nome: ',
                      title='Informação Obrigatoria.')

email=pyautogui.prompt(text='Digite seu Email: ',
                       title='Informação Obrigatória.')

resposta=pyautogui.confirm(
    text=f'Confirme seus dados: \n\n Nome: {nome} \n Email: {email} \n\n Deseja continuar com a captura de tela?: ',
    title='Confirmação de Dados',
    buttons=['Sim', 'Não', 'Cancelar']
)

if resposta=='Sim':
    pyautogui.alert('Preparem-se! A captura de tela será feita em três segundos...',
                    title='Captura de tela')
    time.sleep(3)
    pyautogui.screenshot('Captura_usuario.png')
    pyautogui.alert('Captura realizada com sucesso!',
                    title='Sucesso')
    
elif resposta=='Não':
    pyautogui.alert('Processo cancelado pelo usuário.',
                    title='Cancelado')
    

else:
    pyautogui.alert('Automação foi interrompida')

print (f'Nome: {nome}')
print (f'Email: {email}')
print (f'Resposta do usuário: {resposta}')
