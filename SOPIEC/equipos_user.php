<?php
require_once("assets/php/val_session_user.php");
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
    <title>Inventario de equipos</title>
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
        <?php include_once("assets/modelos/navbar_header_user.php");?>

        <!-- Contenido de la pagina, lado derecho ancho  -->

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">

                        <div class="usuarios-buscar">
                            <h2>Equipos</h2>
                            <!-- Barra de busqueda -->
                            <div class="form-inline my-2 my-lg-0 barra-buscar">
                                <input class="form-control mr-sm-2 " type="search" type="text" id="buscarEquipos_user"
                                    name="buscarEquipos_user" placeholder="Serial">
                            </div>

                        </div>
                    </div>
                </div>
                <hr />


                <div id="contenedor-usuarios" class="contenedor-usuarios">
                    <div class="row contenedor-tabla" id="datosEquipos_user">

                    </div>
                </div>
            </div>


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
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/validaciones.js"></script>
    <script src="assets/js/consulta.js"></script>

    <script src="https://kit.fontawesome.com/763b114892.js" crossorigin="anonymous"></script>
</body>

</html>