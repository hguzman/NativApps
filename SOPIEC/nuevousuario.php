<!-- Codigo de conexion al archivo db.php -->
<?php
include("assets/php/db.php");
?>
<?php
require_once("assets/php/val_session_admin.php");
?>
<!DOCTYPE html>
<html>

<head>
<link rel="shortcut icon" href="assets\img\SOPIEC.ico" type="image/x-icon">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crear nuevo usuario</title>

    <!-- Bootstrap validator -->
    <link rel="stylesheet"
        href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" />

    <!-- Estilos CSS Toastr -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

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
    <?php include("assets/modelos/navbar_header_admin_vp.php"); ?>

        <!-- Contenido de la pagina, lado derecho ancho -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Crear nuevo usuario</h2>
                    </div>
                </div>
                <hr>

                <!-- Formulario de creacion de usuario -->
                <form id="formRegistrar" class="form-nuevo-cliente" action="assets/php/guardarinfo.php" method="POST">
                    <!-- Row de email y pass -->
                    <div class="form-row">
                        <!-- Cedula de ciudadania -->
                        <div class="form-group col-md-6">
                            <label for="cedula">Cedula de ciudadania</label>
                            <input maxlength="10" type="number" class="form-control" id="cedula" name="cedula"
                                placeholder="112223344556" require>
                            <!-- Div de carga -->
                            <div id="result-cedula"></div>
                        </div>


                        <!-- Area de trabajo -->
                        <div class="form-group col-md-6">
                            <label for="area">Area de trabajo</label>
                            <input type="number" class="form-control" id="area" name="area" placeholder="5" require>
                        </div>
                        <!-- Primer nombre -->
                        <div class="form-group col-md-6">
                            <label for="primer_nombre">Primer nombre</label>
                            <input type="text" class="form-control" id="primer_nombre" name="primer_nombre"
                                placeholder="Andrés" require>
                        </div>
                        <!-- Segundo nombre -->
                        <div class="form-group col-md-6">
                            <label for="segundo_nombre">Segundo nombre</label>
                            <input type="text" class="form-control" id="segundo_nombre" name="segundo_nombre"
                                placeholder="José">
                        </div>
                        <!-- Primer apellido -->
                        <div class="form-group col-md-6">
                            <label for="primer_apellido">Primer apellido</label>
                            <input type="text" class="form-control" id="primer_apellido" name="primer_apellido"
                                placeholder="Salas" require>
                        </div>
                        <!-- Segundo apellido -->
                        <div class="form-group col-md-6">
                            <label for="segundo_apellido">Segundo apellido</label>
                            <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido"
                                placeholder="Casas">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="correo_143@correo.com" require>
                            <!-- Div de carga -->
                            <div id="result-email"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="contrasena">Contraseña</label>
                            <input type="password" class="form-control" id="contrasena" name="contrasena"
                                placeholder="*********" require>
                                <span class="fa fa-eye" id="mostrar" style="cursor:pointer;" > <span class="pwdtxt color-datos-act" style="cursor:pointer;">Mostrar contraseña</span></span>
                            <p class="mensaje text-danger" id="errorpass"></p>

                        </div>

                        <!-- Rol -->
                        <div class="form-group input-group mb-3 rol-derecha">
                            <select name="addrol" id="addrol">
                                <option selected disabled value=""> Seleccionar</option>
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                            </select>
                            <div class="input-group-append">
                                <label for="addrol">Rol</label>
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-success ajustar-boton" name="registrar" value="registrar"
                        id="registrar" on>Registrar</button>
                </form>

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

    <!-- Ajax valdiacion en BD en vivo -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#cedula').on('blur', function () {
                $('#result-cedula').html('<img src="assets/img/loader.gif" />').fadeOut(1000);

                var valCedula = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "assets/php/checkearDisponibilidad.php",
                    dataType: "json",
                    data: {
                        cedula: valCedula
                    },
                    success: function (data) {
                        console.log(data.status);
                        $('#result-cedula').fadeIn(1000).html(data.mensaje);
                    }
                });
            });

            // Validación Email
            $('#email').on('blur', function () {
                $('#result-email').html('<img src="assets/img/loader.gif" />').fadeOut(1000);
                var valEmail = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "assets/php/checkearDisponibilidad.php",
                    dataType: "json",
                    data: {
                        email: valEmail
                    },
                    success: function (data) {
                        $('#result-email').fadeIn(1000).html(data.mensajeEmail);
                    }
                });
            });
        });
    </script>

    <!-- Pass as Id -->
    <script type="text/javascript">
        $(document).ready(function () {

            $('#mostrar').click(function () {
                //Comprobamos que la cadena NO esté vacía.
                if ($(this).hasClass('fa-eye') && ($("#contrasena").val() !="")) {
                    $('#contrasena').removeAttr('type');
                    $('#mostrar').addClass('fas fa-eye-slash').removeClass('fa-eye');
                    $('.pwdtxt').html("Ocultar contraseña");
                } else {
                    $('#contrasena').attr('type', 'password');
                    $('#mostrar').addClass('fa fa-eye').removeClass('fas fa-eye-slash');
                    $('.pwdtxt').html("Mostrar contraseña");
                }
            });

            $("#cedula").keyup(function () {
                var value = $(this).val();
                $("#contrasena").val(value);
            });
        });
    </script>

</body>

</html>