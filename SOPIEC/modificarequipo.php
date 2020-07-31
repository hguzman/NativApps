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
    <title>Editar equipo</title>
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
    $serial = $_REQUEST['serial'];
    require_once("assets/php/db.php");
    $registros = mysqli_query($conexion, "select * from equipos
                        where serial= '$serial'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    if ($reg = mysqli_fetch_array($registros)) {

        $serial = $reg['serial'];
        $marca = $reg['marca'];
        $nombre = $reg['nombre'];
        $tipo_equipo = $reg['tipo_equipo'];
        $modelo_equipo = $reg['modelo_equipo'];
        $procesador = $reg['procesador'];
        $ram = $reg['ram'];
        $disco_duro = $reg['disco_duro'];
        $sistema_operativo = $reg['sistema_operativo'];

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
                        <a class="navbar-brand" href="#"><i class="fa fa-square-o "></i>&nbsp;SOPIEC</a>
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
                            <h2>Modificar equipo</h2>
                        </div>
                    </div>
                    <hr>
                    <!-- Formulario de creacion de equipo -->
                    <form class="form-nuevo-cliente" action="assets/php/actualizarequipo.php" method="POST">

                        <!-- Row de email y pass -->
                        <div class="form-row">
                            <!-- SERIAL -->
                            <div class="form-group col-md-6">
                                <label for="registrar-primer-nombre">SERIAL</label>
                                <input type="text" class="form-control" id="serial" name="serial" placeholder="112223344556" require value="<?php echo $serial ?>" readonly>
                            </div>
                            <!-- marca -->
                            <div class="form-group col-md-6">
                                <label for="registrar-segundo-nombre">marca</label>
                                <input type="text" class="form-control" id="marca" name="marca" placeholder="5" require value="<?php echo $marca ?>">
                            </div>
                            <!-- nombre -->
                            <div class="form-group col-md-6">
                                <label for="registrar-primer-nombre">nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Andrés" require value="<?php echo $nombre ?>">
                            </div>
                            <!-- tipo de equipo -->
                            <div class="form-group col-md-6">
                                <label for="registrar-segundo-nombre">tipo de equipo</label>
                                <input type="text" class="form-control" id="tipo_equipo" name="tipo_equipo" placeholder="José" value="<?php echo $tipo_equipo ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="registrar-segundo-nombre">modelo de equipo</label>
                                <input type="text" class="form-control" id="modelo_equipo" name="modelo_equipo" placeholder="José" value="<?php echo $modelo_equipo ?>">
                            </div>
                            <!-- procesador -->
                            <div class="form-group col-md-6">
                                <label for="registrar-primer-apellido">procesador</label>
                                <input type="text" class="form-control" id="procesador" name="procesador" placeholder="Salas" require value="<?php echo $procesador ?>">
                            </div>
                            <!-- ram -->
                            <div class="form-group col-md-6">
                                <label for="registrar-segundo-apellido">ram</label>
                                <input type="text" class="form-control" id="ram" name="ram" placeholder="Casas" value="<?php echo $ram ?>">
                            </div>
                            <!-- disco duro  -->
                            <div class="form-group col-md-6">
                                <label for="registrar-email">disco duro </label>
                                <input type="text" class="form-control" id="disco_duro" name="disco_duro" placeholder="MARCA xGB SSD/HDD" require value="<?php echo $disco_duro ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="registrar-contrasena">sistema operativo</label>
                                <input type="text" class="form-control" id="sistema_operativo" name="sistema_operativo" placeholder="WINDOWS/UBUNTU/ETC" require value="<?php echo $sistema_operativo ?>">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success ajustar-boton" name="registrar" value="registrar" id="registrar" onclick="">Actualizar</button>
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



    <?php
    } else {
        echo "No existe registro con dicho serial";
    }

    ?>

</body>

</html>