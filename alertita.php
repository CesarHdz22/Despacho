<?php
session_start();
if(empty($_SESSION['Idusuario'])){header("location: index.php");}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/images (1).png" type="image/x-icon">
    <script src="js/confirm.js"></script> 
    <link href="css/Confi.css" rel="stylesheet" /> 
    <title>Confirmacion</title>
    <style>
    body {
        background: linear-gradient(to bottom right, white, lightgray);
            }
  </style>
</head>
<body>
   <?php
    $idu=$_GET["idu"];
    $idborrar = $_GET['id'];
    $u = $_GET['u'];
   
    if($idu!=$idborrar){

   ?>
<script>
    var idborrar="<?php echo $idborrar; ?>";
    var u="<?php echo $u; ?>";
  Swal.fire({
    title: 'Confirmacion',
    text: '¿Esta seguro de eliminar el usuario: '+'"'+u+'"'+'?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Si',
    cancelButtonText: 'No'
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = 'eliminarusu.php?id='+idborrar;
    }else {
      window.location.href = 'usuarios.php';
    }
  });

</script>
<?php
}else{
?>
 <script>
   
  Swal.fire({
    
    text: 'No Puedes eliminar tu propio usuario',
    icon: 'info'
  }).then((result) => {
    if (result.isConfirmed) {
        window.location.href = 'usuarios.php';
    }
  });

</script>
<?php 
}
?>




</body>

</html>
<?php } ?>