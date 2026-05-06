<?php
include("conexion.php");
include("conexionpdo.php");

session_start();

$expediente=$_POST['expediente'];

$consulta="SELECT * FROM caso WHERE expediente='$expediente'";

$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);


if($filas == 0 ){
    

if(!empty($_POST['a_por_realizar'])){

    if(!empty($_POST['f_ini']) && !empty($_POST['f_fin'])){

if (!empty($_POST['expediente'])) {
    if (!empty($_POST['juicio'])){
        
            if($_POST['Tipo']!=0){


$juicio=$_POST['juicio'];
$u_act=$_POST['u_act'];
$a_por_realizar=$_POST['a_por_realizar'];
$etapa=$_POST['etapa'];
$observaciones=$_POST['observaciones'];
$tipo=$_POST['Tipo'];
$demandado=$_POST['demandado'];
$id=$_SESSION['Idusuario'];
$f_ini=$_POST['f_ini'];
$f_fin=$_POST['f_fin'];


if($tipo==1){
    $t="civil";
}elseif($tipo==2){
    $t="civill";
}elseif($tipo==3){
    $t="familiar";
}elseif($tipo==4){
    $t="familiarr";
}elseif($tipo==5){
    $t="familiarrr";
}elseif($tipo==6){
    $t="apelaciones";
}elseif($tipo==7){
    $t="amparos";
}elseif($tipo==8){
    $t="laborales";
}elseif($tipo==9){
    $t="administrativos";
}elseif($tipo==10){
    $t="diversos";
}elseif($tipo==11){
    $t="foraneos";
}    


$insertar2=" INSERT INTO expedientes (id_expediente,expediente,id_usuario) VALUES('','$expediente','$id')";
$insertar3 = "INSERT INTO histact (expediente, id_usuario, Actividad, f_ini, f_fin, etapa) VALUES ('$expediente', '$id', '$a_por_realizar', '$f_ini', '$f_fin', 'abierta') ";
$insertar = "INSERT INTO caso (expediente,juicio,u_act,demandado,etapa,a_por_realizar,f_inicio,f_fin,observaciones,tipo,estado) VALUES('$expediente','$juicio','$u_act','$demandado','$etapa','$a_por_realizar','$f_ini','$f_fin','$observaciones','$t','Abierto');";

$resultado= mysqli_query($conexion,$insertar);
$resultadoo= mysqli_query($conexion,$insertar2);
$resultadoo0= mysqli_query($conexion,$insertar3);

if ($resultado ) {
    $contA=current($conexionpdo->query("SELECT COUNT(*) FROM caso WHERE estado = 'Abierto'")->fetch());
    $contC=current($conexionpdo->query("SELECT COUNT(*) FROM caso WHERE estado = 'Cerrado'")->fetch());

    $sql2 = "UPDATE gracasos SET Cantidad = '$contA' WHERE estado = 'Abierto'";
    $stmt2 = $conexionpdo->prepare($sql2);
    
    $sql3 = "UPDATE gracasos SET Cantidad = '$contC' WHERE estado = 'Cerrado'";
    $stmt3 = $conexionpdo->prepare($sql3);

    if($stmt2->execute() && $stmt3->execute()) {
        header("location: agregari.php?exp=$expediente&tipo=$t");
    }else echo "<script>alert('Error en la consulta'); window.history.go(-1);</script>";
    echo "<script> window.location='acaso.php'; </script>";}
            }else{ echo "<script>alert('Favor de seleccionar el Tipo'); window.location='acaso.php'; </script>";  }  
        
    }else {  echo "<script>alert('Favor de escribir el Juicio'); window.location='acaso.php'; </script>";   }
}else{    echo "<script>alert('Favor de escribir el Expediente'); window.location='acaso.php'; </script>"; }



}else {
    echo "<script>alert('Favor de escribir las fechas de la actividad');window.history.go(-1)</script>";
 
 }
//Consultas sin agregar la actividad

 }else{
    if (!empty($_POST['expediente'])) {
        if (!empty($_POST['juicio'])){
            
                if($_POST['Tipo']!=0){
    
   
    $juicio=$_POST['juicio'];
    $u_act=$_POST['u_act'];
    
    $etapa=$_POST['etapa'];
    $observaciones=$_POST['observaciones'];
    $tipo=$_POST['Tipo'];
 
    
    $id=$_SESSION['Idusuario'];

    
    

    if($tipo==1){
    $t="civil";
    }elseif($tipo==2){
        $t="civill";
    }elseif($tipo==3){
        $t="familiar";
    }elseif($tipo==4){
        $t="familiarr";
    }elseif($tipo==5){
        $t="familiarrr";
    }elseif($tipo==6){
        $t="apelaciones";
    }elseif($tipo==7){
        $t="amparos";
    }elseif($tipo==8){
        $t="laborales";
    }elseif($tipo==9){
        $t="administrativos";
    }elseif($tipo==10){
        $t="diversos";
    }elseif($tipo==11){
        $t="foraneos";
    }    
    
    
    $insertar2=" INSERT INTO expedientes (id_expediente,expediente,id_usuario) VALUES('','$expediente','$id')";
   
    $insertar = "INSERT INTO caso (expediente,juicio,demandado,u_act,etapa,observaciones,tipo,estado) VALUES('$expediente','$juicio','$demandado','$u_act','$etapa','$observaciones','$t','Abierto');";
    
    $resultado= mysqli_query($conexion,$insertar);
    $resultadoo= mysqli_query($conexion,$insertar2);
    
    
    if ($resultado) {
        $contA=current($conexionpdo->query("SELECT COUNT(*) FROM caso WHERE estado = 'Abierto'")->fetch());
        $contC=current($conexionpdo->query("SELECT COUNT(*) FROM caso WHERE estado = 'Cerrado'")->fetch());
    
        $sql2 = "UPDATE gracasos SET Cantidad = '$contA' WHERE estado = 'Abierto'";
        $stmt2 = $conexionpdo->prepare($sql2);
        
        $sql3 = "UPDATE gracasos SET Cantidad = '$contC' WHERE estado = 'Cerrado'";
        $stmt3 = $conexionpdo->prepare($sql3);
    
        if($stmt2->execute() && $stmt3->execute()) {

            header("location: agregari.php?exp=$expediente&tipo=$t");
        }else echo "<script>alert('Error en la consulta'); window.history.go(-1);</script>";
        echo "<script> window.location='acaso.php'; </script>";}

                }else{ echo "<script>alert('Favor de seleccionar el Tipo'); window.location='acaso.php'; </script>";  }  
        }else {  echo "<script>alert('Favor de escribir el Juicio'); window.location='acaso.php'; </script>";   }
    }else{    echo "<script>alert('Favor de escribir el Expediente'); window.location='acaso.php'; </script>"; }
   
 }        



}

echo "<script>alert('El expediente ya existe'); window.history.go(-1);</script>";
?>