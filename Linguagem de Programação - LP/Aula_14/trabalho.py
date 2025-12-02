import pyautogui
import time
import webbrowser
import os

saldo=1000

pyautogui.alert(text='Olá, bem-vindos ao Banco Itiriru.\n\n Somos o Banco mais confiável do Brasil! Em que podemos te ajudar?:',
                title='Bem-Vindo!',
                button='Ok')


nome=pyautogui.prompt(text='Digite seu nome: ',
                      title='Informação Obrigatoria.')

email=pyautogui.prompt(text='Digite seu Email: ',
                       title='Informação Obrigatória.')

senha=pyautogui.password(text='Digite sua senha: ',
                       title='Informação Obrigatória.')


resposta=pyautogui.confirm(text=f'Olá, {nome} ! Vamos confirmar suas informações... \n\n  Nome: {nome} \n Email: {email} \n Senha: {senha} \n\n Qual operação deseja acessar?: ',
                  title='Operações',
                  buttons=['Depositar', 'Sacar', 'Sair'])

if resposta== 'Depositar':
    depositar=pyautogui.prompt(text='Quanto deseja depositar?: ',
                    title='Depositar')
    
    valor=float(depositar)
    
    os.system('calc')
    time.sleep(4)

    pyautogui.typewrite(str(saldo))
    pyautogui.typewrite('+')
    pyautogui.typewrite(str(valor))
    pyautogui.press('enter')

    novo_saldo=saldo+valor
    pyautogui.alert(f'R$ {depositar} depositado com Sucesso! \n\n Total: {novo_saldo}',
                    title='Sucesso',
                    button='Ok')
    
elif resposta== 'Sacar':
    saque=pyautogui.prompt(text='Quanto deseja sacar?: ',
                    title='Saque')
    
    valor=float(saque)
    
    os.system('calc')
    time.sleep(4)

    pyautogui.typewrite(str(saldo))
    pyautogui.typewrite('-')
    pyautogui.typewrite(str(valor))
    pyautogui.press('enter')

    novo_saque=saldo-valor
    pyautogui.alert(f'R$ {saque} sacado com Sucesso! \n\n Total: {novo_saque}',
                    title='Sucesso',
                    button='Ok')
    
else:
    pyautogui.alert('Operação realizada com sucesso! Saindo da sua conta...',)

    webbrowser.open('https://youtu.be/OLuM5CWxrcE?si=oZq5FDDTOqJ5FoI3')
    time.sleep(3)    

