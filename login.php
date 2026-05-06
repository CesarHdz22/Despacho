<?php
session_start();
include_once("conexion.php");
if(!empty($_POST['usuario']) && !empty($_POST['contra'])){
$usuario=$_POST['usuario'];
$contra=$_POST['contra'];

$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasenia='$contra'";

$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

while($row=mysqli_fetch_assoc($resultado)) {

$id=$row["id_usuario"];
$cargo=$row["cargo"];
$nombre=$row["nombre"];
$amaterno=$row["amaterno"];
$apaterno=$row["apaterno"];

$_SESSION['Idusuario']=$id;
$_SESSION['cargo']=$cargo;
$_SESSION['amaterno']=$amaterno;
$_SESSION['apaterno']=$apaterno;
$_SESSION['nombre']=$nombre;

}

if($filas > 0 ){
    
header('location: inicio.php');
}

echo "<script>alert('Usuario Inexistente'); window.history.go(-1);</script>";
}else{

    echo "<script>alert('Favor de llenar todos los datos'); window.history.go(-1);</script>";
}


