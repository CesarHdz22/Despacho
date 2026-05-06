<?php
include('conexion.php');
$nom = $_POST['nom'];
$apat = $_POST['apat'];
$amat = $_POST['amat'];

$consulta="SELECT * FROM cliente WHERE nombre='$nom' AND apaterno='$apat' AND amaterno='$amat'";
$res= mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($res);

if($filas == 0 ){

if(!empty($_POST['nom'])){
    if(!empty($_POST['apat'])){
        if(!empty($_POST['amat'])){
            if(!empty($_POST['fec'])){
                if(!empty($_POST['ocu'])){
                    if(!empty($_POST['esco'])){
                        if(!empty($_POST['esta'])){
                            if(!empty($_POST['est'])){
                                if(!empty($_POST['cd'])){
                                    if(!empty($_POST['col'])){
                                        if(!empty($_POST['calle'])){
                                            if(!empty($_POST['next'])){
                                                if(!empty($_POST['nint'])){
                                                    if(!empty($_POST['tel'])){
                                                       

$fec = $_POST['fec'];
$ocu = $_POST['ocu'];
$esco = $_POST['esco'];
$esta = $_POST['esta'];
$est = $_POST['est'];
$cd = $_POST['cd'];
$col = $_POST['col'];
$calle = $_POST['calle'];
$next = $_POST['next'];
$nint = $_POST['nint'];
$tel = $_POST['tel'];

$exp=$_POST['exp'];
$tipo=$_POST['tipo'];

$insertar = "INSERT INTO cliente (nombre,apaterno,amaterno,estado,ciudad,colonia,calle,num_ext,num_int,telefono,divicion,Ocupacion,Escolaridad,Fecha_nac,estcivil) 
                    VALUES('$nom','$apat','$amat','$est','$cd','$col','$calle','$next','$nint','$tel','actor','$ocu','$esco','$fec','$esta')";


$resultado= mysqli_query($conexion,$insertar);
$sql="SELECT * FROM caso where expediente='$exp'";

$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){



    if($mostrar['actor']==""){
        $act=$nom." ".$apat." ".$amat;
        $actualizar="UPDATE caso SET actor='$act' where expediente='$exp'";
        $resultado2= mysqli_query($conexion,$actualizar);
    }else{
    $act=$mostrar['actor'].", ".$nom." ".$apat." ".$amat;
    $actualizar="UPDATE caso SET actor='$act' where expediente='$exp'";
    $resultado2= mysqli_query($conexion,$actualizar);
    }

    
}



$sql2="SELECT * FROM cliente where nombre='$nom' AND apaterno='$apat' AND amaterno='$amat'";

$result2=mysqli_query($conexion,$sql2);

while($mostrar=mysqli_fetch_array($result2)){
    $cliente=$mostrar['id_cliente'];

    $insert="INSERT INTO actexp (Id_actexp,expediente,id_cliente) VALUES ('','$exp','$cliente')";
    $resultado2= mysqli_query($conexion,$insert);
       
}

                   



if($resultado){
    echo "<script> window.location='agregari.php?exp=$exp&tipo=$tipo'; </script>";}
else{
    echo "<script>alert('Error en la consulta'); window.history.go(-1); </script>"; 
}




                                                        
                                                    }else{echo "<script>alert('Favor de llenar el campo de Telefono de contacto'); window.location='agregari.php?exp=$exp&tipo=$tipo'; </script>";}
                                                }else{echo "<script>alert('Favor de llenar el campo de Numero Interior'); window.location='agregari.php?exp=$exp&tipo=$tipo'; </script>";}
                                            }else{echo "<script>alert('Favor de llenar el campo de Numero Exterior'); window.location='agregari.php?exp=$exp&tipo=$tipo'; </script>";}
                                        }else{echo "<script>alert('Favor de llenar el campo de Calle'); window.location='agregari.php?exp=$exp&tipo=$tipo'; </script>";}
                                    }else{echo "<script>alert('Favor de llenar el campo de Colonia'); window.location='agregari.php?exp=$exp&tipo=$tipo'; </script>";}
                                }else{echo "<script>alert('Favor de llenar el campo de Ciudad'); window.location='agregari.php?exp=$exp&tipo=$tipo'; </script>";}
                            }else{echo "<script>alert('Favor de llenar el campo de Estado'); window.location='agregari.php?exp=$exp&tipo=$tipo'; </script>";}
                        }else{echo "<script>alert('Favor de llenar el campo de Estado Civil'); window.location='agregari.php?exp=$exp&tipo=$tipo'; </script>";}
                    }else{echo "<script>alert('Favor de llenar el campo de Escolaridad'); window.location='agregari.php?exp=$exp&tipo=$tipo'; </script>";}    
                }else{echo "<script>alert('Favor de llenar el campo de Ocupacion'); window.location='agregari.php?exp=$exp&tipo=$tipo'; </script>";}    
            }else{echo "<script>alert('Favor de llenar el campo de Fecha de nacimiento'); window.location='agregari.php?exp=$exp&tipo=$tipo'; </script>";}
        }else{echo "<script>alert('Favor de llenar el campo de Apellido materno'); window.location='agregari.php?exp=$exp&tipo=$tipo'; </script>";}    
    }else{ echo "<script>alert('Favor de llenar el campo de Apellido paterno'); window.location='agregari.php?exp=$exp&tipo=$tipo'; </script>"; }
}else { echo "<script>alert('Favor de llenar el campo de Nombre'); window.location='agregari.php?exp=$exp&tipo=$tipo'; </script>"; }

}
echo "<script>alert('El cliente ya existe'); window.history.go(-1);</script>";

?>