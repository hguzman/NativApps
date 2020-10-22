<?php
require_once("assets/php/db.php");
require_once("assets/php/val_session_admin.php");
$cc = "SELECT cedula FROM usuarios WHERE cedula='$sesion'";
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="assets\img\SOPIEC.ico" type="image/x-icon">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SOPIEC-Equipos Asignados</title>

    <!-- Estilos CSS Toastr -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- FONTAWESOME CDN -->
    <script src="https://kit.fontawesome.com/763b114892.js" crossorigin="anonymous"></script>
    <!-- CUSTOM STYLES-->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>



<body>
    <!-- Contenedor principal -->
    <?php include("assets/modelos/navbar_header_admin_vp.php"); ?>

    <!-- Contenido de la pagina, lado derecho ancho  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">

                    <div class="usuarios-buscar">
                        <h2>Equipos Asignados</h2>
                        <!-- Barra de busqueda -->
                        <form class="form-inline my-2 my-lg-0 barra-buscar" action="assets/php/buscarusuario.php"
                            method="GET">
                            <input class="form-control mr-sm-2" type="search" placeholder="C.C" aria-label="Search"
                                id="buscar_usuario" name="buscar_usuario">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="boton_buscar"
                                id="boton_buscar">Buscar</button>
                        </form>
                    </div>
                </div>
            </div>
            <hr />
            <?php
                $query_asignacion = mysqli_query($conexion, "SELECT u.cedula,u.primer_nombre,u.primer_apellido,e.serial,e.marca,e.nombre FROM equipos e INNER JOIN usuarios u ON e.cedula_FK = u.cedula") or die("Problemas en el select:" . mysqli_error($conexion));
                ?>
            <div id="contenedor-usuarios" class="contenedor-usuarios">
                <div class="row contenedor-tabla">
                    <!-- Tabla de valores en base de datos -->
                    <table class="table">
                        <thead class="thead-light ">
                            <!-- Header de la tabla -->
                            <tr class="">
                                <th scope="col">Cedula</th>
                                <th scope="col">Primer nombre</th>
                                <th scope="col">Primer apellido</th>
                                <th scope="col">Serial</th>
                                <th scope="col">Marca del equipo</th>
                                <th scope="col">Nombre del equipo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($regas = mysqli_fetch_array($query_asignacion)) {
                                ?>

                            <!-- Contenido de la tabla -->
                            <tr class="actual">
                                <th scope="row">
                                    <input name="cedula" class="form-control" type="number"
                                        value="<?php echo $cedula = $regas['cedula'] ?>" readonly id="cedula"
                                        name="cedula" readonl> </th>
                                <td> <?php echo $regas['primer_nombre'] ?></td>
                                <td> <?php echo $regas['primer_apellido'] ?> </td>
                                <td id="seri"> <?php echo $regas['serial'] ?> </td>
                                <td> <?php echo $regas['marca'] ?> </td>
                                <td> <?php echo $regas['nombre'] ?> </td>
                                <td class="eliminar-editar">
                                    <!-- botones editar y eliminar -->
                                    <a id="del" class="btn fa fa-trash-alt" href="#"
                                        onclick="confirmacion_borrar('<?php echo $regas['cedula']; ?>.<?php echo $regas['serial'] ?>')"></a>
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

    </div><?php 
    include('assets/modelos/footer.php')
    ?>
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
    <script src="assets/js/validaciones.js"></script>
    <!-- CDN Jquery-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Script Toastr -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="assets/js/validaciones.js"></script>

    <!-- Alerta borrar -->
    <script type="text/javascript">
        function confirmacion_borrar(texto) {

            var separado = texto.split(".");
            var cedula = separado[0];
            var serial = separado[1];

            if (confirm(
                    `¿Realmente desea deshacer la asignacion de equipo del usuario C.C ${cedula}? con el serial ${serial}?`
                )) {
                toastr["error"]("Se ha destruido la asignación de equipo al usuario C.C #" + cedula + ".",
                    "Asignación eliminada")
                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": true,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": true,
                    "onclick": null,
                    "showDuration": "9000",
                    "hideDuration": "5000",
                    "timeOut": "5000",
                    "extendedTimeOut": "5000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                setTimeout(() => {

                    window.location.href = "assets/php/deshacerAsignacion.php?cedula=" + cedula + "&" +
                        "serial=" + serial

                }, 2000);
            }
        }
    </script>

</body>

</html>