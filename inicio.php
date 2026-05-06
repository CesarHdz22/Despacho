
<?php 
                        session_start();
                        include_once("conexion.php");
if(empty($_SESSION['Idusuario'])){header("location: index.php");}else{

                        ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Despacho</title>
        <link rel="icon" href="assets/img/images (1).png" type="image/x-icon">
        <link href="css/datatables.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="js/fonts.js" crossorigin="anonymous"></script>
    </head>

    <script type="text/javascript">
  document.addEventListener('DOMContentLoaded', () => {
    const btnMenu1 = document.querySelector('#btn-menu1');
const menu1 = document.getElementById('menu1');

btnMenu1.addEventListener('click', (event) => {
  event.preventDefault(); // Previene la acción por defecto del enlace
  menu1.style.display = menu1.style.display === 'block' ? 'none' : 'block';
});

const btnMenu2 = document.querySelector('#btn-menu2');
const menu2 = document.getElementById('menu2');

btnMenu2.addEventListener('click', (event) => {
  event.preventDefault(); // Previene la acción por defecto del enlace
  menu2.style.display = menu2.style.display === 'block' ? 'none' : 'block';
});

const btnMenu3 = document.querySelector('#btn-menu3');
const menu3 = document.getElementById('menu3');

btnMenu3.addEventListener('click', (event) => {
  event.preventDefault(); // Previene la acción por defecto del enlace
  menu3.style.display = menu3.style.display === 'block' ? 'none' : 'block';
});

});

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
    
    < <body class="sb-nav-fixed">
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
                       
                    <li><a class="dropdown-item" href="MUERTE.php">Cerrar sesion</a></li></ul>
                </li>
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
?><a class="nav-link" href="esta.php" >
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
                            <?php }else if($cargo != "Usuario"){ } ?>
                        </div>

                    </div>

                    <form id="subirForm" action="subir_respaldo.php" method="POST" enctype="multipart/form-data" style="display: none;">
                         <input type="file" id="fileInput" name="file" accept=".sql" onchange="mostrarAlerta()">
                    </form>
                    <div class="sb-sidenav-footer">
                        <div class="small">Inició como:</div>
                        <?php 
                        
                        $nombre=$_SESSION['nombre'];
                        $amaterno=$_SESSION['amaterno'];
                        $apaterno=$_SESSION['apaterno'];
                        $id=$_SESSION['Idusuario'];
                        echo $nombre." ".$apaterno." ".$amaterno;   
                        
                        

                        ?>
                        
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Pendientes</h1>
                        <ol class="breadcrumb mb-4">
                           Nivel de Importancia
                        </ol>
                        <div class="row">
                        <?php 
                        if($cargo!="San Pedro"){
                        $sql="SELECT * FROM `caso` WHERE expediente in(select expediente from expedientes where id_usuario='$id') AND f_fin > DATE_ADD(CURDATE(), INTERVAL 9 DAY) ORDER BY f_fin ASC";
                        }else{$sql="SELECT * FROM `caso` WHERE f_fin > DATE_ADD(CURDATE(), INTERVAL 9 DAY) ORDER BY f_fin ASC";}
                        $result=mysqli_query($conexion,$sql);
                        $f=mysqli_num_rows($result);
                        ?>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <a class="small text-white stretched-link" id="btn-menu3" role="button" style="text-decoration:none;"><div class="card-body"> Baja <b><?php echo " (",$f,")"; ?></b></div></a>

                                   
                                        <nav id="menu3" class="nav-special">
  <ul>
  <?php
        
        


        while($mostrar=mysqli_fetch_array($result)){
            
    ?>
        <li><a href="expediente.php?e=<?php echo $mostrar['expediente']; ?>"><?php echo $mostrar['expediente'];?> - <?php echo $mostrar['actor'];?> - <?php echo $mostrar['f_fin']; ?></a></li>

    <?php
        }
    ?>
  </ul>
</nav>
                                       
                                    
                                </div>
                            </div>
                        
                        

                           <br>
<?php
if($cargo!="San Pedro"){
$sql="SELECT * FROM `caso` WHERE expediente in(select expediente from expedientes where id_usuario='$id') AND f_fin BETWEEN DATE_ADD(CURDATE(), INTERVAL 3 DAY) AND DATE_ADD(CURDATE(), INTERVAL 9 DAY) ORDER BY f_fin ASC";
}else{$sql="SELECT * FROM `caso` WHERE f_fin BETWEEN DATE_ADD(CURDATE(), INTERVAL 3 DAY) AND DATE_ADD(CURDATE(), INTERVAL 9 DAY) ORDER BY f_fin ASC";}
$result=mysqli_query($conexion,$sql);
$f=mysqli_num_rows($result);
?>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                <a class="small text-white stretched-link" id="btn-menu2" role="button"style="text-decoration:none;"><div class="card-body">Media <b style="textalign:right;"><?php echo " (",$f,")"; ?></b></div></a>
                                    
                                        
                                        <nav id="menu2" class="nav-special">
  <ul>
  <?php
        
        


        while($mostrar=mysqli_fetch_array($result)){
            
    ?>

        <li><a href="expediente.php?e=<?php echo $mostrar['expediente']; ?>"><?php echo $mostrar['expediente'];?> - <?php echo $mostrar['actor'];  ?> - <?php echo $mostrar['f_fin']; ?></a></li>
           
    <?php
        }
        
    ?>
  </ul>
</nav>
                                        
                                    
                                </div>
                            </div>
                        <br>
                        <?php
                        if($cargo!="San Pedro"){
                        $sql="SELECT * FROM `caso` WHERE expediente in(select expediente from expedientes where id_usuario='$id') AND f_fin BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 3 DAY) ORDER BY f_fin ASC";
                        }else{$sql="SELECT * FROM `caso` WHERE f_fin BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 3 DAY) ORDER BY f_fin ASC";}
                        $result=mysqli_query($conexion,$sql);
                        $f=mysqli_num_rows($result);
                        ?>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                <a class="small text-white stretched-link" id="btn-menu1" role="button" style="text-decoration:none;"><div class="card-body">Alta<b><?php echo " (",$f,")"; ?></b></div> </a>
                                    
                            
                                    <nav id="menu1" class="nav-special"> 
  <ul>
    
    
    <?php
        
					

					while($mostrar=mysqli_fetch_array($result)){
						
				?>
					<li><a href="expediente.php?e=<?php echo $mostrar['expediente']; ?>"><?php echo $mostrar['expediente']; ?> - <?php echo $mostrar['actor']; ?> - <?php echo $mostrar['f_fin']; ?></a></li>
    
				<?php
					}
				?>



    
  </ul>
</nav>
                                        
                                    
                                </div>
                            </div>
                          </div>    
                       
                        
                </main>
                
            </div>
        </div>
        <script src="js/boot.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="js/Charts.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="js/tables.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
<?php } ?>




