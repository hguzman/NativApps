<?php
require_once("assets/php/val_session_user.php");
?>
<?php
require_once("assets/php/db.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SOPIEC</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>



<body>
    <!-- Contenedor principal -->
    <div id="wrapper">
    <?php include_once("assets/modelos/navbar_header_user.php");?> 


        <!-- Contenido de la pagina, lado derecho ancho  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Alerta -->
                        <?php if (isset($_SESSION['mensaje'])) : ?>
                            <div class="container ancho100 bg-<?php echo $_SESSION['tipo_mensaje']; ?>">
                                <?php echo $_SESSION['mensaje']; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                        <?php endif; ?>
                        <div class="usuarios-buscar">
                            <h2>Equipos</h2>
                            <!-- Barra de busqueda -->
                            <form class="form-inline my-2 my-lg-0 barra-buscar" action="assets/php/buscarequipo.php" method="GET">
                                <input class="form-control mr-sm-2" type="search" placeholder="Serial" aria-label="Search" id="buscar_equipo" name="buscar_equipo">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="boton_buscar" id="boton_buscar">Buscar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <hr />

                <!-- query -->
                <?php
                require_once("assets/php/db.php");
                $registros = mysqli_query($conexion, "select `serial`, `marca`, `nombre`, `tipo_equipo`, `modelo_equipo`, `procesador`, `ram`, `disco_duro`, `sistema_operativo`
                                      from equipos") or
                    die("Problemas en el select:" . mysqli_error($conexion));
                ?>
                <div id="contenedor-usuarios" class="contenedor-usuarios">
                    <div class="row">
                        <!-- Tabla de valores en base de datos -->
                        <table class="table">
                            <thead class="thead-light ">
                                <!-- Header de la tabla -->
                                <tr class="">
                                    <th scope="col">Serial</th>
                                    <th scope="col">Marca</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Tipo de equipo</th>
                                    <th scope="col">Modelo de equipo</th>
                                    <th scope="col">Procesador</th>
                                    <th scope="col">RAM</th>
                                    <th scope="col">Disco duro</th>
                                    <th scope="col">Sistema operativo</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                while ($reg = mysqli_fetch_array($registros)) {
                                ?>
                                    <!-- Contenido de la tabla -->
                                    <tr class="actual">
                                        <th scope="row">
                                            <input class="form-control" type="text" value="<?php echo $serial = $reg['serial'] ?>" readonly id="serial" name="serial" readonl> </th>
                                        <td> <?php echo $reg['marca'] ?></td>
                                        <td> <?php echo $reg['nombre'] ?></td>
                                        <td> <?php echo $reg['tipo_equipo'] ?> </td>
                                        <td> <?php echo $reg['modelo_equipo'] ?> </td>
                                        <td> <?php echo $reg['procesador'] ?> </td>
                                        <td> <?php echo $reg['ram'] ?> </td>
                                        <td> <?php echo $reg['disco_duro'] ?> </td>
                                        <td> <?php echo $reg['sistema_operativo'] ?> </td>

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
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/validaciones.js"></script>    
    <script src="assets/js/custom.js"></script>  
    <script src="assets/js/validaciones.js"></script>
    
    <script src="https://kit.fontawesome.com/763b114892.js" crossorigin="anonymous"></script>
</body>

</html>