<!DOCTYPE html>
<html lang="en">
<?php
require_once("PHP/db.php")

?>

<head>
    <link rel="shortcut icon" href="img\empresa-logo.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/763b114892.js" crossorigin="anonymous"></script>
    <script src="..\JS\bootstrap.bundle.js">
    </script>
    <title>Opiniones</title>
</head>

<body>
    <!-- Header -->
    <header id="contenedor">
        <!-- Barra de navegacion -->
        <div class="nav-bar site-header sticky-top ">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e8e8e8; font-family: cursive;">
                <h2><a class="navbar-brand hvr-bob dvl-titulo" href="index.php">DVLeasy</a></h2>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <a class="navbar-brand hvr-bob dvl-header" href="index.php">Inicio</a>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link hvr-bob dvl-header" href="productos.html">Productos<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link hvr-bob dvl-header" href="opiniones.php">Opinion de nuestros clientes
                                <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link hvr-bob dvl-header" href="contactenos.php">Contactenos <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
                <a href="index.php" class="hvr-bob">
                    <img src="img\empresa-logo.png" width="30" height="30" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto " role="img" viewBox="0 0 24 24" focusable="false" style="border-radius: 20px;">
                </a>
            </nav>
        </div>
    </header>
    <div class="container-fluid">
        <br>
        <!-- Div de comentarios -->
        <div class="pb-5 row">
            <div class="col-lg-4 col-md-6 col-sm-12" style="text-align: center;">
                <h2 class="pt-5 pb-4 titulos"> Comentarios</h2>
                <?php
                $seleccion = "SELECT * FROM opinion ORDER BY fecha DESC";
                $resultado = mysqli_query($conexion, $seleccion);
                
                if (isset($resultado)) {

                    while ($res = mysqli_fetch_array($resultado)) {
                        $fechacre = explode("-", $res['fecha']);

                ?>
                        <div class=" border-white border-top " style="padding: 1rem;">
                            <h6 class="border-bottom border-white pb-2 nombres">
                                <strong><?php echo $res['1'] . " " . $res['2'] . ":" ?> </strong> </h6>
                            <p class="comment"><?php echo $res['3']; ?> </p>
                            <small class="col-6"><?php echo $fechacre[2] . "/" . $fechacre[1] . "/" . $fechacre[0]   ?></small>
                        </div>
                        <br>

                <?php
                    }
                } else {
                    echo "¡Nada por aquí!";
                };


                ?>

            </div>
            <!-- Imagen -->
            <div class="col-lg-8 col-md-6 col-sm-12">
                <img width="100%" src="IMG/comentario.svg" alt="Comentarios">
            </div>
        </div>
        <!-- Enviar opinion -->

        <form method="POST" action="PHP/comentarios.php">

            <div class="form-group centrar-comentario">
                <center>
                    <h3 class="titulos" style="margin: 0;">Escribe tu comentario</h3>
                </center>
                <div id="alerta" class="alert invisible">
                    <a class="btn close" href="opiniones.php">
                        <span aria-hidden="true">&times;</span>
                    </a>
                    <p id="msm"></p>

                </div>
                <div class="row d-flex justify-content-lg-around">

                    <input type="text" name="nombre" class="form-control col-5 mb-3" placeholder="Nombre" required pattern="[A-Za-z!?-]{3,45}" title="Sólo puedes ingresar letras de la A-Z a-z">

                    <input type="text" name="apellido" class="form-control col-5 mb-3" placeholder="Apellido" required pattern="[A-Za-z!?-]{3,45}" title="Sólo puedes ingresar letras de la A-Z a-z">

                    <textarea name="comentario" cols="92" rows="2" type="textarea" class="form-control col-11" id="exampleInputEmail1" required aria-describedby="emailHelp" placeholder="Agrega tu opinion, ¡ES GRATIS!"></textarea>
                </div>

                <small style="margin-left: 34%;" id="emailHelp" class="form-text text-muted">Tu opinion nos importa
                    mucho by
                    Dvleasy
                </small>
                <button type="submit" class="btn btn-outline-info  btn-block btn-enviar">¡Enviar mi comentario!</button>
            </div>
        </form>
    </div>
    <!-- Pie de pagina -->
    <footer>
        <div class="container footer">
            <h2><a href="index.php">DVLeasy</a></h2>

            <ul class="footer__company">
                <h3 class="footer__company--title">Compañia</h3>
                <li class="footer__company--item"><a href="acerca_dvleasy.html">Acerca de DVLeasy</a></li>
                <li class="footer__company--item"><a href="docs/nosotros.html">Nuestro equipo</a></li>
                <li class="footer__company--item"><a href="contactenos.php">Contactenos</a> </li>
            </ul>
            <ul class="footer__redes d-flex justify-content-around">
                <li class="footer__redes--item">
                    <a href="https://www.facebook.com/DVLeasy-119472056341523" target="_blank">
                        <i class="fab fa-facebook-square texto-iconos"></i>
                    </a>
                </li>
                <li class="footer__redes--item">
                    <a href="https://twitter.com/DvLeasy">
                        <i class="fab fa-twitter-square texto-iconos" target="_blank"></i>
                    </a>
                </li>

                <li class="footer__redes--item">
                    <a href="https://co.pinterest.com/developmenteasy/" target="_blank">
                        <i class="fab fa-pinterest-square texto-iconos"></i>
                    </a>
                </li>

                <li class="footer__redes--item">
                    <a href="https://www.instagram.com/dvleasy/" target="_blank">
                        <i class="fab fa-instagram-square texto-iconos"></i>
                    </a>
                </li>
            </ul>
        </div>

    </footer>
    <!--Archivos de javascript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <!--Archivos de javascript-->

    <?php
    if (isset($_GET['validado']) && $_GET['validado'] == "yes") {
        $_GET['validado'] = "no";
        echo '<script>$(document).ready(function (){
                            $("#alerta").addClass("alert-success");
                            $("#alerta").removeClass("invisible");
                            $("#msm").text("Mensaje enviado correctamente")});
                            </script>';
    } else {
    }

    ?>
</body>
</body>

</html>