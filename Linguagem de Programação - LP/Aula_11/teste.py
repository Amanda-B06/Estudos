import pyautogui
import time


#print(pyautogui.position())

pyautogui.PAUSE = 0.03

#while True:
    #print(pyautogui.position())

#pyautogui.moveTo(1280, 60, duration=2)
#pyautogui.moveTo(1350, 50, duration=2)
#pyautogui.moveTo(1200, 30, duration=2)

time.sleep(3)
pyautogui.moveTo(1668, 149, duration=3)

pyautogui.click(x=1668, y=149, clicks=2, interval=1, button='left')


pyautogui.click(x=1122, y=477, clicks=2, interval=1, button='left')


pyautogui.click(x=1039, y=536, clicks=2, interval=1, button='left')
pyautogui.write('AmandaBrito220906@', interval=1)

pyautogui.click(x=1395, y=677, clicks=2, interval=1, button='left')