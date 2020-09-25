<!DOCTYPE html>
<?php
require("assets/php/db.php");
require_once("assets/php/val_session_admin.php");

?>

<html>

<head>
    <link rel="shortcut icon" href="assets\img\SOPIEC.ico" type="image/x-icon">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mi usuario</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <!-- CUSTOM STYLES-->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>



<body>
    <!-- recuperar datos de la DB -->
    <?php
    $registros = mysqli_query($conexion, "select * from usuarios WHERE cedula = '$sesion' ") or
        die("Problemas en el select:" . mysqli_error($conexion));
    $reg = mysqli_fetch_array($registros);
    ?>


    <!-- Contenedor principal -->
    <div id="wrapper">
        <!-- Header -->
        <?php include("assets/modelos/navbar_header_admin_vp.php"); ?>

        <!-- Contenido de la pagina, lado derecho ancho  -->
        <div id="page-wrapper">
            <div id="page-inner" class="d-flex row ">
                <div class="col-lg-6">
                    <h2>Mi usuario</h2>
                    <hr>

                    <p> <strong> ID/Cedula: </strong> <?php echo $reg['cedula'] ?> </p>
                    <p> <strong>Area:</strong> </strong> <?php echo $reg['area'] ?> </p>
                    <p><strong> Primer nombre: </strong> <?php echo $reg['primer_nombre'] ?> </p>
                    <p><strong> Segundo nombre: </strong> <?php echo $reg['segundo_nombre'] ?> </p>
                    <p><strong> Primer Apellido: </strong> <?php echo $reg['primer_apellido'] ?> </p>
                    <p><strong> Segundo Apellido: </strong> <?php echo $reg['segundo_apellido'] ?> </p>
                    <p><strong> Correo:</strong> <?php echo $reg['email'] ?></p>
                    <p><strong> Rol: </strong><?php echo $reg['rol'] ?></p>





                    <br>
                    <?php
                    mysqli_free_result($registros);

                    ?>
                </div>
                <!--  $avatar  -->
                <div class="col-lg-6">


                    <center> <a href="perfil.php"><img
                                src="data:image/jpg;base64, <?php echo base64_encode($reg_a['imagen']) ?>"
                                class="rounded-circle" height="200px"></td></a> </center>
                    <!-- Button trigger modal -->
                    <br>
                    <button type="button" class="btn btn-primary btn-block btn-lg" data-toggle="modal"
                        data-target="#staticBackdrop">
                        Modificar foto de perfil
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog"
                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Modificar foto de perfil</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <center>
                                        <h3> Cargar imagen jpg</h3>
                                        <form enctype="multipart/form-data" action="assets\php\guardar.php"
                                            method="POST">
                                            <input class="form-control" type="file" name="imagen" id="imagen"
                                                required><br>
                                            <input class="form-control btn btn-success" type="submit"
                                                value="subir archivo">
                                        </form>
                                    </center>
                                </div>
                                <div class="modal-footer">
                                    <a href="assets\php\eliminar_avatar.php" class="btn btn-danger">Eliminar</a>
                                    <button type="button" class="btn btn-info" data-dismiss="modal">ACEPTAR</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

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