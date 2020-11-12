<!DOCTYPE html>
<?php
require_once("assets/php/val_session_user.php");
require_once("assets/php/db.php");
?>

<html>

<head>
    <link rel="shortcut icon" href="assets\img\SOPIEC.ico" type="image/x-icon">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manuales</title>
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
                        <h2>Manuales</h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success r" data-toggle="modal" data-target="#downloadModal">
                    Descargar manuales
                </button>

                <!-- Modal -->
                <div class="modal fade" id="downloadModal" data-backdrop="static" tabindex="-1" role="dialog"
                    aria-labelledby="downloadModalLabel" aria-hidden="true">
                    <div class="modal-dialog " role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="downloadModalLabel">Descargar manuales</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="row grd">

                                    <h3></h3>
                                    <div class=" col-lg-3">
                                        <a class="btn-downloads" href="assets/downloads/manual_tecnico.pdf"><i
                                                class="far fa-file-pdf"></i></a>
                                        <div class="font-downloads">
                                            Manual tecnico
                                        </div>
                                    </div>

                                    <div class=" col-lg-3">
                                        <a class="btn-downloads" href="assets/downloads/manual_usuario.pdf"><i
                                                class="far fa-file-pdf"></i></a>
                                        <div class="font-downloads">
                                            Manual de usuario
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary r" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary r" data-dismiss="modal">Aceptar</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <?php 
    include('assets/modelos/footer.php')
    ?>
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