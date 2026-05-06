<?php
include_once("conexion.php");

$exp=$_GET["exp"];
$id_cliente=$_GET["idcl"];
$tipo=$_GET["tipo"];

$sql1="SELECT * FROM cliente WHERE id_cliente='$id_cliente'";
$r1= mysqli_query($conexion,$sql1);

while($mostrarcliente=mysqli_fetch_array($r1)){
    $sql2="SELECT * FROM caso WHERE expediente='$exp'";
    $r2= mysqli_query($conexion,$sql2);
    while($mostrarcaso=mysqli_fetch_array($r2)){
       
        $sql5="SELECT * FROM actexp WHERE expediente='$exp' AND id_cliente='$id_cliente'";
        $r5= mysqli_query($conexion,$sql5);
        $filas=mysqli_num_rows($r5);

        if($filas==0){

if($mostrarcaso['actor']==""){
    $nombre=$mostrarcliente['nombre']." ".$mostrarcliente['apaterno']." ".$mostrarcliente['amaterno'];
}else{
    $nombre=$mostrarcaso['actor'].", ".$mostrarcliente['nombre']." ".$mostrarcliente['apaterno']." ".$mostrarcliente['amaterno'];
}

$sql3="UPDATE caso SET actor='$nombre' where expediente='$exp'";
$r3= mysqli_query($conexion,$sql3);

if($r3){
    $sql4="INSERT INTO actexp VALUES ('','$exp','$id_cliente')";
    $r4= mysqli_query($conexion,$sql4);
    
}else{echo "<script>alert('Error en la consulta'); window.history.go(-1); </script>";}


        
}else{echo "<script>alert('El actor ya esta agregado'); window.history.go(-1); </script>";}

    }
}

if($r1){
    echo "<script> window.location='agregari.php?exp=$exp&tipo=$tipo'; </script>";
}else{echo "<script>alert('Error en la consulta'); window.history.go(-1); </script>";}

