<?php
require_once("val_session_admin.php");
?>
<?php
require_once("db.php");
?>


<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="..\img\SOPIEC.ico" type="image/x-icon">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Busqueda de usuarios</title>
    <!-- Estilos CSS Toastr -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
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
        <?php include_once("../modelos/navbar_header_admin_vs.php"); ?>

        <!-- Contenido de la pagina, lado derecho ancho  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">

                        <div class="usuarios-buscar">
                            <h2>Usuarios</h2>
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

                <!-- Busqueda por distintos criterios -->
                <?php
                $registros = mysqli_query($conexion, "select cedula,area,primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,email
from usuarios where cedula ='$_REQUEST[buscar_usuario]' 
or primer_nombre='$_REQUEST[buscar_usuario]' 
or area='$_REQUEST[buscar_usuario]' 
or email='$_REQUEST[buscar_usuario]'
or primer_apellido='$_REQUEST[buscar_usuario]'")
                    or
                    die("Problemas en el select:" . mysqli_error($conexion));
             
                ?>
                <div id="contenedor-usuarios" class="contenedor-usuarios">
                    <div class="row contenedor-tabla">
                        <!-- Tabla de valores en base de datos -->
                        <table class="table">
                            <thead class="thead-light ">
                                <!-- Header de la tabla -->
                                <tr class="">
                                    <th scope="col">ID/Cedula</th>
                                    <th scope="col">Primer nombre</th>
                                    <th scope="col">Area</th>
                                    <th scope="col">Segundo nombre</th>
                                    <th scope="col">Primer apellido</th>
                                    <th scope="col">Segundo apellido</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                while ($reg = mysqli_fetch_array($registros)) {
                                ?>
                                <!-- Contenido de la tabla -->
                                <tr class="actual">
                                    <th scope="row">
                                        <input class="form-control" type="number"
                                            value="<?php echo $cedula = $reg['cedula'] ?>" readonly id="cedula"
                                            name="cedula" readonl> </th>
                                    <td> <?php echo $reg['primer_nombre'] ?></td>
                                    <td> <?php echo $reg['area'] ?></td>
                                    <td> <?php echo $reg['segundo_nombre'] ?></td>
                                    <td> <?php echo $reg['primer_apellido'] ?> </td>
                                    <td> <?php echo $reg['segundo_apellido'] ?> </td>
                                    <td> <?php echo $reg['email'] ?> </td>
                                    <td class="eliminar-editar">
                                        <!-- botones editar y eliminar -->
                                        <a id="edit" class="btn fa fa-pen"
                                            href="../../modificar.php?cedula=<?php echo $reg['cedula']; ?>"></a>
                                        <a id="del" class="btn btn-lg fa fa-trash-alt" href="#"
                                            onclick="confirmacion_borrar(<?php echo $reg['cedula']; ?>)"></a>
                                    </td>
                                </tr>

                    </div>
                </div>

                <?php
                                }
                                mysqli_close($conexion);
            ?>
                </tbody>
                </table>
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
    <script src="../js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="../js/custom.js"></script>

    <!-- CDN Jquery-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Script Toastr -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script src="../js/validaciones.js"></script>

    <!-- Alerta borrar -->
    <script type="text/javascript">
        // var nombre = document.getElementById("nombre");
        // console.log(nombre.value);

        function confirmacion_borrar(cedula) {

            if (confirm(`¿Realmente desea eliminar el usuario con C.C ${cedula}?`)) {


                toastr["error"]("El usuario con C.C #" + cedula + " ha sido eliminado.", "Usuario eliminado")

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

                setTimeout(() => {
                    window.location.href = "borrar.php?cedula=" + cedula
                }, 1500);
            }
        }
    </script>
</body>

</html>