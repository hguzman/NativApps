﻿<!DOCTYPE html>
<?php
require_once("assets/php/db.php");
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

$cc= "SELECT cedula FROM usuarios WHERE cedula='$sesion'";
?>

<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SOPIEC</title>
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
                    <a class="navbar-brand" href="#"><i class="fa fa-square-o "></i>&nbsp;SOPIEC</a>
                </div>
                <!-- Lista opciones -->
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a>Rol: <?php echo $rol = $_SESSION['rol']; ?> </a></li>
                        <li><a>Sesion: <?php echo $sesion = $_SESSION['username']; ?> </a></li>
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
                        <!-- recuperar imagen de la base de datos -->
                        <?php
                
                $query = "SELECT imagen from avatares, usuarios where avatar_id = ID and cedula = $sesion";

                $registros_a = mysqli_query($conexion, $query) or
                    die("Problemas en el select:" . mysqli_error($conexion));
                    $reg_a = mysqli_fetch_array($registros_a)
                    ?>

                        <a href="perfil.php"><img
                                src="data:image/jpg;base64, <?php echo base64_encode($reg_a['imagen']) ?>"
                                height="150px " class="rounded-circle"></td></a>
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

        <!-- Contenido de la pagina, lado derecho ancho  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Panel de Administracion</h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <h3>Asignación de equipos</h3>
                <div class="listas-eq-us">
                    <!-- Query Seleccionar usuarios-->
                    <?php 
                $registros = mysqli_query($conexion,"SELECT * FROM usuarios") or die("Problemas en el select:" . mysqli_error($conexion));
                ?>
                    <div class="form-group multiple" id="user-list">
                        <label for="exampleFormControlSelect2">Seleccione un usuario</label>
                        <select multiple class="escojer-user form-control" id="exampleFormControlSelect2">
                            <?php
                                while ($reg = mysqli_fetch_array($registros)) {
                                ?>
                            <option>
                                <?php echo $reg['cedula']."   ".$reg['primer_nombre']."   ".$reg['primer_apellido'] ?>
                            </option>
                            <?php
                                }
                                
                            ?>
                        </select>
                    </div>
                    <!--Query Select Equipos  -->
                    <?php 
                $registros_e = mysqli_query($conexion,"SELECT * FROM equipos") or die("Problemas en el select:" . mysqli_error($conexion));
                ?>
                    <div class="form-group multiple">
                        <label for="exampleFormControlSelect2">Seleccione un equipo</label>
                        <select multiple class="escojer-user form-control" id="exampleFormControlSelect2">
                            <?php
                                while ($reg_e = mysqli_fetch_array($registros_e)) {
                                ?>
                            <option>
                                <?php echo $reg_e['serial']."   ".$reg_e['nombre']."   ".$reg_e['tipo_equipo']."   ".$reg_e['estado'] ?>
                            </option>
                            <?php
                                }
                                mysqli_close($conexion);
                            ?>
                        </select>
                    </div>
                </div>
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