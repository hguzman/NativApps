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
    <header>
        <!-- Barra de navegacion -->
        <nav class="navbar">
            <a class="navbar-brand" href="index.html">
                <img src="IMG/logodvl.jpeg" width="100" height="45" class="d-inline-block align-top img-logo" alt="Logo"
                    loading="lazy">
                DVLeasy
            </a>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link a-actual" href="index.html">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="productos.html">Productos</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="compania.html">Compañia</a>
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
            <img src="img/1755.jpg" class="img-fluid img-banner" alt="Responsive image">
            <a type="button" class="btn btn-outline-dark contactanos-btn pt-2" href="contactenos.php" >Contactenos!</a>
            <a type="button" class="btn btn-outline-dark boton-productos pt-2" href="productos.html" >Nuestros productos</a>
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
                    <a class="btn btn-secondary btn-lg boton-largo color-blanco" href="https://kelvinmr1997.github.io/NativApps/diagramas.html" >Ver más
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
                    <a class="btn btn-secondary btn-lg boton-largo color-blanco" href="opiniones.html" >Ver más
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
                    <button class="btn btn-secondary btn-lg boton-largo color-blanco">Ver más
                        <i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- CDN de Fontawesome -->
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"
        integrity="sha512-M+hXwltZ3+0nFQJiVke7pqXY7VdtWW2jVG31zrml+eteTP7im25FdwtLhIBTWkaHRQyPrhO2uy8glLMHZzhFog=="
        crossorigin="anonymous"></script>
        <!-- Pie de pagina -->
    <footer>
        <div class="container footer">
            <h2>Shortly</h2>
            <ul class="footer__features">
                <h3 class="footer__features--title">Features</h3>
                <li class="footer__features--item">Link Shortening</li>
                <li class="footer__features--item">Branden Links</li>
                <li class="footer__features--item">Analytics</li>
            </ul>

            <ul class="footer__resources">
                <h3 class="footer__resources--title">Resources</h3>
                <li class="footer__resources--item">Blog</li>
                <li class="footer__resources--item">Developers</li>
                <li class="footer__resources--item">Support</li>
            </ul>

            <ul class="footer__company">
                <h3 class="footer__company--title">Company</h3>
                <li class="footer__company--item">About</li>
                <li class="footer__company--item">Our Team</li>
                <li class="footer__company--item">Careers</li>
                <li class="footer__company--item">Contact</li>
            </ul>
            <ul class="footer__redes d-flex justify-content-around">
                <li class="footer__redes--item">
                    <img src="/img/icon-facebook.svg" alt="icon-facebook" />
                </li>
                <li class="footer__redes--item">
                    <img src="/img//icon-twitter.svg" alt="icon-twitter" />
                </li>
                <li class="footer__redes--item">
                    <img src="/img/icon-pinterest.svg" alt=" icon-pinterest" />
                </li>
                <li class="footer__redes--item">
                    <img src="/img/icon-instagram.svg" alt="icon-instagram" />
                </li>
            </ul>
        </div>
        <div class="attribution">
            Challenge by
            <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>. Coded by
            <a href="https://github.com/soadtech" target="_blank">Fernando Ropero</a>.
        </div>
    </footer>
</body>

</html>