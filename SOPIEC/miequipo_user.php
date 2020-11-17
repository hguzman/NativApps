<?php
require_once("assets/php/val_session_user.php");
require("assets/php/db.php");

 $registros = mysqli_query($conexion, "select * from equipos WHERE cedula_FK = '$sesion' ") or
  die("Problemas en el select:" . mysqli_error($conexion));
  
  $filas = mysqli_num_rows($registros);

  if($filas < 2 ){
        $cantidad  = "Mi equipo";
  } else{
      if($filas >= 2){
          $cantidad = "Mis equipos";
      };
  };

?>
<!DOCTYPE html>

<html>

<head>
    <link rel="shortcut icon" href="assets\img\SOPIEC.ico" type="image/x-icon">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mi equipo</title>
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
    <!-- Contenedor principal -->
    <div id="wrapper">
        <?php include_once("assets/modelos/navbar_header_user.php");?>

        <!-- Contenido de la pagina, lado derecho ancho  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <h2><?php echo $cantidad ?></h2>
                <hr>
                <?php
                    
                    while ($reg = mysqli_fetch_array($registros)){
                    
                
                ?>
                <div class="col-lg-3 well col-md-offset-1 text-center">
                    <center><i class="fa fa-desktop fa-5x"></i></center>
                    <hr style="border-top: 1px solid #291d1d;">
                    <p> <strong> Serial: </strong> <span class="color-datos-act"><?php echo $reg['serial'] ?></span>
                    </p>

                    <p><strong> Marca: </strong> <span class="color-datos-act"><?php echo $reg['marca'] ?></span>
                    </p>
                    <p><strong> Tipo de equipo: </strong> <span
                            class="color-datos-act"><?php echo $reg['tipo_equipo'] ?></span> </p>
                    <p><strong> Procesador: </strong> <span
                            class="color-datos-act"><?php echo $reg['procesador'] ?></span>
                    </p>
                    <p><strong> Memoria RAM: </strong> <span class="color-datos-act"><?php echo $reg['ram'] ?></span>
                    </p>
                    <p><strong> Disco duro:</strong> <span
                            class="color-datos-act"><?php echo $reg['disco_duro'] ?></span>
                    </p>
                    <p><strong> Sistema operativo: </strong><span
                            class="color-datos-act"><?php echo $reg['sistema_operativo'] ?></span></p>
                    <p><strong> Estado: </strong><span class="color-datos-act"><?php echo $reg['estado'] ?></span></p>

                </div>


                <?php
               
            } 
            if ($filas < 1){
                    echo "<div class='alert alert-danger' role='alert'>Usted no tiene ningún equipo asignado</div>";
                };
                mysqli_free_result($registros);
                mysqli_close($conexion);
                ?>

            </div>
            <!-- /. PAGE INNER  -->
            <?php 
    include('assets/modelos/footer.php')
    ?>
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