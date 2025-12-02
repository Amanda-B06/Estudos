import pyautogui
import time

pyautogui.PAUSE = 1
pyautogui.moveTo(x=1094, y=1053, duration=1)
pyautogui.click(x=1094, y=1053, clicks=1)



time.sleep(1)
pyautogui.moveTo(x=765, y=217, duration=1)
pyautogui.click(x=765, y=217, clicks=2)
pyautogui.write('wikipedia', interval=0.5)
pyautogui.press('enter')

time.sleep(1)
pyautogui.moveTo(x=340, y=338, duration=1)
pyautogui.click(x=340, y=338, clicks=2)
