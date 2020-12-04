<!DOCTYPE html>
<?php
require_once("assets/php/db.php");
require_once("assets/php/val_session_admin.php");
$cc= "SELECT cedula FROM usuarios WHERE cedula='$sesion'";

include("assets/modelos/vpa_admin.php");

?>

<html>

<head>
    
    <link rel="shortcut icon" href="assets\img\SOPIEC.ico" type="image/x-icon">
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="assets/img/SOPIEC.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio</title>
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
        <?php include("assets/modelos/navbar_header_admin_vp.php"); ?>

        <!-- Contenido de la pagina, lado derecho ancho  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Panel de Administracion</h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <h3>Asignación de equipos</h3>
                <!-- Modal -->

                <div id="listas-eq-us" class="listas-eq-us">
                    <!-- Query Seleccionar usuarios-->
                    <?php 
                        $registros = mysqli_query($conexion,"SELECT * FROM usuarios") or die("Problemas en el select:" . mysqli_error($conexion));
                        ?>
                    <div class="form-group multiple" id="user-list">

                        <label class="centrar" for="exampleFormControlSelect2"> Cedula | Nombre | Apellido</label>

                        <select size="2" id="selectUser" class="escojer-user form-control"
                            id="exampleFormControlSelect2" name="selectUser">



                            <?php
                                while ($reg = mysqli_fetch_array($registros)) {
                                ?>

                            <option class="select-hr"
                                value="<?php echo $reg['cedula']."-". $reg['primer_nombre']."   ".$reg['primer_apellido'] ?>">

                                <?php echo $reg['cedula']." | ".$reg['primer_nombre']." | ".$reg['primer_apellido'] ?>
                            </option>

                            <?php
                                }
                                
                            ?>
                        </select>
                    </div>
                    <!--Query Select Equipos  -->
                    <?php 
                    $registros_e = mysqli_query($conexion,"SELECT * FROM `equipos` WHERE cedula_FK = 0") or die("Problemas en el select:" . mysqli_error($conexion));
                    ?>
                    <div class="form-group multiple">

                        <label class="centrar" for="exampleFormControlSelect2">Serial | Nombre | Tipo | Estado </label>

                        <select size="2" id="selectEquipo" class="escojer-user form-control"
                            id="exampleFormControlSelect2">
                            <?php
                                while ($reg_e = mysqli_fetch_array($registros_e)) {
                                ?>
                            <option id="eq-serial"
                                value="<?php echo $reg_e['serial']."separar_serial".$reg_e['nombre']." con  serial #". $reg_e['serial']?>"
                                class="select-hr">

                                <?php echo $reg_e['serial']." | ".$reg_e['nombre']." | ".$reg_e['tipo_equipo']." | ".$reg_e['estado'] ?>
                            </option>
                            <!-- <p>Este es el serial: </p><?php echo $reg_e['serial']?> -->
                            <?php
                                }
                                mysqli_close($conexion);
                            ?>
                        </select>
                    </div>
                </div>
                <!-- Botón asignar -->
                <button id="asignar" data-toggle="modal" data-target="#staticBackdrop" href="modal"
                    class="btn btn-primary" style="margin-left: 82%;
                    border-radius: 5px !important;">Asignar</button>

                <!-- Modal asignar -->
                <form method="POST" id="formAsignar">
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Asignación de equipo</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div id="result-asignacion"></div>
                                    <h2>Se asignará el equipo :</h2>
                                    <p class="color-datos-act" id="s_equipo"></p>
                                    <h2> al usuario :</h2>
                                    <p class="color-datos-act" id="n_user"></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Cancelar</button>
                                    <input type="submit" class="btn btn-primary" value="Asignar">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- Botón ver Asignaciones -->
                <center> <a href="equiposAsignados.php" class="btn btn-success btn-lg r cntr-btn" id="modificarUser">Ver
                        Asignaciones
                        de equipos.</a></center>


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
    <!-- Mostrar datos del equipo en el modal -->
    <!-- Asignacion script -->
    <script src="assets/js/asignacion.js"></script>

</body>

</html>