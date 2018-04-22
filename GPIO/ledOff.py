import pigpio
pi = pigpio.pi()
pi.set_PWM_dutycycle(13,19,21, 0)
…
pi.stop()