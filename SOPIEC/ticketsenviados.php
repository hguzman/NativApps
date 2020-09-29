<!DOCTYPE html>
<?php
require_once("assets/php/val_session_user.php");
require_once("assets/php/db.php");
?>

<html>

<head>
    <link rel="shortcut icon" href="assets\img\SOPIEC.ico" type="image/x-icon">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tickets</title>
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
    <!-- Contenedor principal -->
    <div id="wrapper">
        <?php include_once("assets/modelos/navbar_header_user.php");?>

        <!-- Contenido de la pagina, lado derecho ancho  -->

        <div id="page-wrapper">
            <div id="page-inner">
                <h2>Tickets pendientes</h2>
                <hr />

                <!-- query -->
                <?php
                $registros = mysqli_query($conexion, "select id,fecha,nombre,email,asunto,estado  from ticket WHERE cedula 
                = $sesion order by estado ") or
                    die("Problemas en el select:" . mysqli_error($conexion));
                ?>
                <div id="contenedor-usuarios" class="contenedor-usuarios">
                    <div class="row contenedor-tabla">
                        <!-- Tabla de valores en base de datos -->
                        <table class="table">
                            <thead class="thead-light ">
                                <!-- Header de la tabla -->
                                <tr class="">
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Asunto</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Detalle</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                while ($reg = mysqli_fetch_array($registros)) {
                                ?>
                                <!-- Contenido de la tabla -->
                                <tr class="actual">
                                    <th scope="row">
                                        <input class="form-control" type="number" value="<?php echo $id = $reg['id'] ?>"
                                            readonly id="id" name="id" readonl> </th>
                                    <td> <?php echo $reg['nombre'] ?></td>
                                    <td> <?php echo $reg['fecha'] ?></td>
                                    <td> <?php echo $reg['email'] ?></td>
                                    <td> <?php echo $reg['asunto'] ?> </td>
                                    <!-- Cambiar estado de color según solución -->
                                    <?php
                                    $color ="";
                                       if($reg['estado'] == "Pendiente"){
                                        $color = "color: red;";
                                     }else{
                                         $color = "color: green;";
                                     }
                                    ?>
                                    <td style="<?php echo $color ?>" id="estado" value="<?php echo $reg['estado'] ?> ">
                                        <?php echo $reg['estado'] ?>
                                    </td>
                                    <td class="eliminar-editar">
                                        <!-- boton ver caso -->
                                        <a id="edit" class="btn fa fa-search"
                                            href="verticketUser.php?id=<?php echo $reg['id']; ?>"> Ver Caso</a>

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

    <!-- <script>
        var estado = document.getElementById('estado');
        console.log(estado);
    </script> -->

</body>

</html>