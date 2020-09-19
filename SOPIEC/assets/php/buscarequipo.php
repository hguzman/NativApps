<?php
require_once("val_session_admin.php");
?>
<?php
require_once("db.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SOPIEC</title>
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

                        <div class="equipos-buscar">
                            <h2>Equipos</h2>
                            <!-- Barra de busqueda -->
                            <form class="form-inline my-2 my-lg-0 barra-buscar" action="buscarequipo.php" method="GET">
                                <input class="form-control mr-sm-2" type="search" placeholder="Serial" aria-label="Search" id="buscar_equipo" name="buscar_equipo">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="boton_buscar" id="boton_buscar">Buscar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <hr />

                <!-- Busqueda por distintos criterios -->
                <?php
                $registros = mysqli_query($conexion, "select serial,marca,nombre,tipo_equipo,modelo_equipo,procesador,ram,disco_duro,sistema_operativo
                    from equipos where 
                    serial ='$_REQUEST[buscar_equipo]'
                    or marca ='$_REQUEST[buscar_equipo]' 
                    or nombre ='$_REQUEST[buscar_equipo]'
                    or tipo_equipo ='$_REQUEST[buscar_equipo]'
                    or modelo_equipo ='$_REQUEST[buscar_equipo]'
                    or procesador ='$_REQUEST[buscar_equipo]'
                    or ram ='$_REQUEST[buscar_equipo]'
                    or disco_duro ='$_REQUEST[buscar_equipo]'
                    or sistema_operativo ='$_REQUEST[buscar_equipo]'
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
                                            <input class="form-control" type="text" value="<?php echo $serial = $reg['serial'] ?>" readonly id="serial" name="serial" readonly> </th>
                                        <td> <?php echo $reg['marca'] ?></td>
                                        <td> <?php echo $reg['nombre'] ?></td>
                                        <td> <?php echo $reg['tipo_equipo'] ?></td>
                                        <td> <?php echo $reg['modelo_equipo'] ?> </td>
                                        <td> <?php echo $reg['procesador'] ?> </td>
                                        <td> <?php echo $reg['ram'] ?> </td>
                                        <td> <?php echo $reg['disco_duro'] ?> </td>
                                        <td> <?php echo $reg['sistema_operativo'] ?> </td>
                                        <td class="eliminar-editar">
                                            <!-- botones editar y eliminar -->
                                            <a id="edit" class="btn fa fa-pen" href="../../modificarequipo.php?serial=<?php echo $reg['serial']; ?>"></a>

                                            <a id="del" class="btn fa fa-trash-alt" href="borrarequipo.php?serial=<?php echo $reg['serial']; ?>"></a>
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

</body>

</html>