<?php
include("conexion.php");
if (!empty($_POST['ocu'])) {
    if (!empty($_POST['esco'])){
        if(!empty($_POST['esta'])){
            if(!empty($_POST['est'])){
                if(!empty($_POST['cd'])){
                    if(!empty($_POST['col'])){
                        if(!empty($_POST['calle'])){
                            if(!empty($_POST['nexti']) || $_POST['nexti']=='0'){
                                if(!empty($_POST['nint']) || $_POST['nint']=='0'){
                                    if(!empty($_POST['tel'])){
                                        if(!empty($_POST['fec'])){
                                            if(!empty($_POST['amat'])){
                                                if(!empty($_POST['apat'])){
                                                    if(!empty($_POST['nom'])){

$nom=$_POST['nom'];                                        
$apat=$_POST['apat'];                                        
$amat=$_POST['amat'];                                        
$fec=$_POST['fec'];                                        
$cliente=$_POST['cliente'];
$ocu=$_POST['ocu'];
$esco=$_POST['esco'];
$esta=$_POST['esta'];
$est=$_POST['est'];
$cd=$_POST['cd'];
$col=$_POST['col'];
$calle=$_POST['calle'];
$next=$_POST['nexti'];
$nint=$_POST['nint'];
$tel=$_POST['tel'];
$esta=$_POST['esta'];

$insertar = "UPDATE cliente SET nombre = '$nom', amaterno = '$amat', apaterno = '$apat', Fecha_nac = '$fec' , Ocupacion = '$ocu', Escolaridad = '$esco', estado = '$est',ciudad = '$cd',colonia = '$col', calle = '$calle', num_ext = '$next', num_int = '$nint', telefono = '$tel', estcivil = '$esta' WHERE id_cliente = '$cliente'";

$resultado= mysqli_query($conexion,$insertar);

if ($resultado) {
		
    echo "<script> window.location='involucrados.php?clas=Actor'; </script>";}






                                                             }else {    echo "<script>alert('Favor de ingresar un Nombre'); window.history.go(-1); </script>";    } 
                                                        }else {    echo "<script>alert('Favor de ingresar un Apellido Paterno'); window.history.go(-1); </script>";    } 
                                                   }else {    echo "<script>alert('Favor de ingresar un Apellido Materno'); window.history.go(-1); </script>";    } 
                                              }else {    echo "<script>alert('Favor de ingresar una Fecha de Naciemiento'); window.history.go(-1); </script>";    } 
                                         }else {    echo "<script>alert('Favor de ingresar un Telefono'); window.history.go(-1); </script>";    } 
                                    }else {    echo "<script>alert('Favor de ingresar un Numero Interior'); window.history.go(-1); </script>";    } 
                              }else {    echo "<script>alert('Favor de ingresar un Numero Exterior'); window.history.go(-1); </script>";    } 
                         }else {    echo "<script>alert('Favor de ingresar una Calle'); window.history.go(-1); </script>";    } 
                    }else {    echo "<script>alert('Favor de ingresar una Colonia'); window.history.go(-1); </script>";    }      
                 }else {    echo "<script>alert('Favor de ingresar una Ciudad'); window.history.go(-1); </script>";    }
            }else {    echo "<script>alert('Favor de escribir un Estado de Residencia'); window.history.go(-1); </script>";    }
        }else {    echo "<script>alert('Favor de escribir Estado Civil'); window.history.go(-1); </script>";    }
    }else {  echo "<script>alert('Favor de escribir una Escolaridad'); window.history.go(-1); </script>";   }
}else{    echo "<script>alert('Favor de escribir una Ocupacion'); window.history.go(-1); </script>"; }

?>