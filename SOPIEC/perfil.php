<!DOCTYPE html>
<?php
require("assets/php/db.php");
$sesion = $_SESSION['username'];
if (!isset($sesion)) {
    header("location: login.php");
} else {
}

?>

<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SOPIEC</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
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
                        <a href="perfil.php"><img src="data:image/jpg;base64, <?php echo base64_encode($reg_a['imagen']) ?>" class="rounded-circle" height="200px"></td></a>
                    </li>
                    <!-- Primero/inicio -->
                    <li>
                        <a href="index.php"><i class="fa fa-desktop "></i>Inicio</a>
                    </li>
                    <!-- Segundo/Administracion de usuarios -->
                    <li>
                        <a href="#"><i class="fa fa-edit "></i>Administración de usuarios<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="nuevousuario.php">Crear Nuevo usuario</a>
                            </li>
                            <li>
                                <a href="usuarios.php">Ver usuarios registrados</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Cuarto/Administracion de equipos -->
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Administración de equipos<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="nuevoequipo.php">Agregar un equipo</a>
                            </li>
                            <li>
                                <a href="equipos.php">Gestionar equipo</a>
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
                   

                    <center> <a href="perfil.php"><img src="data:image/jpg;base64, <?php echo base64_encode($reg_a['imagen']) ?>" class="rounded-circle" height="200px"></td></a> </center>
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
                                    <h3> Cargar imagen jpg</h3>
                                    <form enctype="multipart/form-data" action="assets\php\guardar.php" method="POST">

                                        <input type="text" name="nombre" id="nombre" required><br><br>
                                        <input type="file" name="imagen" id="imagen" required><br>
                                        <input type="submit" value="subir archivo">
                                    </form>
 
    <h3>Seleccionar imagen de la BD</h3>
                                    <center>
        <table border="2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Opciones</th>
                </tr>

            </thead>
            <tbody>
                <?php
                
                $query_b = "SELECT * from avatares";

                $registros_b = mysqli_query($conexion, $query_b) or
                    die("Problemas en el select:" . mysqli_error($conexion));

                while ($reg_b = mysqli_fetch_array($registros_b)) {
                ?>
                    <tr>
                        <td><?php echo $reg_b['ID'] ?></td>
                        <td><?php echo $reg_b['nombre'] ?></td>
                        <td><img src="data:image/jpg;base64, <?php echo base64_encode($reg_b['imagen']) ?>" height="200px"></td>
                        <td><a id="edit" class="btn btn-success" href="assets/php/actualizar_avatar.php?id=<?php echo $reg_b['ID']; ?>"> SELECCIONAR</a>
                        <a id="del" class="btn btn-danger" href="assets/php/eliminar_avatar.php?id=<?php echo $reg_b['ID']; ?>"> ELIMINAR</a></td>
                    </tr>



                <?php
                };
                mysqli_free_result($registros_b);
                ?>


            </tbody>
        </table>
    </center>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Understood</button>
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