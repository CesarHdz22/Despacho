<?php 
                        session_start();
                        include_once("conexion.php");
                        if(empty($_SESSION['Idusuario'])){header("location: index.php");}else{
                        ?>
                        <!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agenda</title>
        <link rel="icon" href="assets/img/images (1).png" type="image/x-icon">
        <link href="css/datatables.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="js/fonts.js" crossorigin="anonymous"></script>
        <script src="js/boot.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="js/Charts.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="js/tables.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </head>
    <script>
        function seleccionarArchivo() {
            document.getElementById('fileInput').click();
        }

        function mostrarAlerta() {
            const fileInput = document.getElementById('fileInput');
            if (fileInput.files.length === 0) {
                alert('Por favor, selecciona un archivo primero.');
                return;
            }

            const fileName = fileInput.files[0].name;
            const confirmacion = confirm(`¿Deseas subir el archivo ${fileName}?`);
            if (confirmacion) {
                document.getElementById('subirForm').submit();
            }
        }
    </script>
   
    
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar-a navbar-expand navbar-dark bg-dark-a">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3-a" href="inicio.php">Despacho</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        
                    <li><a class="dropdown-item" href="MUERTE.php">Cerrar sesion</a></li>                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        <a class="nav-link" href="inicio.php">
                               
                              
                            </a>
                            <a class="nav-link" href="inicio.php">
                                <div class="sb-nav-link-icon"><img src="assets/img/home.png" height="20px" width="20px"></div>
                                Inicio
                            </a>
                              <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><img src="assets/img/doc.png" height="20px" width="20px"></div>
                                Casos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                  
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth2" aria-expanded="false" aria-controls="pagesCollapseAuth2">
                                       Civiles
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="mostrartc.php?clas=civil">Civil 1</a>
                                            <a class="nav-link" href="mostrartc.php?clas=civill">Civil 2</a>
                                        </nav>
                                    </div>



                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth3" aria-expanded="false" aria-controls="pagesCollapseAuth3">
                                       Familiares
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="mostrartc.php?clas=familiar">Familiar 1</a>
                                            <a class="nav-link" href="mostrartc.php?clas=familiarr">Familiar 2</a>
                                            <a class="nav-link" href="mostrartc.php?clas=familiarrr">Familiar 3</a>
                                        </nav>
                                    </div>

                                    <a class="nav-link" href="mostrartc.php?clas=apelaciones">Apelaciones<br>(2da Instancia)</a>
                                            <a class="nav-link" href="mostrartc.php?clas=amparos">Amparos</a>
                                            <a class="nav-link" href="mostrartc.php?clas=laborales">Laborales</a>
                                            <a class="nav-link" href="mostrartc.php?clas=administrativos">Administrativos</a>
                                            <a class="nav-link" href="mostrartc.php?clas=diversos">Diversos</a>
                                            <a class="nav-link" href="mostrartc.php?clas=foraneos">Foraneos</a>
                                            <a class="nav-link" href="terminados.php">Terminados</a>
                                          <?php 
$cargo=$_SESSION['cargo'];
if ($cargo=="Usuario") {
    # code...
}else{


?>

                                            <a class="nav-link" href="acaso.php">Agregar caso</a><br>

<?php } ?>





                                    
                                </nav>
                            </div><a class="nav-link" href="agenda.php">
                                <div class="sb-nav-link-icon"><img src="assets/img/agenda.png" height="20px" width="20px"></i></div>
                                Agenda
                            </a>
                            <a class="nav-link" href="involucrados.php?clas=Actor">
                                <div class="sb-nav-link-icon"><img src="assets/img/usuarios.png" height="20px" width="20px"></i></div>
                                Clientes
                            </a>

                        

                            <?php 
                            $cargo=$_SESSION['cargo'];

?>
 <a class="nav-link" href="esta.php" >
                                <div class="sb-nav-link-icon"><img src="assets/img/stats.png" height="20px" width="20px"></div>
                                Estadisticas
                            </a>


                            

                            <?php
                           
                            if($cargo != "Usuario"){
                            ?>
                            <a class="nav-link" href="Usuarios.php">
                                <div class="sb-nav-link-icon"><img src="assets/img/directorio.png" height="20px" width="20px"></div>
                                Usuarios
                            </a>

                            <?php }else if($cargo=="Usuario"){ } ?>

                            <?php
                            
                            if($cargo == "San Pedro"){
                            ?>
                            <a class="nav-link" href="respaldo.php">
                                <div class="sb-nav-link-icon"><img src="assets/img/crear_respaldo.png" height="20px" width="20px"></div>
                                Crear respaldo
                            </a>
                            <a class="nav-link" href="#" onclick="seleccionarArchivo()">
                                <div class="sb-nav-link-icon"><img src="assets/img/subir_respaldo.png" height="20px" width="20px"></div>
                                Subir respaldo
                            </a>

                            <form id="subirForm" action="subir_respaldo.php" method="POST" enctype="multipart/form-data" style="display: none;">
                         <input type="file" id="fileInput" name="file" accept=".sql" onchange="mostrarAlerta()">
                    </form>
                            <?php }else if($cargo != "Usuario"){ } ?>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Inició como:</div>
                        <?php 
                        
                        $nombre=$_SESSION['nombre'];
                        $amaterno=$_SESSION['amaterno'];
                        $apaterno=$_SESSION['apaterno'];
                        echo $nombre." ".$apaterno." ".$amaterno;   
                        $id=$_SESSION['Idusuario'];
                        

                        ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
            <main>
                <center>
                    <br>
                    
            <?php
$sql="SELECT * FROM usuarios where id_usuario='$id'";

$result=mysqli_query($conexion,$sql);

$filas=mysqli_num_rows($result);
while($mostrar=mysqli_fetch_array($result)){
    if($mostrar['etiqueta'] != ""){
if($filas>0){
echo $mostrar['etiqueta'];
}

?>
        <br><a href="agregarev.php"><button class="btn btn-primary mb-5 w-25 me-4">Agregar Evento</button></a>    
<?php

    }else{
?>
</center>
<div class="container-fluid px-4">
            <form method="post" action="insertareti.php" class="w-50 rounded-5 px-5 mt-5 mx-auto registro" style="height : 15px">
 
            <center> <label class="fw-bold equipos text-center pt-5"> Lo sentimos, por el momento no tienes una etiqueta para mostrar tu calendario de Google </label></center><br>
            <center>
  <video width="620" height="440" controls volume="0.2">
    <source src="https://drive.google.com/uc?export=download&id=1QSxIWlRTl6mbLgybTfOxOv42UKzxS4Po" type="video/mp4">
    Tu navegador no admite la etiqueta de video.
  </video>
</center>

            <center><label class="fw-bold equipos text-center pt-5"> Ingresar Etiqueta </label></center><br><br>
            <div class="mb-3">

              
            <label for="expediente" class="form-label">Etiqueta <b style="color:red;">*</b></label>
            <input type="text" class="form-control" name="etiqueta" id="etiqueta" required>

                
            </div>
            <center><div class="text-cente"  id="cont" >
            <input type="submit" value="Ingresar" class="btn btn-primary mb-5 w-25 me-4" onclick="validar()">
            </div></center>
            </form>


<?php

    }
}

?>
                            </div>                                  
</main>
            </div>
        </div>

        
    </body>
   
<script type="text/javascript">
function validar(){

    var etiqueta = document.getElementById("etiqueta").value;
    var e1 = /<iframe\b[^>]*>[\s\S]*<\/iframe>/;
    var r7=e1.test(etiqueta);

    if(document.getElementById("etiqueta").value==""){

                alert("Ingresa la etiqueta de Google Calendar");

            }else if(r7 != true){

                alert("Etiqueta de Google Calendar no valida");
                document.getElementById("etiqueta").value = "";

            }

}

</script>
</html>
<?php } ?>
