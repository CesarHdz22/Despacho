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
$exp=$_GET['expediente'];
$ac=$_GET['ac'];

?>    
<script>
    var exp="<?php echo $exp; ?>";
    var ac="<?php echo $ac; ?>";
    
  Swal.fire({
    title: 'Confirmacion',
    text: '¿Esta seguro de que quiere '+''+ac+''+' el caso: '+'"'+exp+'"'+'?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Si',
    cancelButtonText: 'No'
  }).then((result) => {
    if (result.isConfirmed&& ac=="terminar") {
      window.location.href = 'terminar.php?expediente='+exp+'&ac=close';
    }else if(result.isConfirmed&& ac=="borrar") {
      window.location.href = 'borrar.php?expediente='+exp;
    }else{window.history.go(-1);}
  });

</script>


</body>
</html>
<?php } ?>