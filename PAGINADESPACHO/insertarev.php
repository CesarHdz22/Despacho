<?php
include ("conexion.php");
session_start();

if(!empty($_POST['nom'])){
    if(!empty($_POST['feid'])){
        if(!empty($_POST['fefi'])){
           

$nom = $_POST['nom'];
$feid = $_POST['feid'];
$fefi = $_POST['fefi'];
$ubi = $_POST['ubi'];
$desc = $_POST['desc'];

$insertar = "INSERT INTO eventos (nombre,fein,fefi,ubicacion,descripcion) VALUES('$nom','$feid','$fefi','$ubi','$desc')";

$resultado= mysqli_query($conexion,$insertar);

$feid = str_replace(['-', ':'], '', $feid);
$fefi = str_replace(['-', ':'], '', $fefi);
if($resultado){
    echo "<script>window.open('https://calendar.google.com/calendar/u/0/r/eventedit?text=",$nom,"&dates=",$feid,"00Z/",$fefi,"00Z&details=",$desc,"&location=",$ubi,"', '_blank'); window.location='eventopy.php'; </script>";}
else{
    echo "<script>alert('Error en la consulta'); window.history.go(-1); </script>"; 
}


               
        }else{echo "<script>alert('Favor de llenar la fecha de fin del evento'); window.location='agregarev.php'; </script>";}
    }else{echo "<script>alert('Favor de llenar la fecha de inicio del evento'); window.location='agregarev.php'; </script>";}
}else{echo "<script>alert('Favor de llenar el nombre del evento'); window.location='agregarev.php'; </script>";}




?>