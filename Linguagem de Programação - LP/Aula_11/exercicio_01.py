import pyautogui
import time

pyautogui.PAUSE = 1
#print (pyautogui.KEYBOARD_KEYS)
pyautogui.press("win")

time.sleep(1)
pyautogui.write('Bloco de Notas')

time.sleep(1)
pyautogui.press("enter")

time.sleep(1)
pyautogui.write("Amandinha")
pyautogui.hotkey("alt", "f4")
