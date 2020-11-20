<!DOCTYPE html>
<?php
include("assets/php/db.php");
?>
<?php
require_once("assets/php/val_session_user.php");
?>

<html>

<head>
    <link rel="shortcut icon" href="assets\img\SOPIEC.ico" type="image/x-icon">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Editar Ticket</title>

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

    <?php
        $id = $_REQUEST['id'];
        mysqli_query($conexion,"
         update notificaciones set leido = 1 where id_pub = '$id'
          ");
        require_once("assets/php/db.php");
        $registros = mysqli_query($conexion, "select * from ticket
                            where id= '$id' ") or
            die("Problemas en el select:" . mysqli_error($conexion));
            $reg = mysqli_fetch_array($registros);
            $id = $reg['id'];
            $cedula = $reg['cedula'];
            $nombre = $reg['nombre'];
            $estado = $reg['estado'];
            $asunto = $reg['asunto'];
            $mensaje = $reg['mensaje'];
            $solucion = $reg['solucion'];
            
        ?>

    <div id="wrapper">
        <?php include_once("assets/modelos/navbar_header_user.php");?>
        <!-- Contenido de la pagina, lado derecho ancho  -->

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Ticket # <?php echo $id; ?></h2>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-md-12">
                        <div class="well well-sm">
                            <form id="formticket" class="form-horizontal">
                                <fieldset>
                                    <legend class="text-center header"></legend>
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i
                                                class="fa fa-user bigicon"> cedula</i></span>
                                        <div class="col-md-8">
                                            <input id="cedula" name="cedula" type="text" value="<?php echo $cedula; ?> "
                                                readonly class="form-control"></input>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i
                                                class="fa fa-user bigicon"> Nombre</i></span>
                                        <div class="col-md-8">
                                            <input id="nombre" name="nombre" type="text" value="<?php echo $nombre; ?> "
                                                readonly class="form-control"></input>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i
                                                class="fa fa-calendar bigicon"> Fecha</i></span>
                                        <div class="col-md-8">
                                            <input id="fecha" name="fecha" type="" value="<?php echo $reg['fecha'] ?> "
                                                readonly class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i
                                                class="fa fa-envelope bigicon"> Correo</i></span>
                                        <div class="col-md-8">
                                            <input id="email" name="email" type="email"
                                                value="<?php echo $reg['email'] ?>" readonly class="form-control">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-group">
                                            <span class="col-md-1 col-md-offset-2 text-center"><i
                                                    class="fa fa-refresh bigicon"> Estado</i></span>
                                            <div class="col-md-8">
                                                <input id="estado" name="estado" type="text"
                                                    value="<?php echo $estado; ?>" readonly class="form-control">
                                            </div>
                                        </div>


                                    </div>
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-comment">
                                                Asunto</i></span>
                                        <div class="col-md-8">
                                            <input id="asunto" name="asunto" type="text" value="<?php echo $asunto; ?>"
                                                readonly class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i
                                                class="fa fa-pencil-square-o bigicon"> Detalle </i></span>
                                        <div class="col-md-8">
                                            <textarea class="form-control" id="mensaje" name="mensaje" readonly require
                                                rows="7"> <?php echo $mensaje; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i
                                                class="fa fa-check-circle bigicon">Respuesta </i></span>
                                        <div class="col-md-8">
                                            <textarea class="form-control" id="solucion" name="solucion" readonly
                                                rows="7"> <?php echo $solucion; ?> </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12 text-center">
                                            <a href="ticketsenviados.php" class="btn btn-primary btn-lg r">Regresar</a>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php 
    include('assets/modelos/footer.php')
    ?>
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


</body>

</html>