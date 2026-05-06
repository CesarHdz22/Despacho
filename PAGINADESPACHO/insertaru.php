<?php
include("conexion.php");
$usu=$_POST['usu'];
$consulta="SELECT * FROM usuarios WHERE usuario='$usu'";

$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);


if($filas == 0 ){



if (!empty($_POST['nom'])) {
    if (!empty($_POST['apaterno'])){
        if(!empty($_POST['amaterno'])){
            if(!empty($_POST['tel'])){
                if(!empty($_POST['correo'])){
                    if(!empty($_POST['contrasenia'])){
                        if(!empty($_POST['usu'])){
                            if(!empty($_POST['etiqueta'])){
            if($_POST['cargo']!=0){

$nom=$_POST['nom'];
$apaterno=$_POST['apaterno'];
$amaterno=$_POST['amaterno'];
$tel=$_POST['tel'];
$correo=$_POST['correo'];
$contrasenia=$_POST['contrasenia'];
$cargo=$_POST['cargo'];
$etiqueta=$_POST['etiqueta'];

if($cargo=="1"){
    $insertar = "INSERT INTO usuarios (nombre,usuario,apaterno,amaterno,telefono,correo,contrasenia,cargo,etiqueta) VALUES('$nom','$usu','$apaterno','$amaterno','$tel','$correo','$contrasenia','Administrador','$etiqueta')";
}else if($cargo==2){
$insertar = "INSERT INTO usuarios (nombre,usuario,apaterno,amaterno,telefono,correo,contrasenia,cargo,etiqueta) VALUES('$nom','$usu','$apaterno','$amaterno','$tel','$correo','$contrasenia','Usuario','$etiqueta')";
}
$resultado= mysqli_query($conexion,$insertar);

if ($resultado) {
		
    echo "<script> window.location='usuarios.php'; </script>";}
    
            }else{ echo "<script>alert('Favor de seleccionar el cargo'); window.history.go(-1); </script>";  }  
                            }else{ echo "<script>alert('Favor de escribir la etiqueta de Google Calendar'); window.history.go(-1);</script>";}
                        }else{ echo "<script>alert('Favor de escribir el usuario'); window.history.go(-1);</script>";}
                     }else{    echo "<script>alert('Favor de escribir la contraseña'); window.history.go(-1); </script>";    }
                 }else {    echo "<script>alert('Favor de escribir el correo'); window.history.go(-1); </script>";    }
            }else {    echo "<script>alert('Favor de escribir el telefono'); window.history.go(-1); </script>";    }
        }else {    echo "<script>alert('Favor de escribir el apellido materno'); window.history.go(-1); </script>";    }
    }else {  echo "<script>alert('Favor de escribir el Apellido paterno'); window.history.go(-1); </script>";   }
}else{    echo "<script>alert('Favor de escribir el Nombre'); window.history.go(-1); </script>"; }
}
echo "<script>alert('El usuario ya existe'); window.history.go(-1);</script>";
?>
