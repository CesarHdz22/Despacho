<?php

include("conexion.php");
session_start();

$expediente=$_POST['expediente'];
$usuario=$_POST['usuario'];

$sql2="SELECT * FROM expedientes where id_usuario = '$usuario' AND expediente ='$expediente'";
                   $r=mysqli_query($conexion,$sql2);
                   $f2=mysqli_num_rows($r);

if($f2==0){


$insertar= "INSERT INTO expedientes (id_expediente,expediente,id_usuario) VALUES ('','$expediente','$usuario')";
$resultado= mysqli_query($conexion,$insertar);

if($resultado){

    header("location: ccaso.php?expediente=".$expediente);
}
}echo "<script>alert('El usuario ya tiene este expediente'); window.history.go(-1); </script>";
?>