<!DOCTYPE html>
<?php
require_once("assets/php/db.php");
$sesion = $_SESSION['username'];
if (!isset($sesion)) {
    header("location: login.php");
} else {
}

?>

<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SOPIEC</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <!-- CUSTOM STYLES-->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>



<body>
    <!-- recuperar datos de la DB -->
    <?php
    

    $registros = mysqli_query($conexion, "select * from usuarios WHERE cedula = '$sesion' ") or
        die("Problemas en el select:" . mysqli_error($conexion));
    $reg = mysqli_fetch_array($registros);
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
                        <img src="assets/img/find_user.png" class="img-responsive" />
                    </li>
                    <!-- Primero/inicio -->
                    <li>
                        <a href="index_user.php"><i class="fa fa-desktop "></i>Inicio</a>
                    </li>
                    <!-- Segundo/Administracion de usuarios -->
                    <li>
                    <li>
                        <a href="vista_usuario.php"><i class="fas fa-user"></i>Ver mi usuario registrado</a>
                    </li>
                    </li>
                    <!-- Tercero/Inventario de equipos -->
                    <li>
                        <a href="equipos_user.php"><i class="fa fa-table "></i>Ver Inventario de equipos</a>
                    </li>

                    <!-- Cuarto/Administracion de equipos -->
                    <li>

                    <li>
                        <a href="miequipo_user.php"><i class="fas fa-laptop-code"></i>Gestionar mi equipo</a>
                    </li>


                    </li>
                    <!--  Quinto/A cerca de SOPIEC-->
                    <li>
                        <a href="info.php"><i class="fa fa-qrcode "></i>A cerca de SOPIEC</a>
                    </li>
                </ul>

            </div>

        </nav>

        <!-- Contenido de la pagina, lado derecho ancho  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <h2>Mi usuario</h2>
                <hr>

                <p> <strong> ID/Cedula: </strong> <?php echo $reg['cedula'] ?> </p>
                <p> <strong>Area:</strong> </strong> <?php echo $reg['area'] ?> </p>
                <p><strong> Primer nombre: </strong> <?php echo $reg['primer_nombre'] ?> </p>
                <p><strong> Segundo nombre: </strong> <?php echo $reg['segundo_nombre'] ?> </p>
                <p><strong> Primer Apellido: </strong> <?php echo $reg['primer_apellido'] ?> </p>
                <p><strong> Segundo Apellido: </strong> <?php echo $reg['segundo_apellido'] ?> </p>
                <p><strong> Correo:</strong> <?php echo $reg['email'] ?></p>
                <p><strong> Rol: </strong><?php echo $reg['rol'] ?></p>





                <br>
                <?php
                mysqli_free_result($registros);
                mysqli_close($conexion);
                ?>


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