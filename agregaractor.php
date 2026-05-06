<?php 
                        session_start();
                        include_once("conexion.php");
                        $exp=$_GET['exp'];
                        $tipo=$_GET['tipo'];
                        if(empty($_SESSION['Idusuario'])){header("location: index.php");}else{
                        ?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Registrar Actor</title>
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


<body class="sb-nav-fixed sb-sidenav-toggled">
        <nav class="sb-topnav navbar-a navbar-expand navbar-dark bg-dark-a">
            <!-- Navbar Brand-->
            <label class="navbar-brand ps-3-a" href="inicio.php">Despacho</label>
            <!-- Sidebar Toggle-->
            
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
                            
            
                            <div id="layoutSidenav_content">
            <main>
            <div class="container-fluid px-4">
            <form method="post" action="insertari.php" class="w-50 rounded-5 px-5 mt-5 mx-auto registro" style="height : 15px">
 
            <label class="fw-bold equipos text-center pt-5"> Ingresar Datos del Actor </label><br><br>
            <div class="mb-3">

              
                    <input type="hidden" value="<?php echo $exp; ?>" name="exp" >
                    <input type="hidden" value="<?php echo $tipo; ?>" name="tipo">

                    <label for="expediente" class="form-label">Nombre(s) <b style="color:red;">*</b></label>
                    <input type="text" class="form-control" name="nom" id="nom" required>

                    <label for="juicio" class="form-label">Apellido Paterno <b style="color:red;">*</b></label>
                    <input type="text" class="form-control" name="apat" id="apat" required>

                    <label for="correo" u_act="form-label">Apellido Materno <b style="color:red;">*</b></label>
                    <input type="text" class="form-control" name="amat" id="amat" required>
                    
                    <label for="a_por_realizar" class="form-label">Fecha de nacimiento <b style="color:red;">*</b></label>
                    <input type="date" class="form-control" name="fec" id="fec" required>
                    
                    <label for="correo" u_act="form-label">Ocupación <b style="color:red;">*</b></label>
                    <input type="text" class="form-control" name="ocu" id="ocu" required>

                    <label for="a_por_realizar" class="form-label">Escolaridad <b style="color:red;">*</b></label>
                    <input type="text" class="form-control" name="esco" id="esco" required>

                    <label for="a_por_realizar" class="form-label">Estado Civil <b style="color:red;">*</b></label>
                    <input type="text" class="form-control" name="esta" id="esta" required><br>

                    <label class="fw-bold equipos text-center pt-5"> Datos de Dirección</label><br><br>

                    <label for="a_por_realizar" class="form-label">Estado de Residencia <b style="color:red;">*</b></label>
                    <input type="text" class="form-control" name="est" id="est" required>

                    <label for="a_por_realizar" class="form-label">Ciudad <b style="color:red;">*</b></label>
                    <input type="text" class="form-control" name="cd" id="cd" required>

                    <label for="a_por_realizar" class="form-label">Colonia <b style="color:red;">*</b></label>
                    <input type="text" class="form-control" name="col" id="col" required>

                    <label for="correo" u_act="form-label">Calle <b style="color:red;">*</b></label>
                    <input type="text" class="form-control" name="calle" id="calle" required>

                    <label for="a_por_realizar" class="form-label">Numero exterior <b style="color:red;">*</b></label>
                    <input type="text" class="form-control" name="next" id="next" required>

                    <label for="a_por_realizar" class="form-label">Numero interior <b style="color:red;">*</b></label>
                    <input type="text" class="form-control" name="nint" id="nint" required>

                    <label for="a_por_realizar" class="form-label">Telefono de contacto <b style="color:red;">*</b></label>
                    <input type="text" class="form-control" name="tel" id="tel" required><br>

                    <br>
            </div>
            <center><div class="text-cente"  id="cont" >
            <input type="submit" value="Ingresar" class="btn btn-primary mb-5 w-25 me-4" onclick="validar()">
            <a href="<?php echo 'mostrartc.php?clas=',$tipo ?> "><button type="button" class="btn btn-secondary mb-5 w-25" >Guardar</button></a>
            </div></center>
            </form>

                            </div>               

                            
</main>

</div>
                            </div>




<script type="text/javascript">
function validar() {
var nom = document.getElementById("nom").value;
var apat = document.getElementById("apat").value;
var amat = document.getElementById("amat").value;
var fec = document.getElementById("fec").value;
var ocu = document.getElementById("ocu").value;
var esco = document.getElementById("esco").value;
var esta = document.getElementById("esta").value;
var est = document.getElementById("est").value;
var cd = document.getElementById("cd").value;
var col = document.getElementById("col").value;
var calle = document.getElementById("calle").value;
var next = document.getElementById("next").value;
var nint = document.getElementById("nint").value;
var tel = document.getElementById("tel").value;


var nombres = /^[A-Zñ" "áéíóúÁÉÍÓÚ]+$/i;
var punto = /^[A-Zñ" "áéíóúÁÉÍÓÚ.]+$/i;
var numero = /^[0-9]+$/i;
var numeros = /^[0-9+]+$/i;
var calles = /^[A-Z0-9ñ" "áéíóúÁÉÍÓÚ.]+$/i;

var r1 = punto.test(nom);
var r2 = punto.test(apat);
var r3 = punto.test(amat);
var r4 = punto.test(ocu);
var r5 = punto.test(esco);
var r6 = nombres.test(esta);
var r7 = punto.test(est);
var r8 = punto.test(cd);
var r9 = punto.test(col);
var r10 = calles.test(calle);
var r11 = numeros.test(next);
var r12 = numeros.test(nint);
var r13 = numeros.test(tel);


if (document.getElementById("nom").value == ""){
    alert("Favor de llenar el campo de Nombre");
}else if(r1 != true){
    alert ("Caracter invalido en el campo de Nombre");
    document.getElementById("nom").value = "";
}
if (document.getElementById("apat").value == ""){
    alert("Favor de llenar el campo de Apellido Paterno");
}else if(r2 != true){
    alert ("Caracter invalido en el campo del Apellido Paterno");
    document.getElementById("apat").value = "";
}
if (document.getElementById("amat").value == ""){
    alert("Favor de llenar el campo de Apellido Materno");
}else if(r3 != true){
    alert ("Caracter invalido en el campo del Apellido Materno");
    document.getElementById("amat").value = "";
}
if (document.getElementById("fec").value == ""){
    alert("Favor de llenar el campo de Fecha de Nacimiento");
}
if (document.getElementById("ocu").value == ""){
    alert("Favor de llenar el campo de Ocupación");
}else if(r4 != true){
    alert ("Caracter invalido en el campo de la Ocupación");
    document.getElementById("ocu").value = "";
}
if (document.getElementById("esco").value == ""){
    alert("Favor de llenar el campo de Escolaridad");
}else if(r5 != true){
    alert ("Caracter invalido en el campo de la Escolaridad");
    document.getElementById("esco").value = "";
}
if (document.getElementById("esta").value == ""){
    alert("Favor de llenar el campo de Estado Civil");
}else if(r6 != true){
    alert ("Caracter invalido en el campo del Estado Civil");
    document.getElementById("esta").value = "";
}
if (document.getElementById("est").value == ""){
    alert("Favor de llenar el campo de Estado de Residencia");
}else if(r7 != true){
    alert ("Caracter invalido en el campo del Estado de Residencia");
    document.getElementById("est").value = "";
}
if (document.getElementById("cd").value == ""){
    alert("Favor de llenar el campo de Ciudad");
}else if(r8 != true){
    alert ("Caracter invalido en el campo del Ciudad");
    document.getElementById("cd").value = "";
}
if (document.getElementById("col").value == ""){
    alert("Favor de llenar el campo de Colonia");
}else if(r9 != true){
    alert ("Caracter invalido en el campo del Colonia");
    document.getElementById("col").value = "";
}
if (document.getElementById("calle").value == ""){
    alert("Favor de llenar el campo de Calle");
}else if(r10 != true){
    alert ("Caracter invalido en el campo del Calle");
    document.getElementById("calle").value = "";
}
if (document.getElementById("next").value == ""){
    alert("Favor de llenar el campo de Número Exterior");
}else if(r11 != true){
    alert ("Caracter invalido en el campo del Número Exterior");
    document.getElementById("next").value = "";
}
if (document.getElementById("nint").value == ""){
    alert("Favor de llenar el campo de Número Interior");
}else if(r12 != true){
    alert ("Caracter invalido en el campo del Número Interior");
    document.getElementById("nint").value = "";
}
if (document.getElementById("tel").value == ""){
    alert("Favor de llenar el campo de Número de Télefono");
}else if(r13 != true){
    alert ("Caracter invalido en el campo del Número de Télefono");
    document.getElementById("tel").value = "";
}

}


</script>


</body>
</html>
<?php } ?>