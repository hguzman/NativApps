<!DOCTYPE html>
<?php
require_once("assets/php/val_session_user.php");
?>
<?php
require_once("assets/php/db.php");
?>

<html>

<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crear Ticket</title>

    <!-- Bootstrap validator -->
    <link rel="stylesheet"
        href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" />

    <!-- Estilos CSS Toastr -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- Alertify -->
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js"></script>
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
            <!-- recuperar imagen de la base de datos -->
            <?php include("assets/modelos/avatar_user.php"); ?>
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
                <div class="row">
                    <div class="col-md-12">
                        <h2>Area de ticket</h2>
                    </div>
                </div>
                <hr />

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="well well-sm">
                                <form id="formticket" class="form-horizontal" action="assets/php/guardarticket.php"
                                    method="POST">
                                    <fieldset>
                                        <legend class="text-center header"></legend>
                                        <div class="form-group">
                                            <span class="col-md-1 col-md-offset-2 text-center"><i
                                                    class="fa fa-user bigicon"></i></span>
                                            <div class="col-md-8">
                                                <input id="nombre" name="nombre" type="text" placeholder="Nombre"
                                                    class="form-control" value="">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <span class="col-md-1 col-md-offset-2 text-center"><i
                                                    class="fa fa-envelope-o bigicon"></i></span>
                                            <div class="col-md-8">
                                                <input id="email" name="email" type="email" placeholder="Email "
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <span class="col-md-1 col-md-offset-2 text-center"><i
                                                    class="fa fa-comment"></i></span>
                                            <div class="col-md-8">
                                                <input id="asunto" name="asunto" type="text" placeholder="Asunto"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <span class="col-md-1 col-md-offset-2 text-center"><i
                                                    class="fa fa-pencil-square-o bigicon"></i></span>
                                            <div class="col-md-8">
                                                <textarea class="form-control" id="mensaje" name="mensaje"
                                                    placeholder="Enter your massage for us here. We will get back to you within 2 business days."
                                                    rows="7"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-12 text-center">
                                                <button type="submit" class="btn btn-primary btn-lg" name="Enviar"
                                                    id="enviar">Enviar</button>
                                            </div>
                                        </div>
                                        
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <!-- Sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <!-- Ajax Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
    <!-- CDN Jquery-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Script Toastr -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Bootstrap validator -->
    <script type="text/javascript"
        src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
    <script src="assets/js/validaciones.js"></script>


<script>
var nombre = document.getElementById('nombre');
var email = document.getElementById('email');
var asunto = document.getElementById('asunto');
var mensjae = document.getElementById('mensjae');

$('#enviar').on("submit",function(){
        if ( nombre && email && asunto && mensaje != empty){
            alert ("Su tucket ha sido creado exitosamente, en breves recibira respuesta del admin.");
        }
})
</script>
</body>

</html>