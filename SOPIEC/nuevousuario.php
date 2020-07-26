<!-- Codigo de conexion al archivo db.php -->
<?php
<<<<<<< HEAD
include("assets/php/db.php");
=======
include('assets/php/db.php');
>>>>>>> b2069c4422d8f7740f1416b5e14c27db9a2adde1
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
<<<<<<< HEAD
    <!-- Alertify -->
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js"></script>
=======
>>>>>>> b2069c4422d8f7740f1416b5e14c27db9a2adde1
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
<<<<<<< HEAD
                    <a class="navbar-brand" href="#"><i class="fa fa-square-o "></i>&nbsp;SOPIEC</a>
=======
                    <a class="navbar-brand" href="index.php"><i class="fa fa-square-o "></i>&nbsp;SOPIEC</a>
>>>>>>> b2069c4422d8f7740f1416b5e14c27db9a2adde1
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

<<<<<<< HEAD
        <!--  Sidebar de opciones  -->
=======
        <!-- /. NAV TOP  -->
>>>>>>> b2069c4422d8f7740f1416b5e14c27db9a2adde1
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        <img src="assets/img/find_user.png" class="img-responsive" />
                    </li>
                    <!-- Primero/inicio -->
                    <li>
<<<<<<< HEAD
                        <a href="index.html"><i class="fa fa-desktop "></i>Inicio</a>
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
=======
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
>>>>>>> b2069c4422d8f7740f1416b5e14c27db9a2adde1
                            </li>
                        </ul>
                    </li>
                    <!-- Tercero/Inventario de equipos -->
                    <li>
                        <a href="#"><i class="fa fa-table "></i>Ver Inventario de equipos</a>
                    </li>
<<<<<<< HEAD

                    <!-- Cuarto/Administracion de equipos -->
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Administración de equipos<span
                                class="fa arrow"></span></a>
=======
                    <!-- Cuarto/Administracion de equipos -->
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Administración de equipos<span class="fa arrow"></span></a>
>>>>>>> b2069c4422d8f7740f1416b5e14c27db9a2adde1
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

<<<<<<< HEAD
        <!-- Contenido de la pagina, lado derecho ancho -->
=======
        <!-- /. NAV SIDE  -->
>>>>>>> b2069c4422d8f7740f1416b5e14c27db9a2adde1
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Crear nuevo usuario</h2>
                    </div>
                </div>

<<<<<<< HEAD

=======
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
>>>>>>> b2069c4422d8f7740f1416b5e14c27db9a2adde1

                <!-- Formulario de creacion de usuario -->
                <form class="form-nuevo-cliente" action="assets/php/guardarinfo.php" method="POST">

                    <!-- Row de email y pass -->
                    <div class="form-row">
                        <!-- Cedula de ciudadania -->
                        <div class="form-group col-md-6">
                            <label for="registrar-primer-nombre">Cedula de ciudadania</label>
<<<<<<< HEAD
                            <input type="number" class="form-control" id="cedula" name="cedula"
                                placeholder="112223344556" require>
=======
                            <input type="number" class="form-control" id="cedula" name="cedula" placeholder="112223344556">
>>>>>>> b2069c4422d8f7740f1416b5e14c27db9a2adde1
                        </div>
                        <!-- Area de trabajo -->
                        <div class="form-group col-md-6">
                            <label for="registrar-segundo-nombre">Area de trabajo</label>
<<<<<<< HEAD
                            <input type="number" class="form-control" id="area" name="area" placeholder="5" require>
=======
                            <input type="number" class="form-control" id="area" name="area" placeholder="5">
>>>>>>> b2069c4422d8f7740f1416b5e14c27db9a2adde1
                        </div>
                        <!-- Primer nombre -->
                        <div class="form-group col-md-6">
                            <label for="registrar-primer-nombre">Primer nombre</label>
<<<<<<< HEAD
                            <input type="text" class="form-control" id="primer_nombre" name="primer_nombre"
                                placeholder="Andrés" require>
=======
                            <input type="text" class="form-control" id="primer_nombre" name="primer_nombre" placeholder="Andrés">
>>>>>>> b2069c4422d8f7740f1416b5e14c27db9a2adde1
                        </div>
                        <!-- Segundo nombre -->
                        <div class="form-group col-md-6">
                            <label for="registrar-segundo-nombre">Segundo nombre</label>
<<<<<<< HEAD
                            <input type="text" class="form-control" id="segundo_nombre" name="segundo_nombre"
                                placeholder="José">
=======
                            <input type="text" class="form-control" id="segundo_nombre" name="segundo_nombre" placeholder="José">
>>>>>>> b2069c4422d8f7740f1416b5e14c27db9a2adde1
                        </div>
                        <!-- Primer apellido -->
                        <div class="form-group col-md-6">
                            <label for="registrar-primer-apellido">Primer apellido</label>
<<<<<<< HEAD
                            <input type="text" class="form-control" id="primer_apellido" name="primer_apellido"
                                placeholder="Salas" require>
=======
                            <input type="text" class="form-control" id="primer_apellido" name="primer_apellido" placeholder="Salas">
>>>>>>> b2069c4422d8f7740f1416b5e14c27db9a2adde1
                        </div>
                        <!-- Segundo apellido -->
                        <div class="form-group col-md-6">
                            <label for="registrar-segundo-apellido">Segundo apellido</label>
<<<<<<< HEAD
                            <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido"
                                placeholder="Casas">
=======
                            <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido" placeholder="Casas">
>>>>>>> b2069c4422d8f7740f1416b5e14c27db9a2adde1
                        </div>

                        <div class="form-group col-md-6">
                            <label for="registrar-email">Email</label>
<<<<<<< HEAD
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="correo_143@correo.com" require>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="registrar-contrasena">Contraseña</label>
                            <input type="password" class="form-control" id="contrasena" name="contrasena"
                                placeholder="*********" require>
                            <p class="mensaje text-danger">*La contraseña debe tener más de 8 caracteres</p>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success ajustar-boton" name="registrar" value="registrar"
                        id="registrar">Registrar</button>
                </form>

            </div>



            <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->

    </div>
    <!-- /. PAGE WRAPPER  -->
=======
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
>>>>>>> b2069c4422d8f7740f1416b5e14c27db9a2adde1
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
<<<<<<< HEAD
    <!-- Sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

    <script src="assets/js/validaciones.js"></script>

=======
>>>>>>> b2069c4422d8f7740f1416b5e14c27db9a2adde1



</body>

</html>