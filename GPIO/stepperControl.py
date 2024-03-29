#!/usr/bin/env python

import  RPi.GPIO as GPIO 
import time

GPIO.setmode(GPIO.BOARD)

ControlPin = [7, #Blue
              11, #Green/pink   
              13, #Yellow
              15 ] #Orange 

for pin in ControlPin:
    GPIO.setup(pin,GPIO.OUT)
    GPIO.output(pin,0)

seq = [
     [1,0,0,0],
     [1,1,0,0],
     [0,1,0,0],
     [0,1,1,0],
     [0,0,1,0],
     [0,0,1,1],
     [0,0,0,1],
     [1,0,0,1] ]

for i in range (512): 
    for halfstep in range(8):
        for pin in range(4):
            GPIO.output(ControlPin[pin], seq[halfstep][pin])
        time.sleep(0.001)

GPIO.cleanup()
    

