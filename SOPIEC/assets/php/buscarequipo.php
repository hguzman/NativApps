<?php
require_once("db.php");
?>
<?php

$sesion = $_SESSION['username'];
$rol = $_SESSION['rol'];
if (!isset($sesion)) {
    header("location: ../../login.html");
} else {
    if ($rol == "admin") {
    } else {
        header("logout.php"); //Esta ruta hay que cambairla cuando se suba al hosting
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SOPIEC</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../css/font-awesome.css" rel="stylesheet" />
    <!-- FONTAWESOME CDN -->
    <script src="https://kit.fontawesome.com/763b114892.js" crossorigin="anonymous"></script>
    <!-- CUSTOM STYLES-->
    <link href="../css/style.css" rel="stylesheet" />
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
                    <a class="navbar-brand" href="../../index.php"><i class="fa fa-square-o "></i>&nbsp;SOPIEC</a>
                </div>
                <!-- Lista opciones -->
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">See Website</a></li>
                        <li><a href="#">Open Ticket</a></li>
                        <li><a href="logout.php">Cerrar sesión</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!--  Sidebar de opciones  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        <img src="../img/find_user.png" class="img-responsive" />
                    </li>
                    <!-- Primero/inicio -->
                    <li>
                        <a href="../../index.php"><i class="fa fa-desktop "></i>Inicio</a>
                    </li>
                    <!-- Segundo/Administracion de equipos -->
                    <li>
                        <a href="#"><i class="fa fa-edit "></i>Administración de equipos<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../../nuevousuario.php">Crear Nuevo usuario</a>
                            </li>
                            <li>
                                <a href="../../equipos.php">Ver equipos registrados</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Cuarto/Administracion de equipos -->
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Administración de equipos<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../../nuevoequipo.php">Agregar un equipo</a>
                            </li>
                            <li>
                                <a href="../../equipos.php">Gestionar equipo</a>
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

                        <div class="equipos-buscar">
                            <h2>equipos</h2>
                            <!-- Barra de busqueda -->
                            <form class="form-inline my-2 my-lg-0 barra-buscar" action="buscarequipo.php" method="GET">
                                <input class="form-control mr-sm-2" type="search" placeholder="Serial" aria-label="Search" id="buscar_equipo" name="buscar_equipo">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="boton_buscar" id="boton_buscar">Buscar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <hr />

                <!-- Busqueda por distintos criterios -->
                <?php
                $registros = mysqli_query($conexion, "select serial,marca,nombre,tipo_equipo,modelo_equipo,procesador,ram,disco_duro,sistema_operativo
                    from equipos where serial ='$_REQUEST[buscar_equipo]' 
")
                    or
                    die("Problemas en el select:" . mysqli_error($conexion));
                // // Alerta de criterio no encontrado NO SIRVE 
                // if (empty($registros)) {
                //     //mostrar mensaje
                //     $_SESSION['mensaje'] = 'El criterio de busqueda indicado no existe en la base de datos';
                //     $_SESSION['tipo_mensaje'] = 'danger';
                //     header('Location: ../../equipos.php');
                // }
                
                ?>
                <div id="contenedor-equipos" class="contenedor-equipos">
                    <div class="row contenedor-tabla">
                        <!-- Tabla de valores en base de datos -->
                        <table class="table">
                            <thead class="thead-light ">
                                <!-- Header de la tabla -->
                                <tr class="">
                                    <th scope="col">Serial</th>
                                    <th scope="col">marca </th>
                                    <th scope="col">nombre</th>
                                    <th scope="col">tipo de equipo</th>
                                    <th scope="col">modelo de equipo</th>
                                    <th scope="col">procesador</th>
                                    <th scope="col">ram</th>
                                    <th scope="col">disco duro</th>
                                    <th scope="col">sistema operativo</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                while ($reg = mysqli_fetch_array($registros)) {
                                ?>
                                    <!-- Contenido de la tabla -->
                                    <tr class="actual">
                                        <th scope="row">
                                            <input class="form-control" type="text" value="<?php echo $serial = $reg['serial'] ?>" readonly id="serial" name="serial" readonly> </th>
                                        <td> <?php echo $reg['marca'] ?></td>
                                        <td> <?php echo $reg['nombre'] ?></td>
                                        <td> <?php echo $reg['tipo_equipo'] ?></td>
                                        <td> <?php echo $reg['modelo_equipo'] ?> </td>
                                        <td> <?php echo $reg['procesador'] ?> </td>
                                        <td> <?php echo $reg['ram'] ?> </td>
                                        <td> <?php echo $reg['disco_duro'] ?> </td>
                                        <td> <?php echo $reg['sistema_operativo'] ?> </td>
                                        <td class="eliminar-editar">
                                            <!-- botones editar y eliminar -->
                                            <a id="edit" class="btn fa fa-pen" href="../../modificarequipo.php?serial=<?php echo $reg['serial']; ?>"></a>

                                            <a id="del" class="btn fa fa-trash-alt" href="borrarequipo.php?serial=<?php echo $reg['serial']; ?>"></a>
                                        </td>
                                    </tr>

                    </div>
                </div>

            <?php
                                }
                                mysqli_close($conexion);
            ?>
            </tbody>
            </table>
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
    <script src="../js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="../js/custom.js"></script>

</body>

</html>