import os
import datetime
import subprocess

# Obtener la fecha actual
now = datetime.datetime.now()
date_str = now.strftime("%d-%m-%Y")

# Ruta a la carpeta bin de MySQL
mysql_bin_path = r"C:\\xampp\\mysql\\bin"

# Cambiar el directorio actual a la carpeta bin de MySQL
os.chdir(mysql_bin_path)

# Comando mysqldump con la contraseña vacía
mysqldump_command = "mysqldump -u root --password= -B despacho"

# Ruta de destino para el archivo de respaldo
backup_path = r"G:\\Mi unidad\\NO BORRAR RESPALDO PAGINA\\Respaldo_"+date_str+".sql"

# Ejecutar el comando y redirigir la salida al archivo de respaldo
with open(backup_path, 'w') as output_file:
    subprocess.run(mysqldump_command, stdout=output_file, stderr=subprocess.PIPE, shell=True)

    subprocess.run(mysqldump_command, stdout=output_file, shell=True)

