import pigpio
pi = pigpio.pi()
pi.set_PWM_dutycycle(21, 255)
…
pi.stop()