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
    
    $idborrar = $_GET['id'];
    $a = $_GET['u'];
   
    
   ?>
<script>
    var idborrar="<?php echo $idborrar; ?>";
    var a="<?php echo $a; ?>";
  Swal.fire({
    title: 'Confirmacion',
    text: '¿Esta seguro de eliminar el actor: '+'"'+a+'"'+'?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Si',
    cancelButtonText: 'No'
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = 'eliminaract.php?id='+idborrar;
    }else {
      window.location.href = 'involucrados.php';
    }
  });

</script>





</body>

</html>
