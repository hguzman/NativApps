<?php
require_once("val_session_admin.php");
?>
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


<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="..\img\SOPIEC.ico" type="image/x-icon">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Datos de equipo actualizado</title>

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
        <?php include_once("../modelos/navbar_header_admin_vs.php"); ?>

        <!-- Contenido de la pagina, lado derecho ancho  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">

                        <div class="usuarios-buscar">
                            <h2>Datos de equipo actualizado</h2>
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
                            <h2>Serial: <span class="color-datos-act"><?php echo $serial ?> </span></h2>
                            <h2>Marca: <span class="color-datos-act"><?php echo $marca ?> </span></h2>
                            <h2>Nombre: <span class="color-datos-act"><?php echo $nombre ?> </span></p>
                                <h2>Tipo equipo: <span class="color-datos-act"><?php echo $tipo_equipo?> </span></h2>
                                <h2>Modelo equipo: <span class="color-datos-act"><?php echo $modelo_equipo?> </span>
                                </h2>
                                <h2>Procesador: <span class="color-datos-act"><?php echo $procesador?> </span></h2>
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
                                onclick="confirmacion_borrar('<?php  echo $serial ; ?>')"></a>
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
        function confirmacion_borrar(serial, nombre) {

            if (confirm("¿Realmente desea eliminar el equipo con serial #" + serial)) {
                toastr["error"]("El equipo con serial #" + serial + " ha sido eliminado.", "Equipo eliminado")

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

                setTimeout(() => {
                    window.location.href = "borrarequipo.php?serial=" + serial
                }, 1500);
            }
        }
    </script>
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