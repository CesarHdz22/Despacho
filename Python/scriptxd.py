import numpy as np
import matplotlib.pyplot as plt
import matplotlib.animation as animation

def wave_function(x, t):
    return 0.1 * np.cos(5 * x + 20 * t)

# Configuración de la gráfica
x = np.linspace(0, 5, 400)  # Valores de x de 0 a 5
fig, ax = plt.subplots()
ax.set_ylim(-0.12, 0.12)
ax.set_xlabel("x")
ax.set_ylabel("y(x, t)")
ax.set_title("Onda en función de x y t")
line, = ax.plot([], [], 'b-', lw=2)

def init():
    line.set_data([], [])
    return line,

def update(t):
    y = wave_function(x, t)
    line.set_data(x, y)
    return line,

ani = animation.FuncAnimation(fig, update, frames=np.linspace(0, 2, 100), init_func=init, blit=True)
plt.show()
