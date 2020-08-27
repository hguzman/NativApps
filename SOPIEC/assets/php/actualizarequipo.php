<?php
// Incluir archivo de base de datos
require_once("db.php");
// Funcion para el botón enviar
if (isset($_POST['actualizarEquipo'])) {
    $serial = $_POST['serial'];
    $marca = $_POST['marca'];
    $nombre = $_POST['nombre'];
    $tipo_equipo = $_POST['tipo_equipo'];
    $modelo_equipo = $_POST['modelo_equipo'];
    $procesador = $_POST['procesador'];
    $ram = $_POST['ram'];
    $disco_duro = $_POST['disco_duro'];
    $sistema_operativo = $_POST['sistema_operativo'];
    $estado = $_POST['estado'];




    mysqli_query($conexion, "
update equipos set 
marca='$marca',
nombre='$nombre', 
tipo_equipo='$tipo_equipo', 
modelo_equipo='$modelo_equipo', 
procesador='$procesador', 
ram='$ram',
disco_duro='$disco_duro',
sistema_operativo='$sistema_operativo',
estado='$estado'
where serial='$serial'") or
        die("Problemas en el select:" . mysqli_error($conexion));
}
?>
<?php

$sesion = $_SESSION['username'];
$rol = $_SESSION['rol'];
if (!isset($sesion)) {
    header("location: login.php");
} else {
    if ($rol == "admin") {
    } else {
        header("location: logout.php"); //Esta ruta hay que cambairla cuando se suba al hosting
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Equipos</title>

    <!-- Estilos CSS Toastr -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
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
                        <li><a href="../php/logout.php">Cerrar sesión</a></li>
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
                    <!-- Segundo/Administracion de usuarios -->
                    <li>
                        <a href="#"><i class="fa fa-edit "></i>Administración de usuarios<span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../../nuevousuario.php">Crear Nuevo usuario</a>
                            </li>
                            <li>
                                <a href="../../usuarios.php">Ver usuarios registrados</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Cuarto/Administracion de equipos -->
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Administración de equipos<span
                                class="fa arrow"></span></a>
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

                        <div class="usuarios-buscar">
                            <h2>Datos de usuario actualizado</h2>
                            <!-- Barra de busqueda -->
                            <form class="form-inline my-2 my-lg-0 barra-buscar" action="buscarequipo.php" method="GET">
                                <input class="form-control mr-sm-2" type="search" placeholder="Serial"
                                    aria-label="Search" id="buscar_equipo" name="buscar_equipo">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="boton_buscar"
                                    id="boton_buscar">Buscar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <hr />

                <div id="contenedor-usuarios" class="contenedor-usuarios">
                    <div class="row contenedor-tabla">

                        <!-- Datos del equipo actualizado -->
                        <div class="datos-user-act">
                            <h2>serial: <span class="color-datos-act"><?php echo $serial ?> </span></h2>
                            <h2>Marca: <span class="color-datos-act"><?php echo $marca ?> </span></h2>
                            <h2>Nombre: <span class="color-datos-act"><?php echo $nombre ?> </span></p>
                                <h2>Tipo equipo: <span class="color-datos-act"><?php echo $tipo_equipo?> </span></h2>
                                <h2>Modelo equipo: <span class="color-datos-act"><?php echo $modelo_equipo?> </span>
                                </h2>
                                <h2>procesador: <span class="color-datos-act"><?php echo $procesador?> </span></h2>
                                <h2>Memoria Ram: <span class="color-datos-act"><?php echo $ram?> </span></h2>
                                <h2>Sistema Operativo: <span class="color-datos-act"><?php echo $sistema_operativo?>
                                    </span></h2>
                                <h2>Estado: <span class="color-datos-act"><?php echo $estado?> </span></h2>
                        </div>

                        <div class="botones-edi-elim">
                            <label for="edit" class="fa">Editar: </label>
                            <a id="edit" class="btn btn-lg fa fa-pen"
                                href="../../modificarequipo.php?serial=<?php echo $serial ?>"></a>
                            <label for="del" class="fa">Eliminar: </label>
                            <a id="del" class="btn fa fa-trash-alt" href="#"
                                onclick="confirmacion_borrar('<?php  $serial ?>')"></a>
                        </div>
                        <!-- Boton Ver todos los equipos. -->
                        <div class="col-md-4 col-sm-12">
                            <a href="../../equipos.php"
                                class="btn btn-success btn-lg btn-block ajustar-boton btn-verusuarios ">VER TODOS LOS
                                Equipos</a>
                        </div>
                    </div>
                </div>
            </div>

            <input hidden id="mostrarCC" value="<?php echo $serial ?>"></input>
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

    <!-- CDN Jquery-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Script Toastr -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script src="../js/validaciones.js"></script>

    <!-- Alerta borrar -->
    <script type="text/javascript">
        // var nombre = document.getElementById("nombre");
        // console.log(nombre.value);

        function confirmacion_borrar(serial) {
            var ser = document.getElementById('mostrarCC').value;
            console.log(serial);
            console.log(ser);
            if (confirm(`¿Realmente desea eliminar el equipo con Serial ${serial}?`)) {
                window.location.href = "borrarequipo.php?serial=" + serial

                toastr["warning"]("El equipo con Serial #" + serial + " ha sido eliminado.", "Usuario eliminado")

                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": true,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": true,
                    "onclick": null,
                    "showDuration": "5000",
                    "hideDuration": "5000",
                    "timeOut": "5000",
                    "extendedTimeOut": "5000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
            }
        }
    </script>

    <!-- Alerta equipo actualizado -->
    <script>
        var serial = document.getElementById('mostrarCC').value;
        document.readyState =
            toastr["success"]("El equipo con Serial #" + serial + " ha sido actualizado exitosamente.",
                "Usuario actualizado")

        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": true,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "5000",
            "hideDuration": "5000",
            "timeOut": "5000",
            "extendedTimeOut": "5000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>

</body>

</html>