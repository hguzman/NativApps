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
        <nav class="navbar">
            <div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal" style="color: whitesmoke;">
                    DVLeasy 
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Información de de DVLeasy</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                LOGO
                                <img src="IMG\logodvl.jpeg" alt="Logo NativApps" width="100%" height="100%">
                                <br>
                                <h5><strong> nombre completo de la empresa</strong></h5>
                                <p> DeVeLopment easy</p>
                                <br>
                                <h5>Integrantes</h5>
                                <p><strong> Dayana Rodriguez de Arco</strong> <br> Aprendiz ADSI de la ficha 1905372</p>

                                <p><strong>Kelvin Martinez</strong> <br> Aprendiz ADSI de la ficha 1905372</p>

                                <p><strong>Livan Torres</strong> <br> Aprendiz ADSI de la ficha 1905372</p>

                                <p><strong>Mario Gómez</strong> <br> Aprendiz ADSI de la ficha 1905372</p>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link a-actual" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="productos.html">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="opiniones.html">Opinion de nuestros clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactenos.php">Contactenos</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Contenedor principal -->
    <div class="container-fluid">
        <!-- Banner y botones contacto, productos -->
        <div class="banner">
            <!-- Botones dentro del banner -->
            <div class="imagen-banner">
                <img src="img/1755.png" class="img-fluid img-banner" alt="Responsive image">
            </div>
            <a type="button" class="btn btn-outline-dark contactanos-btn pt-2" href="contactenos.html">Contactenos!</a>
            <a type="button" class="btn btn-outline-dark boton-productos pt-2" href="productos.html">Nuestros
                productos</a>
        </div>

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
                    <a class="btn btn-secondary btn-lg boton-largo color-blanco" href="https://kelvinmr1997.github.io/NativApps/diagramas.html">Ver más
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
                    <a class="btn btn-secondary btn-lg boton-largo color-blanco" href="SOPIEC/login.php">Ver más
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
                    <a href="https://www.facebook.com/DVLeasy-119472056341523">
                        <i class="fab fa-facebook-square texto-iconos"></i>
                    </a>
                </li>
                <li class="footer__redes--item">
                    <a href="https://twitter.com/DvLeasy">
                        <i class="fab fa-twitter-square texto-iconos"></i>
                    </a>
                </li>

                <li class="footer__redes--item">
                    <a href="https://co.pinterest.com/developmenteasy/">
                        <i class="fab fa-pinterest-square texto-iconos"></i>
                    </a>
                </li>

                <li class="footer__redes--item">
                    <a href="https://www.instagram.com/dvleasy/">
                        <i class="fab fa-instagram-square texto-iconos"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="attribution">
            Challenge by
            <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>. Coded by
            <a href="#" target="_blank">Pepito peres</a>.
        </div>
    </footer>
    <!-- CDN de Fontawesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js" integrity="sha512-M+hXwltZ3+0nFQJiVke7pqXY7VdtWW2jVG31zrml+eteTP7im25FdwtLhIBTWkaHRQyPrhO2uy8glLMHZzhFog==" crossorigin="anonymous"></script>
    <!--Archivos de javascript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!--Archivos de javascript-->
</body>

</html>