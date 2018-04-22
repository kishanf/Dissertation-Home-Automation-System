import pigpio
pi = pigpio.pi()
pi.set_PWM_dutycycle(19, 255)
…
pi.stop()