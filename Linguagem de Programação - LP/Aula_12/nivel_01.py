import pyautogui
import time

pyautogui.PAUSE = 1
time.sleep(3)

# Nivel 1 de 3 - Posição do mouse
# (x=1654, y=272)

# Nível 2 de 3 - Mover o mouse em diferentes posições
#  (x=772, y=856)   ;     (x=1078, y=15)

time.sleep(1)
pyautogui.moveTo(x=772, y=856, duration=1)

time.sleep(1)
pyautogui.moveTo(x=1078, y=15, duration=3)
pyautogui.click(x=1654, y=272, clicks=2)


# Nível 3 de 3 - Clicar em uma posição fixa
#  
