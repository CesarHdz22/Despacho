<?php 
                        session_start();
                        include_once("conexion.php");
                        if(empty($_SESSION['Idusuario'])){header("location: index.php");}else{
                        $expediente=$_GET['expediente'];
                        $id=$_SESSION['Idusuario'];
                        ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Despacho</title>
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
                        
                        <li><a class="dropdown-item" href="MUERTE.php">Cerrar sesion</a></li>
                    </ul>
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
                        echo $nombre." ".$apaterno." ".$amaterno;   
                        
                        

                        ?>
                    </div>
                </nav>
            </div>
<br><br>











<form method="post" action="editare.php" class="w-50 rounded-5 px-5 mt-5 mx-auto registro" style="height : 15px">


<?php 


$sql="SELECT * FROM caso WHERE expediente = '$expediente' ";
$result=mysqli_query($conexion,$sql);
while ($row=mysqli_fetch_assoc($result)) {  

?>
 
 <label class="fw-bold equipos text-center pt-5"> Modificar Datos </label><br><br>
            <div class="mb-3">
            <input type="hidden" class="form-control" name="expediente" value="<?php echo $expediente?>">
            

                <input type="hidden" name="a_por_realizarr" value="<?php echo $row['a_por_realizar']; ?>">


            <label for="expediente" class="form-label" id="dem" style="position:relative; top: 0em;">Agregar demadado (Dividir nombre con coma ",")</label>
                    <input type="text" class="form-control" name="demandado" id="dem" style="position:relative; top: 0em;" value="<?php echo $row['demandado']; ?>">


                    <label for="a_por_realizar" class="form-label">Actividad por realizar (Al agregar una actividad, la actual se dara por terminada)</label>
                    <input type="text" class="form-control" name="a_por_realizar" id="a_por_realizar">

                    <label for="f_ini" id="f_ini1" class="form-label" style="visibility : collapse;">Fecha de Inicio de la Actividad <b style="color:red;">*</b></label>
                    <input type="datetime-local" class="form-control" name="f_ini" id="f_ini"  style="visibility : collapse;">

                    <label for="f_fin" class="form-label" id="f_fin1" style="visibility : collapse;">Fecha Final de la Actividad <b style="color:red;">*</b></label>
                    <input type="datetime-local" class="form-control" name="f_fin" id="f_fin"  style="visibility : collapse;" >


                    <label for="Etapa" class="form-label" style="position:relative;top: -4em; "  id="et">Etapa</label>
                    <input type="Text" class="form-control" name="etapa" id="etapa" style="position:relative;top: -4em;" value="<?php echo $row['etapa']; ?>">

                    <label for="Observaciones" class="form-label" style="position:relative; top: -13em;" id="obs">Observaciones</label>
                    <input type="Text" class="form-control" name="observaciones" id="observaciones" style="position:relative; top: -13em;"value="<?php echo $row['observaciones']; ?>">


                    
                
                
            </div>
        
                 
<center>
<div class="text-center" id="cont" style="position:relative; top:-8.5em">

 <input type="button" value="Reiniciar datos" class="btn btn-primary mb-5 w-25 me-4" onclick="location.reload()">
     <input type="submit" value="Actualizar datos" class="btn btn-primary mb-5 w-25 me-4" onclick="validar()">
     <button type="button" class="btn btn-secondary mb-5 w-25" onclick="javascript: history.go(-1)">Regresar</button>
     
 </div>
 </center>

 <?php } ?>
</form>


<script type="text/javascript">
                    const act= document.getElementById("a_por_realizar");
                    
  function o(){
  if (document.getElementById("a_por_realizar").value == "") {
    document.getElementById("f_ini").style.visibility = "hidden";
    document.getElementById("f_fin").style.visibility = "hidden";
    document.getElementById("f_ini1").style.visibility = "hidden";
    document.getElementById("f_fin1").style.visibility = "hidden";
    document.getElementById("et").style.top = "-8.7em";
    document.getElementById("etapa").style.top = "-9em";
    document.getElementById("obs").style.top = "-8.9em";
    document.getElementById("observaciones").style.top = "-9.2em";
    document.getElementById("cont").style.top = "-8.5em";


  } else {
    document.getElementById("f_ini").style.visibility = "visible"; 
    document.getElementById("f_fin").style.visibility = "visible"; 
    document.getElementById("f_ini1").style.visibility = "visible"; 
    document.getElementById("f_fin1").style.visibility = "visible"; 
    document.getElementById("et").style.top = "0em";
    document.getElementById("etapa").style.top = "0em";
    document.getElementById("obs").style.top = "0em";
    document.getElementById("observaciones").style.top =  "0em";
    document.getElementById("cont").style.top = "0em";

  }
}
if(document.getElementById("a_por_realizar").value != ""){
    o();
}
act.addEventListener("keyup", o);


function validar() {
   var inicio = document.getElementById("f_ini").value;
var fin = document.getElementById("f_fin").value;
var apr = document.getElementById("a_por_realizar").value;

if (document.getElementById("a_por_realizar").value != "") {
if(document.getElementById("f_ini").value!="" && document.getElementById("f_fin").value!=""){
inicio = new Date(inicio).getTime();
  fin = new Date(fin).getTime();
if (inicio > fin) {
    alert("La fecha de fin es menor que la de inicio");
    document.getElementById("f_ini").value = "";
    document.getElementById("f_fin").value = "";
  }
}else{
    alert("Favor de escribir las fechas de inicio y fin");
}
}



}

</script>






</body>
</html>
<?php } ?>