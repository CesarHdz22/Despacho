<?php
session_start();
include_once("conexion.php");

$ex=$_GET['expediente'];



$sql1="DELETE FROM histact WHERE expediente = '$ex'";
$r1=mysqli_query($conexion,$sql1);
$sql2="DELETE FROM actexp WHERE expediente = '$ex'";
$r2=mysqli_query($conexion,$sql2);
$sql3="DELETE FROM expedientes WHERE expediente = '$ex'";
$r3=mysqli_query($conexion,$sql3);
if($r1 && $r2 && $r3){
    
    $sql4="DELETE FROM caso WHERE expediente = '$ex'";
    $r4=mysqli_query($conexion,$sql4);

    if($r4){
        echo "<script> window.history.go(-2);</script>";
    }
}

?>