<?php
if (isset($_SESSION['login'])) {
    session_destroy();
} else {
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="CSS\bootstrap.css">
    <link rel="stylesheet" href="CSS\style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
</head>

<body>
    <!-- Header -->
    <header id="contenedor">
        <!-- Barra de navegacion -->
        <div class="nav-bar site-header sticky-top ">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e8e8e8; font-family: cursive;">
                <h2><a class="navbar-brand hvr-bob dvl-titulo" href="index.php">DVLeasy</a></h2>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <a class="navbar-brand hvr-bob dvl-header" href="index.php">Inicio</a>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link hvr-bob dvl-header" href="productos.html">Productos<span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link hvr-bob dvl-header" href="opiniones.html">Opinion de nuestros clientes
                                <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link hvr-bob dvl-header" href="contactenos.php">Contactenos <span
                                    class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
                <a href="index.php" class="hvr-bob">
                    <img src="img/logodvl.jpeg" width="30" height="30" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto "
                        role="img" viewBox="0 0 24 24" focusable="false" style="border-radius: 20px;">
                </a>
            </nav>
        </div>
    </header>
    <!-- Banner y botones contacto, productos -->
    <div class="banner">
        <!-- Botones dentro del banner -->
        <div class="imagen-banner">
            <img src="img/1755.png" class="img-fluid img-banner" alt="Responsive image">
            <a type="button" class="btn btn-outline-dark contactanos-btn pt-2" href="contactenos.html">Contactenos!</a>
            <a type="button" class="btn btn-outline-dark boton-productos pt-2" href="productos.html">Nuestros
                productos</a>
        </div>
    </div>
    <!-- Contenedor principal -->
    <div class="container">
        <!-- Div Cajas (Documentacion, opinion y SOPIEC) -->
        <div class="card-deck pt-4 cajas">
            <!-- Primera caja/Documentacion -->
            <div class="card">
                <img src="IMG/Document.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Documentacion de proyectos</h5>
                    <p class="card-text">Echa un vistaso a la documentacion de nuestros proyectos, el diseño, los
                        diagramas
                        y todo lo referente a nuestro trabajo</p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-secondary btn-lg boton-largo color-blanco"
                        href="https://kelvinmr1997.github.io/NativApps/diagramas.html">Ver más
                        <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <!-- Segunda caja/Tu opinion -->
            <div class="card">
                <img src="IMG/opiniones.jpg" class="card-img-top" alt="Opiniones">
                <div class="card-body">
                    <h5 class="card-title">¡Tu opinion es importante para nosotros!</h5>
                    <p class="card-text">Nos gustaria saber que piensas a cerca de nuestro trabajo</p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-secondary btn-lg boton-largo color-blanco" href="opiniones.html">Ver más
                        <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <!-- Tercera caja/ SOPIEC-->
            <div class="card">
                <img src="IMG/sopiec.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">SOPIEC</h5>
                    <p class="card-text">Un software de inventariado de equipos de computo con niveles de acceso</p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-secondary btn-lg boton-largo color-blanco" href="SOPIEC/login.php">Ingresar
                        <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
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
    <!-- CDN de Fontawesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"
        integrity="sha512-M+hXwltZ3+0nFQJiVke7pqXY7VdtWW2jVG31zrml+eteTP7im25FdwtLhIBTWkaHRQyPrhO2uy8glLMHZzhFog=="
        crossorigin="anonymous"></script>
    <!--Archivos de javascript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <!--Archivos de javascript-->
</body>

</html>