<!DOCTYPE html>
<?php
require("assets/php/db.php");
require_once("assets/php/val_session_admin.php");
include("assets/modelos/vpa_admin.php");
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
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
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
            <div id="page-inner">
                <h2>Mi usuario</h2>
                <hr>
                <div class="mostrar-datos col-lg-12 col-md-2 col-sm-12 cuadros-responsive">
                    <!-- Mostrar datos usuario -->
                    <div class="col-lg-6 col-md-12 col-sm-12 well" style="margin-top: 20px;">
                        <center>
                            <h3>Mis datos</h3>
                        </center>
                        <hr>
                        <p> <strong> ID/Cedula: </strong> <span
                                class="color-datos-act"><?php echo $reg['cedula'] ?></span>
                        </p>
                        <p> <strong>Area:</strong> </strong> <span
                                class="color-datos-act"><?php echo $reg['area'] ?></span>
                        </p>
                        <p><strong> Primer nombre: </strong> <span
                                class="color-datos-act"><?php echo $reg['primer_nombre'] ?></span> </p>
                        <p><strong> Segundo nombre: </strong> <span
                                class="color-datos-act"><?php echo $reg['segundo_nombre'] ?></span> </p>
                        <p><strong> Primer Apellido: </strong> <span
                                class="color-datos-act"><?php echo $reg['primer_apellido'] ?></span> </p>
                        <p><strong> Segundo Apellido: </strong> <span
                                class="color-datos-act"><?php echo $reg['segundo_apellido'] ?></span> </p>
                        <p><strong> Correo:</strong> <span class="color-datos-act"><?php echo $reg['email'] ?></span>
                        </p>
                        <p><strong> Rol: </strong><span class="color-datos-act"><?php echo $reg['rol'] ?></span></p>
                        <hr>
                        <!-- Botón Actualizar mis datos -->
                        <center>
                            <button id="asignar" data-toggle="modal" data-target="#staticBackdrop" href="modal"
                                class="btn btn-success btn-sm r" name="modificarUser"
                                style="border-radius: 5px !important;">Actualizar mis datos</button>
                            <!-- btn Cambiar Email -->
                            <button id="asignar" data-toggle="modal" data-target="#cambiarEmail" href="modal"
                                class="btn btn-info btn-sm r" name="cambiarEmail"
                                style="border-radius: 5px !important;">Cambiar E-mail</button>
                        </center>
                    </div>

                    <!-- Form Actualizar contraseña -->
                    <div class="col-lg-6 col-md-12 col-sm-12 well col-md-offset-1" style="margin-top: 20px;">
                        <center>
                            <h3>Actualizar contraseña</h3>
                        </center>

                        <form method="POST" id="cambiarContrasenaAdmin" name="cambiarContrasenaAdmin"
                            action="assets/php/actualizarDatosAdmin.php">
                            <div class="form-row">
                                <!-- Contraseña a cambiar-->
                                <div class="form-group col-md-12">
                                    <label for="registrar-contrasena">Nueva contraseña</label>
                                    <input type="password" class="form-control" id="contrasena" name="contrasena"
                                        placeholder="*********" require value="" style="margin-bottom: 1rem;">
                                    <label for="registrar-contrasena">Confirmar contraseña</label>
                                    <input type="password" class="form-control" id="confirmContrasena"
                                        name="confirmContrasena" placeholder="*********">

                                    <span class="fa fa-eye" id="mostrar" style="cursor:pointer;"> <span
                                            class="pwdtxt color-datos-act" style="cursor:pointer;">Mostrar
                                            contraseñas</span></span>
                                    <p class="mensaje text-danger" id="errorpass"></p>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="contrasenaActual">Contraseña actual</label>
                                    <br>
                                    <div class="alert alert-warning" role="alert">
                                        Este campo es obligatorio para efecuar los
                                        cambios.</div>
                                    <input type="password" class="form-control" id="contrasenaActual1"
                                        name="contrasenaActual1" placeholder="*********" require value=""
                                        style="margin-bottom: 1rem;">
                                </div>
                            </div>
                            <!-- Botones -->
                            <center>
                                <button type="submit" class="btn btn-primary btn-block btn-sm r
                                " name=" cambiarContrasena">Actualizar mi
                                    contraseña</button></center>
                        </form>
                    </div>


                    <!-- Modal actualizar datos-->
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Actualizar mis datos</h5>
                                    <button type="button" class="close r" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!-- Contenido del modal -->
                                <div class="modal-body">
                                    <form method="POST" id="actualizarDatosAdmin" name="actualizarDatosAdmin"
                                        action="assets/php/actualizarDatosAdmin.php">
                                        <div class="form-row">
                                            <!-- Cedula de ciudadania -->
                                            <div class="form-group col-md-6">
                                                <label for="registrar-primer-nombre">Cedula de ciudadania</label>
                                                <input type="number" class="form-control" id="cedula" name="cedula"
                                                    placeholder="112223344556" require
                                                    value="<?php echo $reg['cedula'] ?>" readonly>
                                            </div>
                                            <!-- Area de trabajo -->
                                            <div class="form-group col-md-6">
                                                <label for="registrar-segundo-nombre">Area de trabajo</label>
                                                <input type="number" class="form-control" id="area" name="area"
                                                    placeholder="5" require value="<?php echo $reg['area'] ?>">
                                            </div>
                                            <!-- Primer nombre -->
                                            <div class="form-group col-md-6">
                                                <label for="registrar-primer-nombre">Primer nombre</label>
                                                <input type="text" class="form-control" id="primer_nombre"
                                                    name="primer_nombre" placeholder="Andrés" require
                                                    value="<?php echo $reg['primer_nombre'] ?>">
                                            </div>
                                            <!-- Segundo nombre -->
                                            <div class="form-group col-md-6">
                                                <label for="registrar-segundo-nombre">Segundo nombre</label>
                                                <input type="text" class="form-control" id="segundo_nombre"
                                                    name="segundo_nombre" placeholder="José"
                                                    value="<?php echo $reg['segundo_nombre']  ?>">
                                            </div>
                                            <!-- Primer apellido -->
                                            <div class="form-group col-md-6">
                                                <label for="registrar-primer-apellido">Primer apellido</label>
                                                <input type="text" class="form-control" id="primer_apellido"
                                                    name="primer_apellido" placeholder="Salas" require
                                                    value="<?php echo $reg['primer_apellido'] ?>">
                                            </div>
                                            <!-- Segundo apellido -->
                                            <div class="form-group col-md-6">
                                                <label for="registrar-segundo-apellido">Segundo apellido</label>
                                                <input type="text" class="form-control" id="segundo_apellido"
                                                    name="segundo_apellido" placeholder="Casas"
                                                    value="<?php echo $reg['segundo_apellido'] ?>">
                                            </div>
                                            <!-- Email -->



                                            <div class="form-group col-md-12">
                                                <label for="contrasenaActual">Contraseña actual</label>
                                                <br>
                                                <div class="alert alert-warning" role="alert">
                                                    Este campo es obligatorio para efecuar los
                                                    cambios.</div>
                                                <input type="password" class="form-control" id="contrasenaActual"
                                                    name="contrasenaActual" placeholder="*********" require value=""
                                                    style="margin-bottom: 1rem;">
                                            </div>
                                        </div>
                                        <!-- Botones -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary r"
                                                data-dismiss="modal">Cancelar</button>
                                            <input type="submit" class="btn btn-primary r" value="Actualizar datos"
                                                name="actualizarDatosAdmin">
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal actualizar Email-->
                    <div class="modal fade" id="cambiarEmail" data-backdrop="static" data-keyboard="false" tabindex="-1"
                        aria-labelledby="staticBackdropLabel" aria-hidden="true">

                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Cambiar E-mail</h5>
                                    <button type="button" class="close r" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!-- Contenido del modal -->
                                <div class="modal-body">
                                    <form method="POST" id="cambiarEmail" name="cambiarEmail"
                                        action="assets/php/actualizarDatosAdmin.php">
                                        <div class="form-row">

                                            <!-- Email actual-->
                                            <div class="form-group col-md-12">
                                                <label for="registrar-email">Email actual</label>
                                                <input readonly type="email" class="form-control" id="" name=""
                                                    placeholder="" value="<?php echo $reg['email'] ?>">
                                            </div>
                                            <!-- Nuevo Email -->
                                            <div class="form-group col-md-12">
                                                <label for="registrar-email">Nuevo Email</label>
                                                <input type="email" class="form-control" id="email"
                                                    name="nuevoEmailAdmin" placeholder="correo_143@correo.com" required
                                                    value="">
                                                <!-- Div de carga -->
                                                <div id="result-email"></div>
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label for="contrasenaActual">Contraseña actual</label>
                                                <br>
                                                <div class="alert alert-warning" role="alert">
                                                    Este campo es obligatorio para efecuar los
                                                    cambios.</div>
                                                <input type="password" class="form-control" id="contrasenaActual"
                                                    name="contrasenaActual" placeholder="*********" required value=""
                                                    style="margin-bottom: 1rem;">
                                            </div>
                                        </div>
                                        <!-- Botones -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary r"
                                                data-dismiss="modal">Cancelar</button>
                                            <input type="submit" class="btn btn-primary r" value="Actualizar datos"
                                                name="cambiarEmail">
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                    <?php
                    mysqli_free_result($registros);
                    mysqli_close($conexion);
                    ?>
                </div>
                <!--  $avatar  -->
                <div class="col-lg-12 col-md-6 col-sm-12 well" style="margin-top: 20px;">


                    <center> <a href="perfil.php"><img
                                src="data:image/jpg;base64, <?php echo base64_encode($reg_a['imagen']) ?>"
                                class="rounded-circle" height="200px"></td></a> </center>
                    <!-- Button trigger modal -->
                    <br>
                    <button type="button" class="btn btn-primary btn-block btn-lg r" data-toggle="modal"
                        data-target="#avatar">
                        Modificar foto de perfil
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="avatar" data-backdrop="static" tabindex="-1" role="dialog"
                        aria-labelledby="avatarLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="avatar">Modificar foto de perfil</h5>
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
                                            <input class="form-control btn btn-success r" type="submit"
                                                value="subir archivo">
                                        </form>
                                    </center>
                                </div>
                                <div class="modal-footer">
                                    <a href="assets\php\eliminar_avatar.php" class="btn btn-danger r">ELIMINAR</a>
                                    <button type="button" class="btn btn-info r" data-dismiss="modal">ACEPTAR</button>
                                </div>
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
    <!-- Validaciones -->
    <script src="assets/js/validaciones.js"></script>
    <!-- CDN Jquery-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Script Toastr -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Bootstrap validator -->
    <script type="text/javascript"
        src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js">
    </script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/validaciones.js"></script>
    <script src="assets/js/custom.js"></script>


    <!-- Mostrar pass-->
    <script type="text/javascript">
        $(document).ready(function () {
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

            $('#mostrar').click(function () {
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