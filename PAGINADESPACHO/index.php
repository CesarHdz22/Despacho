<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" >
        <meta name="author" content="" >
        <title>Iniciar sesion</title>
        <link rel="icon" href="assets/img/images (1).png" type="image/x-icon">
        <link href="css/styles.css" rel="stylesheet" />
        <script src="js/fonts.js" crossorigin="anonymous"></script>

    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div >
                        <div class="row justify-content-center">
                            <div class="col-lg-5" >
                               
                                <div class="card shadow-lg border-0 rounded-lg mt-5" style="position:relative; top:5em; ">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Iniciar sesion</h3></div>
                                    <div  class="card-body">



                                        <form action="login.php" method="post" >
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="usuario" id="inputEmail" type="text" placeholder="name@example.com" required>
                                                <label for="inputEmail">Usuario</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="contra" id="inputPassword" type="password" placeholder="Password" required>
                                                <label for="inputPassword">Contraseña</label>
                                            </div>
                                            
                                            <div>
                                                <center><input type="submit" class="btn btn-primary" value="Iniciar sesion"></center>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="js/boot.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
