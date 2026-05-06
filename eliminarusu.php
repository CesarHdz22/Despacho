<?php
include_once("conexion.php");

$idusu=$_GET["id"];

$sql1="DELETE FROM expedientes WHERE id_usuario = '$idusu'";
$r1=mysqli_query($conexion,$sql1);
if($r1){
    $sql2="DELETE FROM usuarios WHERE id_usuario = '$idusu'";
    $r2=mysqli_query($conexion,$sql2);
    if($r2){
        header("Location: usuarios.php");
    }
}




?>