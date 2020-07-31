<!-- Codigo de conexion al archivo db.php -->
<?php
include("assets/php/db.php");
?>
<?php

$sesion = $_SESSION['username'];
$rol = $_SESSION['rol'];
if (!isset($sesion)) {
    header("location: login.html");
} else {
    if($rol == "admin"){

    }else{
        header("location: assets\php\logout.php");//Esta ruta hay que cambairla cuando se suba al hosting
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crear nuevo equipo</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link rel="stylesheet" href="assets/css/style.css">
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
                    <a class="navbar-brand" href="#"><i class="fa fa-square-o "></i>&nbsp;SOPIEC</a>
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
                        <a href="#"><i class="fa fa-edit "></i>Administración de usuarios<span class="fa arrow"></span></a>
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
                        <a href="#"><i class="fa fa-sitemap "></i>Administración de equipos<span class="fa arrow"></span></a>
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
                        <!-- Formulario de creacion de equipo -->
                        <h2>Agregar nuevo equipo</h2>
                    </div>
                </div>
                <hr/>

                <form class="form-nuevo-cliente" action="assets/php/guardarequipo.php" method="POST">

                    <!-- Row de email y pass -->
                    <div class="form-row">
                        <!-- serial -->
                        <div class="form-group col-md-6">
                            <label for="registrar-primer-nombre">Serial</label>
                            <input type="text" class="form-control" id="serial" name="serial" placeholder="112223344556" require>
                        </div>
                        <!-- marca -->
                        <div class="form-group col-md-6">
                            <label for="registrar-segundo-nombre">marca</label>
                            <input type="text" class="form-control" id="marca" name="marca" placeholder="HP/LENOVO/ETC" require>
                        </div>
                        <!-- nombre -->
                        <div class="form-group col-md-6">
                            <label for="registrar-primer-nombre">nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="DESKTOP-XXXCCXZXC" require>
                        </div>
                        <!-- tIPO EQUIPO -->
                        <div class="form-group col-md-6">
                            <label for="registrar-segundo-nombre">Tipo equipo</label>
                            <input type="text" class="form-control" id="tipo_equipo" name="tipo_equipo" placeholder="ALL IN ONE / PORTATIL">
                        </div>
                        <!-- Modelo equipo -->
                        <div class="form-group col-md-6">
                            <label for="registrar-primer-apellido">Modelo equipo</label>
                            <input type="text" class="form-control" id="modelo_equipo" name="modelo_equipo" placeholder="123123XXXXXX" require>
                        </div>
                        <!-- procesador -->
                        <div class="form-group col-md-6">
                            <label for="registrar-segundo-apellido">procesador</label>
                            <input type="text" class="form-control" id="procesador" name="procesador" placeholder="Casas">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="registrar-email">ram</label>
                            <input type="text" class="form-control" id="ram" name="ram" placeholder="Xgb ram tipo X" require>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="registrar-contrasena">disco_duro</label>
                            <input type="text" class="form-control" id="disco_duro" name="disco_duro" placeholder="marca del disco duro  " require>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="registrar-contrasena">sistema operativo</label>
                            <input type="text" class="form-control" id="sistema_operativo" name="sistema_operativo" placeholder="marca del disco duro  " require>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="registrar-contrasena">estado del equipo</label>
                            <input type="text" class="form-control" id="estado" name="estado" placeholder="  " require>
                        </div>


                    </div>

                    <button type="submit" class="btn btn-success ajustar-boton" name="registrar" value="registrar" id="registrar">Registrar</button>
                </form>

            </div>

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
    <!-- Sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="assets/js/validaciones.js"></script>




</body>

</html>