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

        <!-- Contenido de la pagina, lado derecho ancho  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Alerta -->
                        <?php if (isset($_SESSION['mensaje'])) : ?>
                            <div class="container ancho100 bg-<?php echo $_SESSION['tipo_mensaje']; ?>">
                                <?php echo $_SESSION['mensaje']; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                        <?php endif; ?>
                        <div class="usuarios-buscar">
                            <h2>Usuarios</h2>
                            <!-- Barra de busqueda -->
                            <form class="form-inline my-2 my-lg-0 barra-buscar" action="buscarusuario.php" method="GET">
                                <input class="form-control mr-sm-2" type="search" placeholder="C.C" aria-label="Search" id="buscar_usuario" name="buscar_usuario">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="boton_buscar" id="boton_buscar">Buscar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <hr />

                <!-- Busqueda por distintos criterios -->
                <?php
                $registros = mysqli_query($conexion, "select cedula,area,primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,email
from usuarios where cedula ='$_REQUEST[buscar_usuario]' 
or primer_nombre='$_REQUEST[buscar_usuario]' 
or area='$_REQUEST[buscar_usuario]' 
or email='$_REQUEST[buscar_usuario]'
or primer_apellido='$_REQUEST[buscar_usuario]'")
                    or
                    die("Problemas en el select:" . mysqli_error($conexion));
                // Alerta de criterio no encontrado NO SIRVE 
                if (empty($registros)) {
                    //mostrar mensaje
                    $_SESSION['mensaje'] = 'El criterio de busqueda indicado no existe en la base de datos';
                    $_SESSION['tipo_mensaje'] = 'danger';
                    header('Location: ../../usuarios.php');
                }
                ?>
                <div id="contenedor-usuarios" class="contenedor-usuarios">
                    <div class="row contenedor-tabla">
                        <!-- Tabla de valores en base de datos -->
                        <table class="table">
                            <thead class="thead-light ">
                                <!-- Header de la tabla -->
                                <tr class="">
                                    <th scope="col">ID/Cedula</th>
                                    <th scope="col">Primer nombre</th>
                                    <th scope="col">Area</th>
                                    <th scope="col">Segundo nombre</th>
                                    <th scope="col">Primer apellido</th>
                                    <th scope="col">Segundo apellido</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                while ($reg = mysqli_fetch_array($registros)) {
                                ?>
                                    <!-- Contenido de la tabla -->
                                    <tr class="actual">
                                        <th scope="row">
                                            <input class="form-control" type="number" value="<?php echo $cedula = $reg['cedula'] ?>" readonly id="cedula" name="cedula" readonl> </th>
                                        <td> <?php echo $reg['primer_nombre'] ?></td>
                                        <td> <?php echo $reg['area'] ?></td>
                                        <td> <?php echo $reg['segundo_nombre'] ?></td>
                                        <td> <?php echo $reg['primer_apellido'] ?> </td>
                                        <td> <?php echo $reg['segundo_apellido'] ?> </td>
                                        <td> <?php echo $reg['email'] ?> </td>
                                        <td class="eliminar-editar">
                                            <!-- botones editar y eliminar -->
                                            <a id="edit" class="btn fa fa-pen" href="../../modificar.php?cedula=<?php echo $reg['cedula']; ?>"></a>

                                            <a id="del" class="btn fa fa-trash-alt" href="borrar.php?cedula=<?php echo $reg['cedula']; ?>"></a>
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