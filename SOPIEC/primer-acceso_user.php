<?php
require_once("assets/php/val_session_user.php");
require("assets/php/db.php");
?>
<!DOCTYPE html>

<html>

<head>
    <link rel="shortcut icon" href="assets\img\SOPIEC.ico" type="image/x-icon">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mi usuario</title>
    <!-- Bootstrap validator -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" />

    <!-- Estilos CSS Toastr -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>

<body>

    <!-- Contenedor principal -->
    <div class="container-fluid">

        <div class="col-lg-6 col-md-12 col-sm-12 d-inline-block  well" style="margin-top: 20px;">
            <center>
                <h3> Privacidad y seguridad</h3>
            </center>

            <p> Debido a querer proteger tu privacidad y mantenerte seguro,
                te pedimos encarecidamente que hagas el cambio correspondiente a la contraseña para así evitar problemas futuros. </p>
        </div>

        <!-- Form Actualizar contraseña -->
        <div class="col-lg-6 col-md-12 col-sm-12 d-inline-block  well" style="margin-top: 20px;">
            <center>
                <a href="assets/php/logout" class="col-3 position-absolute" style="right: 0px;">Cerrar sesion</a>
            </center>
            <center>
                <h3>Actualizar contraseña</h3>
            </center>

            <form method="POST" id="cambiarContrasena" name="cambiarContrasena" action="assets/php/actualizarDatosUser.php">
                <div class="form-row">
                    <!-- Contraseña a cambiar-->
                    <div class="form-group col-md-12">
                        <label for="registrar-contrasena">Nueva contraseña</label>
                        <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="*********" require value="" style="margin-bottom: 1rem;">
                        <label for="registrar-contrasena">Confirmar contraseña</label>
                        <input type="password" class="form-control" id="confirmContrasena" name="confirmContrasena" placeholder="*********">

                        <span class="fa fa-eye" id="mostrar" style="cursor:pointer;"> <span class="pwdtxt color-datos-act" style="cursor:pointer;">Mostrar
                                contraseñas</span></span>
                        <p class="mensaje text-danger" id="errorpass"></p>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="contrasenaActual">Contraseña actual</label>
                        <br>
                        <div class="alert alert-warning" role="alert">
                            Este campo es obligatorio para efecuar los
                            cambios.</div>
                        <input type="password" class="form-control" id="contrasenaActual1" name="contrasenaActual1" placeholder="*********" require value="" style="margin-bottom: 1rem;">
                    </div>
                </div>
                <!-- Botones -->
                <center>
                    <button type="submit" class="btn btn-primary btn-block btn-sm r
                                " name="cambiarContrasena">Actualizar mi
                        contraseña</button></center>
            </form>
        </div>



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

    <!-- CDN Jquery-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Script Toastr -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Bootstrap validator -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js">
    </script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/validaciones.js"></script>
    <script src="assets/js/custom.js"></script>


    <!-- Mostrar pass-->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#nuevoEmail').on('blur', function() {
                $('#result-email').html('<img src="assets/img/loader.gif" />').fadeOut(1000);
                var valEmail = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "assets/php/checkearDisponibilidad.php",
                    dataType: "json",
                    data: {
                        email: valEmail
                    },
                    success: function(data) {
                        $('#result-email').fadeIn(1000).html(data.mensajeEmail);
                    }
                });
            });

            $('#mostrar').click(function() {
                //Comprobamos que la cadena NO esté vacía.
                if ($(this).hasClass('fa-eye') && ($("#contrasena").val() != "")) {
                    $('#contrasena').removeAttr('type');
                    $('#confirmContrasena').removeAttr('type');
                    $('#mostrar').addClass('fas fa-eye-slash').removeClass('fa-eye');
                    $('.pwdtxt').html("Ocultar contraseñas");
                } else {
                    $('#contrasena').attr('type', 'password');
                    $('#confirmContrasena').attr('type', 'password');
                    $('#mostrar').addClass('fa fa-eye').removeClass('fas fa-eye-slash');
                    $('.pwdtxt').html("Mostrar contraseñas");
                }
            });
        });
    </script>


</body>

</html>