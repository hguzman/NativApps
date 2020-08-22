<!-- Codigo de conexion al archivo db.php -->
<?php
include("assets/php/db.php");
?>
<?php

$sesion = $_SESSION['username'];
$rol = $_SESSION['rol'];
if (!isset($sesion)) {
    header("location: login.php");
} else {
    if ($rol == "admin") {
    } else {
        header("location: assets\php\logout.php"); //Esta ruta hay que cambairla cuando se suba al hosting
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Editar usuario</title>

    <!-- Bootstrap validator -->
    <link rel="stylesheet"
        href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" />

    <!-- Estilos CSS Toastr -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- Alertify -->
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js"></script>
</head>

<body>
    <?php
    $cedula = $_REQUEST['cedula'];
    require_once("assets/php/db.php");
    $registros = mysqli_query($conexion, "select * from usuarios
                        where cedula= '$cedula'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    if ($reg = mysqli_fetch_array($registros)) {

        $cedula = $reg['cedula'];
        $area = $reg['area'];
        $primer_nombre = $reg['primer_nombre'];
        $segundo_nombre = $reg['segundo_nombre'];
        $primer_apellido = $reg['primer_apellido'];
        $segundo_apellido = $reg['segundo_apellido'];
        $email = $reg['email'];
        $contrasena = $reg['contrasena'];
        $addrol = $reg['rol']

    ?>
    <!-- Contenedor principal -->
    <div id="wrapper">
        <!-- Header -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><i class="fa fa-square-o "></i>&nbsp;SOPIEC</a>
                </div>
                <!-- Lista opciones -->
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">See Website</a></li>
                        <li><a href="#">Open Ticket</a></li>
                        <li><a href="assets/php/logout.php">Cerrar sesión</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!--  Sidebar de opciones  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        <img src="assets/img/find_user.png" class="img-responsive" />
                    </li>
                    <!-- Primero/inicio -->
                    <li>
                        <a href="index.php"><i class="fa fa-desktop "></i>Inicio</a>
                    </li>
                    <!-- Segundo/Administracion de usuarios -->
                    <li>
                        <a href="#"><i class="fa fa-edit "></i>Administración de usuarios<span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="nuevousuario.php">Crear Nuevo usuario</a>
                            </li>
                            <li>
                                <a href="usuarios.php">Ver usuarios registrados</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Cuarto/Administracion de equipos -->
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Administración de equipos<span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="nuevoequipo.php">Agregar un equipo</a>
                            </li>
                            <li>
                                <a href="equipos.php">Gestionar equipo</a>
                            </li>

                        </ul>
                    </li>
                    <!--  Quinto/A cerca de SOPIEC-->
                    <li>
                        <a href="#"><i class="fa fa-qrcode "></i>A cerca de SOPIEC</a>
                    </li>
                </ul>

            </div>

        </nav>

        <!-- Contenido de la pagina, lado derecho ancho -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Modificar usuario</h2>
                    </div>
                </div>
                <hr>

                <!-- Formulario de creacion de usuario -->
                <form id="formActualizar" class="form-nuevo-cliente" action="assets/php/actualizar.php" method="POST">
                    <!-- Row de email y pass -->
                    <div class="form-row">
                        <!-- Cedula de ciudadania -->
                        <div class="form-group col-md-6">
                            <label for="registrar-primer-nombre">Cedula de ciudadania</label>
                            <input type="number" class="form-control" id="cedula" name="cedula"
                                placeholder="112223344556" require value="<?php echo $cedula ?>" readonly>
                        </div>
                        <!-- Area de trabajo -->
                        <div class="form-group col-md-6">
                            <label for="registrar-segundo-nombre">Area de trabajo</label>
                            <input type="number" class="form-control" id="area" name="area" placeholder="5" require
                                value="<?php echo $area ?>">
                        </div>
                        <!-- Primer nombre -->
                        <div class="form-group col-md-6">
                            <label for="registrar-primer-nombre">Primer nombre</label>
                            <input type="text" class="form-control" id="primer_nombre" name="primer_nombre"
                                placeholder="Andrés" require value="<?php echo $primer_nombre ?>">
                        </div>
                        <!-- Segundo nombre -->
                        <div class="form-group col-md-6">
                            <label for="registrar-segundo-nombre">Segundo nombre</label>
                            <input type="text" class="form-control" id="segundo_nombre" name="segundo_nombre"
                                placeholder="José" value="<?php echo $segundo_nombre ?>">
                        </div>
                        <!-- Primer apellido -->
                        <div class="form-group col-md-6">
                            <label for="registrar-primer-apellido">Primer apellido</label>
                            <input type="text" class="form-control" id="primer_apellido" name="primer_apellido"
                                placeholder="Salas" require value="<?php echo $primer_apellido ?>">
                        </div>
                        <!-- Segundo apellido -->
                        <div class="form-group col-md-6">
                            <label for="registrar-segundo-apellido">Segundo apellido</label>
                            <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido"
                                placeholder="Casas" value="<?php echo $segundo_apellido ?>">
                        </div>
                        <!-- Email -->
                        <div class="form-group col-md-6">
                            <label for="registrar-email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="correo_143@correo.com" require value="<?php echo $email ?>">
                            <!-- Div de carga -->
                            <div id="result-email"></div>
                        </div>
                        <!-- Contraseña -->
                        <div class="form-group col-md-6">
                            <label for="registrar-contrasena">Contraseña</label>
                            <input type="password" class="form-control" id="contrasena" name="contrasena"
                                placeholder="*********" require value="<?php echo $contrasena ?>">

                        </div>
                        <!-- Rol -->
                        <div class="form-group input-group mb-3 rol-derecha">
                            <select name="addrol_select" id="addrol_select">
                                <option selected value="<?php echo $addrol ?>" id="seleccionado">Rol actual:
                                    <?php echo $addrol ?></option>
                                <option value="user">User</option>
                                <option value="admin" id="user">Admin</option>
                            </select>
                            <div class="input-group-append">
                                <label for="addrol">Rol</label>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-12 botones-newUser">
                        <button type="submit" class="btn btn-success btn-lg r" name="modificarUser"
                            value="modificarUser" id="modificarUser" value="modificarUser">Actualizar</button>
                        <a href="usuarios.php" class="btn btn-primary btn-lg r">Cancelar</a>
                    </div>
                </form>

            </div>

            <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->

    </div>
    <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <?php
    } else {
        echo ("<script>
            alert('La cedula seleccionada no fue encontrada en la base de datos');
    </script>");
        header("Location: usuarios.php");
    }
    ?>

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/validaciones.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <!-- CDN Jquery-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Script Toastr -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="assets/js/validaciones.js"></script>

    <!-- Bootstrap validator -->
    <script type="text/javascript"
        src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>

    <!-- Ajax valdiacion en BD en vivo -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#email').on('blur', function () {
                $('#result-email').html('<img src="assets/img/loader.gif" />').fadeOut(1000);

                var email = $(this).val();
                var dataString = 'email=' + email;
                $.ajax({
                    type: "POST",
                    url: "assets/php/checkearDisponibilidad.php",
                    data: dataString,
                    success: function (data) {
                        $('#result-email').fadeIn(1000).html(data);
                    }
                });
            });
        });
    </script>

</body>

</html>