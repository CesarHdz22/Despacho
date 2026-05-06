<?php
include("conexion.php");
include("conexionpdo.php");

session_start();
$expediente=$_GET['expediente'];
$ac=$_GET['ac'];
$id=$_SESSION['Idusuario'];

if ($ac=="close") {
        $insertar = "UPDATE caso SET estado = 'Cerrado' WHERE expediente = '$expediente'";
}else{
        $insertar = "UPDATE caso SET estado = 'Abierto' WHERE expediente = '$expediente'";
}


$resultado= mysqli_query($conexion,$insertar);


if ($resultado) {
   
        header("location: terminados.php");
    
       
    
   }
else{ echo "<script>alert('Error en la consulta'); window.location='terminados.php'; </script>";  }  
?>