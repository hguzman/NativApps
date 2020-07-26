<!-- Codigo de conexion al archivo db.php -->
<?php
include('assets/php/db.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crear nuevo usuario</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
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
                        <li><a href="#">Cerrar sesión</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- /. NAV TOP  -->
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
                        <a href="#"><i class="fa fa-edit "></i>Administración de usuarios<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Crear Nuevo usuario</a>
                            </li>
                            <li>
                                <a href="#">Eliminar Usuario</a>
                            </li>
                            <li>
                                <a href="#">Modificar usuario</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Tercero/Inventario de equipos -->
                    <li>
                        <a href="#"><i class="fa fa-table "></i>Ver Inventario de equipos</a>
                    </li>
                    <!-- Cuarto/Administracion de equipos -->
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Administración de equipos<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Agregar un equipo</a>
                            </li>
                            <li>
                                <a href="#">Modificar un equipo</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>

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

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Crear nuevo usuario</h2>
                    </div>
                </div>

                <!-- /. ROW  -->
                <hr />

                <!--MOSTRAR  MENSAJE-->
                <?php if (isset($_SESSION['mensaje'])) : ?>

                    <div class="container alert alert-<?php echo $_SESSION['tipo_mensaje']; ?> alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION['mensaje']; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!--LIMPIAR LOS DATOS DE LA SESSION-->
                    <?php session_unset(); ?>

                <?php endif; ?>

                <!-- Formulario de creacion de usuario -->
                <form class="form-nuevo-cliente" action="assets/php/guardarinfo.php" method="POST">

                    <!-- Row de email y pass -->
                    <div class="form-row">
                        <!-- Cedula de ciudadania -->
                        <div class="form-group col-md-6">
                            <label for="registrar-primer-nombre">Cedula de ciudadania</label>
                            <input type="number" class="form-control" id="cedula" name="cedula" placeholder="112223344556">
                        </div>
                        <!-- Area de trabajo -->
                        <div class="form-group col-md-6">
                            <label for="registrar-segundo-nombre">Area de trabajo</label>
                            <input type="number" class="form-control" id="area" name="area" placeholder="5">
                        </div>
                        <!-- Primer nombre -->
                        <div class="form-group col-md-6">
                            <label for="registrar-primer-nombre">Primer nombre</label>
                            <input type="text" class="form-control" id="primer_nombre" name="primer_nombre" placeholder="Andrés">
                        </div>
                        <!-- Segundo nombre -->
                        <div class="form-group col-md-6">
                            <label for="registrar-segundo-nombre">Segundo nombre</label>
                            <input type="text" class="form-control" id="segundo_nombre" name="segundo_nombre" placeholder="José">
                        </div>
                        <!-- Primer apellido -->
                        <div class="form-group col-md-6">
                            <label for="registrar-primer-apellido">Primer apellido</label>
                            <input type="text" class="form-control" id="primer_apellido" name="primer_apellido" placeholder="Salas">
                        </div>
                        <!-- Segundo apellido -->
                        <div class="form-group col-md-6">
                            <label for="registrar-segundo-apellido">Segundo apellido</label>
                            <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido" placeholder="Casas">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="registrar-email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="correo_143@correo.com">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="registrar-contrasena">Contraseña</label>
                            <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="*********">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success ajustar-boton" name="registrar" value="registrar" id="registrar" >Registrar</button>
                </form>
                <!-- /. ROW  -->
            </div>
            <!-- /. PAGE INNER  -->

        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>



</body>

</html>