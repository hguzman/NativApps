<!DOCTYPE html>
<?php
require_once("assets/php/val_session_user.php");
require_once("assets/php/db.php");

include("assets/modelos/vpa_user.php");
?>

<html>

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="assets\img\SOPIEC.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
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
                        <h2>Inicio</h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <!-- MI EQUIPO -->
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <h5>MI EQUIPO</h5>
                        <div class="alert alert-info text-center">
                            <i class="fa fa-desktop fa-5x"></i>
                            <h3>Información de mis equipos.</h3>
               
                            <?php
                     $registros = mysqli_query($conexion, "select * from equipos WHERE cedula_FK = '$sesion' ") or
                     die("Problemas en el select:" . mysqli_error($conexion));
                    while ($reg = mysqli_fetch_array($registros)){
                    
                ?>
                            <div>
                                <hr style="border-top: 1px solid #2997ce;">
                                <p> <strong> Nombre: </strong> <span
                                        class="color-datos-act"><?php echo $reg['nombre'] ?></span>
                                </p>
                                <p> <strong> Serial: </strong> <span
                                        class="color-datos-act"><?php echo $reg['serial'] ?></span>
                                </p>

                                <p><strong> Marca: </strong> <span
                                        class="color-datos-act"><?php echo $reg['marca'] ?></span>
                                </p>
                                <p><strong> Estado: </strong><span
                                        class="color-datos-act"><?php echo $reg['estado'] ?></span></p>
                            </div>


                            <?php
               
            }
                mysqli_free_result($registros);
                mysqli_close($conexion);
                ?>
                            <a href="miequipo_user.php" class="btn btn-info btn-md r">Más detalles</a>
                        </div>

                    </div>

                    <!-- Tabla de pre-visualizacion de equipos -->
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <img src="assets/img/sopiec.png" alt="" style="width: 100%; padding-top: 3rem;">
                    </div>
                    <!-- Imagen redireccion a tickets -->
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <center>
                            <h2>Ver el registro de tickets</h2>
                        </center>

                        <a href="ticketsenviados.php">
                            <img class="img-responsive" src="assets/img/ticketIcon.svg" alt=""
                                title="Haga click sobre la imagen para ver el historial de tickets"></a>
                    </div>
                    <!-- Imagen redireccion a tickets -->
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <center>
                            <h2>Manuales de uso</h2>
                        </center>

                        <a href="info.php">
                            <img class="img-responsive" src="assets/img/manuales.svg" alt=""
                                title="Haga click sobre la imagen para ver los manuales de uso"></a>
                    </div>
                </div>

            </div>
            <?php 
    include('assets/modelos/footer.php')
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