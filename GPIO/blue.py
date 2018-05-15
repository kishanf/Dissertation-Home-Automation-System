import pigpio
import time 

pi = pigpio.pi()
pi.set_PWM_dutycycle(21, 0)
pi.set_PWM_dutycycle(19, 0)
pi.set_PWM_dutycycle(13, 255)
...
time.sleep(0.6)
pi.stop()

