<?php
require_once("assets/php/val_session_admin.php");
?>
<?php
require_once("assets/php/db.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="assets\img\SOPIEC.ico" type="image/x-icon">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Equipos</title>

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
    <div id="wrapper">
        <?php include("assets/modelos/navbar_header_admin_vp.php"); ?>
        <!-- Contenido de la pagina, lado derecho ancho  -->

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">

                        <div class="usuarios-buscar">
                            <h2>Equipos</h2>
                      
                            <!-- Barra de busqueda -->
                            <div class="form-inline my-2 my-lg-0 barra-buscar">
                              
                                 
                                 <a href="excel.php?tipo=equipo" target="_blank"><i
                                        style="font-size: 35px; margin-right: 5px; color: green;"
                                        class="far fa-file-excel"></i> </a>
                                       

                                <input class="form-control mr-sm-2 " type="search" type="text" id="buscarEquipos"
                                    name="buscarEquipos" placeholder="Serial">
                            </div>

                        </div>
                        <a class="" href="nuevoequipo.php"><i style="font-size: 35px; color: blue;" class="far fa-plus-square"></i></a>
                    </div>
                </div>
                <hr />


                <div id="contenedor-usuarios" class="contenedor-usuarios">
                    
                <div class="row contenedor-tabla" id="datosEquipos">

                    </div>
                </div>
            </div>

            <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <?php 
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
    <script src="assets/js/consulta.js"></script>
    <!-- Alerta borrar -->
    <script type="text/javascript">
        function confirmacion_borrar(serial) {
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
                    window.location.href = "assets/php/borrarequipo.php?serial=" + serial
                }, 1500);
            }
        }
    </script>

</body>

</html>