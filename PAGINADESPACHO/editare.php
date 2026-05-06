<?php
include("conexion.php");
session_start();

if(!empty($_POST['a_por_realizar'])){

if(!empty($_POST['f_ini']) && !empty($_POST['f_fin'])){
    

$expediente=$_POST['expediente'];
$apr=$_POST['a_por_realizarr'];
$id=$_SESSION['Idusuario'];
$f_ini=$_POST['f_ini'];
$f_fin=$_POST['f_fin'];
$etapa=$_POST['etapa'];
$dem=$_POST['demandado'];
$apr2=$_POST['a_por_realizar'];
$observaciones=$_POST['observaciones'];

$insertar = "INSERT INTO histact (expediente, id_usuario, Actividad, f_ini, f_fin, etapa) VALUES ('$expediente', '$id', '$apr2', '$f_ini', '$f_fin', 'abierta') ";
$modificar ="UPDATE caso SET observaciones='$observaciones', demandado='$dem', u_act='$apr',a_por_realizar='$apr2', f_inicio='$f_ini', f_fin='$f_fin', etapa='$etapa' WHERE expediente='$expediente'";
$modificarr ="UPDATE histact SET etapa='terminada' WHERE expediente='$expediente'";

$r3= mysqli_query($conexion,$modificarr);
$r2= mysqli_query($conexion,$modificar);
$r1= mysqli_query($conexion,$insertar);

if ($r1 && $r2 && $r3){
   
   echo "<script> window.history.go(-2);</script>";

}


}else {
   echo "<script>alert('Favor de escribir las fechas de la actividad');window.history.go(-1)</script>";

}
}else{

  
   
$expediente=$_POST['expediente'];
$apr=$_POST['a_por_realizar'];
$id=$_SESSION['Idusuario'];
$f_ini=$_POST['f_ini'];
$f_fin=$_POST['f_fin'];
$etapa=$_POST['etapa'];
$dem=$_POST['demandado'];
$observaciones=$_POST['observaciones'];


$modificar ="UPDATE caso SET observaciones='$observaciones', demandado='$dem', u_act='$apr', f_inicio='$f_ini', f_fin='$f_fin', etapa='$etapa' WHERE expediente='$expediente'";

   

$r2= mysqli_query($conexion,$modificar);


if ($r2) {
		
    echo "<script> window.history.go(-2);</script>";
 }
  
}
     

?>