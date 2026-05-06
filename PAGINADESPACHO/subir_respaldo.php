<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
    $nombreArchivo = $_FILES['file']['name'];
        // Mover el archivo al directorio de destino

        $archivoSQL = '"G:\\Mi unidad\\NO BORRAR RESPALDO PAGINA\\'.$nombreArchivo .'"';
            // Ejecutar el comando MySQL para restaurar la base de datos
            $usuario = 'root'; 
            $contrasena = ''; 
            $baseDeDatos = 'despacho'; 
            $host = 'localhost'; 
            
            $comando = "cd C:\\xampp\\mysql\\bin && mysql -u $usuario --password= -h $host $baseDeDatos < $archivoSQL";

            // Ejecutar el comando
            $resultado = shell_exec($comando);

            if ($resultado === null) {
                // Restauración exitosa, redirigir al usuario de vuelta
                echo "<script>alert('Base de datos restaurada con éxito.'); window.history.go(-1);</script>";
            } else {
                // Hubo un error al restaurar la base de datos
                echo "<script>alert('Hubo un error al restaurar la base de datos.'); window.history.go(-1);</script>";
            }
        
    
} else {
    echo "<script>alert('Método de solicitud no válido.');</script>";
}
?>
