import pigpio
pi = pigpio.pi()
pi.set_PWM_dutycycle(13, 255)
…
pi.stop()