<?php 
                        session_start();
                        include_once("conexion.php");
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
        <title>Agregar Usuario</title>
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


<div id="layoutSidenav_content">
                <main>
                

    <form method="post" action="insertaru.php" class="w-50 rounded-5 px-5 mt-5 mx-auto registro" style="height : 15px">
 
        <label class="fw-bold equipos text-center pt-5"> Ingresar Datos </label><br><br>
            <div class="mb-3">

              
                <label for="expediente" class="form-label">Nombre(s) <b style="color:red;">*</b></label>
                    <input type="text" class="form-control" name="nom" id="nom" required>

                    

                <label for="juicio" class="form-label">Apellido Paterno <b style="color:red;">*</b></label>
                    <input type="text" class="form-control" name="apaterno" id="apaterno" required>

                    <label for="correo" u_act="form-label">Apellido Materno <b style="color:red;">*</b></label>
                    <input type="text" class="form-control" name="amaterno" id="amaterno" required>
<label for="expediente" class="form-label">Usuario (El usuario no debe se mayor a 15 caracteres)<b style="color:red;">*</b></label>
                    <input type="text" class="form-control" name="usu" id="usu" required>
                    <label for="a_por_realizar" class="form-label">Telefono <b style="color:red;">*</b></label>
                    <input type="text" class="form-control" name="tel" id="tel" required>

                    <label for="a_por_realizar" class="form-label">Correo <b style="color:red;">*</b></label>
                    <input type="text" class="form-control" name="correo" id="correo" required>

                    <label for="a_por_realizar" class="form-label">Contraseña <b style="color:red;">*</b></label>
                    <input type="text" class="form-control" name="contrasenia" id="contrasenia" required>

                    <label for="a_por_realizar" class="form-label">Insertar nueva etiqueta de Google Calendar<b style="color:red;">*</b> </label>
                    <input type="text" class="form-control" name="etiqueta" id="etiqueta" >

                    <label for="tipo" class="form-label" id="ti">Cargo <b style="color:red;">*</b></label>
                    <select class="form-select" name="cargo" id="cargo" style="background-color: lightgray; border: 1px solid rgb(117, 117, 117);">
                        <option value="0">Escoge una opción</option>
                        <option value="1">Administrador</option>
                        <option value="2">Usuario</option>
                           
                    </select><br>


                
                
            </div>
        <center><div class="text-cente"  id="cont" >
            <input type="submit" value="Ingresar" class="btn btn-primary mb-5 w-25 me-4" onclick="validar()">
            <button type="button" class="btn btn-secondary mb-5 w-25" onclick="javascript: history.go(-1)" >Regresar</button>
        </div></center>

        <script type="text/javascript">
  
function validar() {
    
    var nombre = document.getElementById("nom").value;
    var usu = document.getElementById("usu").value;
    var apaterno = document.getElementById("apaterno").value;
    var amaterno = document.getElementById("amaterno").value;
    var telefono = document.getElementById("tel").value;
    var correo = document.getElementById("correo").value;
    var contrasenia = document.getElementById("contrasenia").value;
    var cargo = document.getElementById("cargo").value;
    var etiqueta = document.getElementById("etiqueta").value;
    
    var nombres = /^[A-Zñ" "áéíóúÁÉÍÓÚ]+$/i;
    var telefonos = /^[0-9]+$/;
    var correos = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    var usuarios =/^[A-Zñ" "áéíóúÁÉÍÓÚ0-9]+$/i;
    var e1 = /<iframe\b[^>]*>[\s\S]*<\/iframe>/;
    

    var r1 = nombres.test(nombre);
    var r2 = nombres.test(apaterno);
    var r3 = nombres.test(amaterno);
    var r4=telefonos.test(telefono);
    var r5=correos.test(correo);
    var r6=usuarios.test(usu);
    var r7=e1.test(etiqueta);
    

        if (document.getElementById("nom").value == ""){
            alert("Escribe el nombre");
        }else if (r1 != true) {
            alert("El nombre contiene caracteres invalidos");
        document.getElementById("nom").value="";
        }

        if (document.getElementById("usu").value == ""){
            alert("Escribe el usuario");
        }else if (r6 != true) {
            alert("El usuario contiene caracteres invalidos");
        document.getElementById("usu").value="";
        }else if(usu.lenght > 15){
            alert("Escriba un usuario menor a 15 caracteres");
        document.getElementById("usu").value="";
        }

        if (document.getElementById("apaterno").value == ""){
            alert("Escribe el apellido paterno");
        }else if (r2 != true) {
            alert("El apellido paterno contiene caracteres invalidos");
        document.getElementById("apaterno").value="";
        }

        if (document.getElementById("amaterno").value == ""){
            alert("Escribe el apellido materno");
        }else if (r3 != true) {
            alert("El apellido materno contiene caracteres invalidos");
        document.getElementById("amaterno").value="";
        }

        if(document.getElementById("tel").value==""){
        alert("Escriba un Número de Telefono"); 
                }else if (r4 != true) {
            alert("Numero de telefono no valido");
        document.getElementById("tel").value = "";
}

            if(document.getElementById("correo").value == ""){
            alert("Escriba el Correo");
			}else if(r5 != true){

			alert("Correo no valido")
			document.getElementById("correo").value = "";

			}

            if(document.getElementById("contrasenia").value==""){
                alert("Escriba una contraseña");
            }

            if(document.getElementById("cargo").value==0){
                alert("seleccione un cargo valido");
            }
            if(r7 != true){
                alert("Etiqueta de Google Calendar no valida");
                document.getElementById("etiqueta").value = "";
            }




}

                        
                        </script>
    </form>
    </main>
                

              
               
            </div>
            
        </div>
</body>
</html>
<?php } ?>