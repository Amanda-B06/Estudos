import pyautogui
import time

pyautogui.PAUSE = 1
time.sleep(3)

time.sleep(1)
pyautogui.moveTo(x=628, y=1053, duration=1)
pyautogui.click(x=628, y=1053, clicks=1)

time.sleep(1)
pyautogui.moveTo(x=708, y=636, duration=1)
pyautogui.click(x=708, y=636, clicks=1)

time.sleep(2)
pyautogui.write("Automatizando com PyAutiGui e divertido!" , interval=0.05)




time.sleep(2)
pyautogui.moveTo(x=1151, y=65, duration=1)
pyautogui.click(x=1151, y=65, clicks=1)
pyautogui.write("https://excalidraw.com" , interval=0.05)
pyautogui.press("enter")

time.sleep(5) 
for i in range(3):
    pyautogui.moveTo(-100, 0, duration=1)
    pyautogui.dragRel(0, 100, duration=1)
    pyautogui.dragRel(100, 0, duration=1)   
    pyautogui.dragRel(0, -100, duration=1)
    pyautogui.dragRel(-100, 0, duration=1)                                              