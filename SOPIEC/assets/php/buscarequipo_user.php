<?php
require_once("val_session_user.php");
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
    <title>Busqueda de equipos</title>
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
        <?php include_once("../modelos/navbar_header_user_vs.php"); ?>

        <!-- Contenido de la pagina, lado derecho ancho  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">

                        <div class="usuarios-buscar">
                            <h2>Equipos</h2>
                            <!-- Barra de busqueda -->
                            <form class="form-inline my-2 my-lg-0 barra-buscar" action="buscarequipo_user.php"
                                method="GET">
                                <input class="form-control mr-sm-2" type="search" placeholder="Serial"
                                    aria-label="Search" id="buscar_equipo" name="buscar_equipo">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="boton_buscar"
                                    id="boton_buscar">Buscar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <hr />

                <!-- Busqueda por distintos criterios -->
                <?php
                $registros = mysqli_query($conexion, "select *
                    from equipos where 
                    serial LIKE '%$_REQUEST[buscar_equipo]%'
                    or marca LIKE '%$_REQUEST[buscar_equipo]%' 
                    or nombre LIKE '%$_REQUEST[buscar_equipo]%'
                    or tipo_equipo LIKE '%$_REQUEST[buscar_equipo]%'
                    or modelo_equipo LIKE '%$_REQUEST[buscar_equipo]%'
                    or procesador LIKE '%$_REQUEST[buscar_equipo]%'
                    or ram LIKE '%$_REQUEST[buscar_equipo]%'
                    or disco_duro LIKE '%$_REQUEST[buscar_equipo]%'
                    or sistema_operativo LIKE '%$_REQUEST[buscar_equipo]%'
")
                    or
                    die("Problemas en el select:" . mysqli_error($conexion));
                // // Alerta de criterio no encontrado NO SIRVE 
                // if (empty($registros)) {
                //     //mostrar mensaje
                //     $_SESSION['mensaje'] = 'El criterio de busqueda indicado no existe en la base de datos';
                //     $_SESSION['tipo_mensaje'] = 'danger';
                //     header('Location: ../../equipos.php');
                // }
                
                ?>
                <div id="contenedor-equipos" class="contenedor-usuarios">
                    <div class="row contenedor-tabla">
                        <!-- Tabla de valores en base de datos -->
                        <table class="table">
                            <thead class="thead-light ">
                                <!-- Header de la tabla -->
                                <tr class="">
                                    <th scope="col">Serial</th>
                                    <th scope="col">marca </th>
                                    <th scope="col">nombre</th>
                                    <th scope="col">tipo de equipo</th>
                                    <th scope="col">modelo de equipo</th>
                                    <th scope="col">procesador</th>
                                    <th scope="col">ram</th>
                                    <th scope="col">disco duro</th>
                                    <th scope="col">sistema operativo</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                while ($reg = mysqli_fetch_array($registros)) {
                                ?>
                                <!-- Contenido de la tabla -->
                                <tr class="actual">
                                    <th scope="row">
                                        <input class="form-control" type="text"
                                            value="<?php echo $serial = $reg['serial'] ?>" readonly id="serial"
                                            name="serial" readonly> </th>
                                    <td> <?php echo $reg['marca'] ?></td>
                                    <td> <?php echo $reg['nombre'] ?></td>
                                    <td> <?php echo $reg['tipo_equipo'] ?></td>
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
    <script src="../js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="../js/custom.js"></script>

</body>

</html>