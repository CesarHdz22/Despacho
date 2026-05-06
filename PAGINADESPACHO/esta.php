<?php
include_once("conexionpdo.php");
session_start();
$cargo=$_SESSION['cargo'];
$id=$_SESSION['Idusuario'];

if($cargo=='San Pedro'){
    $contA=current($conexionpdo->query("SELECT COUNT(*) FROM caso WHERE estado = 'Abierto'")->fetch());
    $contC=current($conexionpdo->query("SELECT COUNT(*) FROM caso WHERE estado = 'Cerrado'")->fetch());
}else{
    $contA=current($conexionpdo->query("SELECT COUNT(*) FROM caso WHERE expediente IN(SELECT expediente FROM expedientes WHERE id_usuario = '$id') AND estado = 'Abierto'")->fetch());
    $contC=current($conexionpdo->query("SELECT COUNT(*) FROM caso WHERE expediente IN(SELECT expediente FROM expedientes WHERE id_usuario = '$id') AND estado = 'Cerrado'")->fetch());
}

    $sql2 = "UPDATE gracasos SET Cantidad = '$contA' WHERE estado = 'Abierto'";
    $stmt2 = $conexionpdo->prepare($sql2);
    
    $sql3 = "UPDATE gracasos SET Cantidad = '$contC' WHERE estado = 'Cerrado'";
    $stmt3 = $conexionpdo->prepare($sql3);

    if($stmt2->execute() && $stmt3->execute()) {
        header("location: estadisticas.php");
    }else echo "<script>alert('Error en la consulta'); window.history.go(-1);</script>";