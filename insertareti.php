<?php
session_start();
include_once("conexion.php");
if (!empty($_POST["etiqueta"])){

$eti=$_POST["etiqueta"];
$id=$_SESSION["Idusuario"];
$sql="UPDATE usuarios set etiqueta='$eti' WHERE id_usuario = '$id'";

$resultado=mysqli_query($conexion,$sql);

if($resultado){
    header("location: agenda.php");
}

}else{  echo "<script>alert('Favor de escribir la etiqueta'); window.history.go(-1);</script>"; }

