<?php
include("conexion.php");
session_start();
$usuario=$_POST['usuario'];
$usuarioo=$_POST['usuarioo'];



if (!empty($_POST['usuario'])) {
    if (!empty($_POST['telefono'])){
        if(!empty($_POST['correo'])){
            if(!empty($_POST['contrasenia'])){
               


$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$contrasenia=$_POST['contrasenia'];
$etiqueta=$_POST['etiqueta'];
$cargo=$_POST['cargo'];


if ($cargo=="San Pedro") {
    if (!empty($_POST['etiqueta'])) {
        $sql1 = "UPDATE usuarios SET usuario = '$usuario', telefono = '$telefono',correo = '$correo',contrasenia = '$contrasenia',etiqueta = '$etiqueta' WHERE id_usuario = '$usuarioo'";
    }else{
        $sql1 = "UPDATE usuarios SET usuario = '$usuario', telefono = '$telefono',correo = '$correo',contrasenia = '$contrasenia' WHERE id_usuario = '$usuarioo'";
    }
}else{
if (!empty($_POST['etiqueta'])) {
    $sql1 = "UPDATE usuarios SET usuario = '$usuario', telefono = '$telefono',correo = '$correo',contrasenia = '$contrasenia',etiqueta = '$etiqueta', cargo = '$cargo' WHERE id_usuario = '$usuarioo'";
}else{
    $sql1 = "UPDATE usuarios SET usuario = '$usuario', telefono = '$telefono',correo = '$correo',contrasenia = '$contrasenia', cargo = '$cargo' WHERE id_usuario = '$usuarioo'";
}

}



$r1= mysqli_query($conexion,$sql1);

if ($r1) {
		
    echo "<script> window.location='usuarios.php'; </script>";}
     
                 
            }else {    echo "<script>alert('Favor de escribir una contraseña'); window.history.go(-1); </script>";    }
        }else {    echo "<script>alert('Favor de escribir un correo'); window.history.go(-1); </script>";    }
    }else {  echo "<script>alert('Favor de escribir un telefono'); window.history.go(-1); </script>";   }
}else{    echo "<script>alert('Favor de escribir un usuario'); window.history.go(-1); </script>"; }


?>