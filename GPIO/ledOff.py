import pigpio
pi = pigpio.pi()
pi.set_PWM_dutycycle(21, 0)
pi.set_PWM_dutycycle(19, 0)
pi.set_PWM_dutycycle(13, 0)
…
pi.stop()