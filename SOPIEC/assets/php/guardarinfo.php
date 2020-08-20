<?php
// Incluir archivo de base de datos
require_once("db.php");
// Funcion para el botón enviar
if (isset($_POST['registrar'])) {
    $cedula = $_POST['cedula'];
    $area = $_POST['area'];
    $primer_nombre = $_POST['primer_nombre'];
    $segundo_nombre = $_POST['segundo_nombre'];
    $primer_apellido = $_POST['primer_apellido'];
    $segundo_apellido = $_POST['segundo_apellido'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    $addrol = $_POST['addrol'];

    // Validar que la cedula y el email no se repitan
    // $validarCedula = @pg_query($conexion, "SELECT cedula FROM usuarios WHERE cedula=" . $cedula);
    // if (pg_num_rows($validarCedula) > 0) {
    //     echo "el nro de cedula ya existe";
    //     echo ("<script>alert('El numero de cedula no existe')</script>");
    // }

    // $validarEmail = mysqli_query($conexion, "select email
    // from usuarios where email ='$email'");
    // if ($validarCedula) {
    //     echo ("<script>alert('Esta cedula ya se encuentra registrada');</script>");
    // } else if ($validarEmail) {
    //     echo ("<script>alert('Este Correo ya se encuentra registrado');</script>");
    // }

    // Validaciones
    if ($cedula == "" || $primer_nombre == "" || $area == "" || $email == "" || $contrasena == "" || $primer_nombre == "") {
        $_POST['registrar'];
        echo ("se está metiendo en el condicional de validacion en php");
        // header('Location: ../../nuevousuario.php');
        // echo ("<script src='../js/validaciones.js'></script>"); 
        die();
    }

    // Query
    $query = "INSERT INTO usuarios(cedula,area,primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,email,contrasena,rol) VALUES ('$cedula','$area','$primer_nombre','$segundo_nombre','$primer_apellido','$segundo_apellido','$email','$contrasena','$addrol')";

    //realizas la consulta en al base de datos
    $resultado = mysqli_query($conexion, $query);


    if (!$resultado) {
        header("location: ../../usuarios.php");
        die();
    }
}
?>

<?php
$sesion = $_SESSION['username'];
$rol = $_SESSION['rol'];
if (!isset($sesion)) {
    header("location: login.php");
} else {
    if ($rol == "admin") {
    } else {
        header("location: logout.php"); //Esta ruta hay que cambairla cuando se suba al hosting
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nuevo Usuario</title>

    <!-- Estilos CSS Toastr -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- BOOTSTRAP STYLES-->
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../css/font-awesome.css" rel="stylesheet" />
    <!-- FONTAWESOME CDN -->
    <script src="https://kit.fontawesome.com/763b114892.js" crossorigin="anonymous"></script>
    <!-- CUSTOM STYLES-->
    <link href="../css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
                    <a class="navbar-brand" href="../../index.php"><i class="fa fa-square-o "></i>&nbsp;SOPIEC</a>
                </div>
                <!-- Lista opciones -->
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">See Website</a></li>
                        <li><a href="#">Open Ticket</a></li>
                        <li><a href="logout.php">Cerrar sesión</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!--  Sidebar de opciones  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        <img src="../img/find_user.png" class="img-responsive" />
                    </li>
                    <!-- Primero/inicio -->
                    <li>
                        <a href="../../index.php"><i class="fa fa-desktop "></i>Inicio</a>
                    </li>
                    <!-- Segundo/Administracion de usuarios -->
                    <li>
                        <a href="#"><i class="fa fa-edit "></i>Administración de usuarios<span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../../nuevousuario.php">Crear Nuevo usuario</a>
                            </li>
                            <li>
                                <a href="../../usuarios.php">Ver usuarios registrados</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Cuarto/Administracion de equipos -->
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Administración de equipos<span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../../nuevoequipo.php">Agregar un equipo</a>
                            </li>
                            <li>
                                <a href="../../equipos.php">Gestionar equipo</a>
                            </li>

                        </ul>
                    </li>
                    <!--  Quinto/A cerca de SOPIEC-->
                    <li>
                        <a href="#"><i class="fa fa-qrcode "></i>A cerca de SOPIEC</a>
                    </li>
                </ul>

            </div>

        </nav>

        <!-- Contenido de la pagina, lado derecho ancho  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">

                        <div class="usuarios-buscar">
                            <h2>Datos del nuevo Usuario</h2>
                            <!-- Barra de busqueda -->
                            <form class="form-inline my-2 my-lg-0 barra-buscar" action="buscarusuario.php" method="GET">
                                <input class="form-control mr-sm-2" type="search" placeholder="C.C" aria-label="Search"
                                    id="buscar_usuario" name="buscar_usuario">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="boton_buscar"
                                    id="boton_buscar">Buscar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <hr />

                <div id="contenedor-usuarios" class="contenedor-usuarios">
                    <div class="row contenedor-tabla">

                        <!-- Datos del nuevo usuario -->
                        <div class="datos-user-act">
                            <h2>Cedula: <span class="color-datos-act"><?php echo $cedula ?> </span></h2>
                            <h2>Primer nombre: <span class="color-datos-act"><?php echo $primer_nombre ?> </span></h2>
                            <h2>Area: <span class="color-datos-act"><?php echo $area ?> </span></p>
                                <h2>Segundo nombre: <span class="color-datos-act"><?php echo $segundo_nombre ?> </span>
                                </h2>
                                <h2>Primer apellido: <span class="color-datos-act"><?php echo $primer_apellido ?>
                                    </span></h2>
                                <h2>Segundo apellido: <span class="color-datos-act"><?php echo $segundo_apellido ?>
                                    </span></h2>
                                <h2>Correo: <span class="color-datos-act"><?php echo $email ?> </span></h2>
                                <h2>Rol: <span class="color-datos-act"><?php echo $addrol ?> </span></h2>
                        </div>

                        <div class="botones-edi-elim">
                            <label for="edit" class="fa">Editar: </label>
                            <a id="edit" class="btn btn-lg fa fa-pen"
                                href="../../modificar.php?cedula=<?php echo $cedula ?>"></a>
                            <label for="del" class="fa">Eliminar: </label>
                            <a id="del" class="btn btn-lg fa fa-trash-alt" href="#"
                                onclick="confirmacion_borrar(<?php echo $cedula ?>)"></a>
                        </div>
                        <!-- Boton Ver todos los usuarios. -->
                        <div class="col-md-4 col-sm-12 botones-newUser">
                            <a href="../../nuevousuario.php" class="btn btn-primary btn-lg r">CREAR OTRO USUARIO</a>
                            <a href="../../usuarios.php" class="btn btn-success btn-lg r">VER TODOS LOS USUARIOS</a>
                        </div>
                    </div>
                </div>
            </div>

            <input hidden id="mostrarCC" value="<?php echo $cedula ?>"></input>


            <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../js/jquery.metisMenu.js"></script>
    <!-- CDN Jquery-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Script Toastr -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="../js/custom.js"></script>
    <script src="../js/validaciones.js"></script>

    <!-- Alerta borrar -->
    <script type="text/javascript">
        function confirmacion_borrar(cedula) {
            if (confirm(`¿Realmente desea eliminar el usuario con C.C ${cedula}?`)) {
                window.location.href = "borrar.php?cedula=" + cedula
                toastr["warning"]("El usuario con C.C #" + cedula + " ha sido eliminado.", "Usuario eliminado")

                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": true,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": true,
                    "onclick": null,
                    "showDuration": "5000",
                    "hideDuration": "5000",
                    "timeOut": "5000",
                    "extendedTimeOut": "5000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }

            }
        }
    </script>
    <!-- Alerta usuario actualizado -->
    <script>
        var cedula = document.getElementById('mostrarCC').value;
        document.readyState =
            toastr["success"]("El usuario con C.C #" + cedula + " ha sido guardado exitosamente.", "Usuario guardado")

        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": true,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "5000",
            "hideDuration": "5000",
            "timeOut": "5000",
            "extendedTimeOut": "5000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>

</body>

</html>