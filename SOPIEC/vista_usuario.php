<?php
require_once("assets/php/val_session_user.php");
require("assets/php/db.php");
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SOPIEC</title>
    <!-- Bootstrap validator -->
    <link rel="stylesheet"
        href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" />

    <!-- Estilos CSS Toastr -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />
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
                    <li class="text-center user-image-back">
                        <?php
                        $query_a = "SELECT imagen from avatares, usuarios where avatar_id = ID and cedula = $sesion";

                        $registros_a = mysqli_query($conexion, $query_a) or
                            die("Problemas en el select:" . mysqli_error($conexion));
                        $reg_a = mysqli_fetch_array($registros_a)
                        ?>
                        <a href="vista_usuario.php"><img src="data:image/jpg;base64, <?php echo base64_encode($reg_a['imagen']) ?>" class="rounded-circle" height="150px" width="100%"></td></a>
                    </li>
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
                <div class="col-lg-6">
                    <h2>Mi usuario</h2>
                    <hr>

                    <p> <strong> ID/Cedula: </strong> <span class="color-datos-act"><?php echo $reg['cedula'] ?></span> </p>
                    <p> <strong>Area:</strong> </strong> <span class="color-datos-act"><?php echo $reg['area'] ?></span> </p>
                    <p><strong> Primer nombre: </strong> <span class="color-datos-act"><?php echo $reg['primer_nombre'] ?></span> </p>
                    <p><strong> Segundo nombre: </strong> <span class="color-datos-act"><?php echo $reg['segundo_nombre'] ?></span> </p>
                    <p><strong> Primer Apellido: </strong> <span class="color-datos-act"><?php echo $reg['primer_apellido'] ?></span> </p>
                    <p><strong> Segundo Apellido: </strong> <span class="color-datos-act"><?php echo $reg['segundo_apellido'] ?></span> </p>
                    <p><strong> Correo:</strong> <span class="color-datos-act"><?php echo $reg['email'] ?></span></p>
                    <p><strong> Rol: </strong><span class="color-datos-act"><?php echo $reg['rol'] ?></span></p>


                    <!-- Modal actualizar -->
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Actualizar mis datos</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" id="actualizarDatos" name="actualizarDatos"
                                        action="assets/php/actualizarDatosUser.php">
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
                                                    value="<?php echo $reg['primer_nombre']?>">
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
                                            <div class="form-group col-md-6">
                                                <label for="registrar-email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="correo_143@correo.com" require
                                                    value="<?php echo $reg['email'] ?>">
                                                <!-- Div de carga -->
                                                <div id="result-email"></div>
                                            </div>
                                            <!-- Contraseña -->
                                            <div class="form-group col-md-6">
                                                <label for="registrar-contrasena">Contraseña</label>
                                                <input type="password" class="form-control" id="contrasena"
                                                    name="contrasena" placeholder="*********" require
                                                    value="<?php echo $reg['contrasena'] ?>"
                                                    style="margin-bottom: 1rem;">
                                                <!-- confirmContraseña -->
                                                <input type="password" class="form-control" id="confirmContrasena"
                                                    name="confirmContrasena" placeholder="*********" require
                                                    value="<?php echo $reg['contrasena'] ?>">

                                                <span class="fa fa-eye" id="mostrar" style="cursor:pointer;"> <span
                                                        class="pwdtxt color-datos-act" style="cursor:pointer;">Mostrar
                                                        contraseñas</span></span>
                                                <p class="mensaje text-danger" id="errorpass"></p>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cancelar</button>
                                            <input type="submit" class="btn btn-primary" value="Actualizar datos"
                                                name="actualizarDatosUser">
                                        </div>
                                    </form>
                                </div>
                                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Cancelar</button>
                                    <input type="submit" class="btn btn-primary" value="Asignar">
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>

                </div>
                <!--  $avatar  -->
                <div class="col-lg-6">

                    <center> <a href="vista_usuario.php"><img src="data:image/jpg;base64, <?php echo base64_encode($reg_a['imagen']) ?>" class="rounded-circle" height="200px"></td></a> </center>
                    <!-- Button trigger modal -->
                    <br>
                    <button type="button" class="btn btn-primary btn-block btn-lg" data-toggle="modal" data-target="#staticBackdrop">
                        Modificar foto de perfil
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                        <form enctype="multipart/form-data" action="assets\php\guardar.php" method="POST">
                                            <input class="form-control" type="file" name="imagen" id="imagen" required><br>
                                            <input class="form-control btn btn-success" type="submit" value="subir archivo">
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

    <!-- CDN Jquery-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Script Toastr -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Bootstrap validator -->
    <script type="text/javascript"
        src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/validaciones.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.0.0.js"></script> -->
    <!-- <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script> -->

    <!-- Mostrar pass-->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#email').on('blur', function () {
                $('#result-email').html('<img src="assets/img/loader.gif" />').fadeOut(1000);

                var email = $(this).val();
                var dataString = 'email=' + email;
                $.ajax({
                    type: "POST",
                    url: "assets/php/checkearDisponibilidad.php",
                    data: dataString,
                    success: function (data) {
                        $('#result-email').fadeIn(1000).html(data);
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