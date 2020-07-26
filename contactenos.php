<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <script src="..\JS\bootstrap.bundle.js">
    </script>
    <title>Contacto</title>
</head>

<body>
    <!-- Header -->
    <header>
        <!-- Barra de navegacion -->
        <nav class="navbar">
<<<<<<< HEAD
            <a class="navbar-brand" href="#">
                <img src="IMG/logodvl.jpeg" width="100" height="45" class="d-inline-block align-top img-logo" alt="Logo"
                    loading="lazy">
                DVLeasy
            </a>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Inicio</a>
=======
            <div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
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
                            <div class="modal-body" >
                                LOGO
                                <img src="IMG\logodvl.jpeg" alt="Logo NativApps" width="100%" height="100%">
                                <br>
                                <h5><strong> nombre completo de la empresa</strong></h5>
                                <p> DeVeLopment easy</p>
                                <br>
                                <h5>Integrantes</h5>
                                <p><strong> Dayana Rodrigues de Arco</strong> <br> Aprendiz ADSI de la ficha 1905372</p>
                            
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
                    <a class="nav-link" href="index.php">Inicio</a>
>>>>>>> b2069c4422d8f7740f1416b5e14c27db9a2adde1
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
                    <a class="nav-link a-actual" href="contactenos.html">Contactenos</a>
                </li>
            </ul>
        </nav>
    </header>
    <!-- Form -->
    <div class="contenedor-form">
        <div class="formulario">
            <form class="">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nombre</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Andres">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Apellido</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="perez">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Telefono</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="3001234567">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Dirección e-mail</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="corre@correo.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Mensaje</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                        placeholder="Hola, quiero contactarme con DLVeasy"></textarea>
                </div>
            </form>
            <button type="button" id="enviar" class="btn btn-secondary btn-lg boton-largo color-blanco">Enviar
                datos</button>
        </div>
        <div class="texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis dolore ad deserunt minima
            maxime et, commodi nostrum neque nesciunt, beatae, velit laudantium quis accusantium. Amet accusamus
            aspernatur animi laboriosam eveniet! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque
            molestias modi tenetur inventore necessitatibus maiores perspiciatis ex minima aperiam tempore voluptate in
            porro, nostrum aliquam illum eveniet doloremque consequuntur! Praesentium?</div>
    </div>

    <!-- Pie de pagina -->
    <footer>
        <div class="container footer">
            <h2>DVLeasy</h2>
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
<<<<<<< HEAD
                    <img src="img/icon-facebook.svg" alt="icon-facebook" />
                </li>
                <li class="footer__redes--item">
                    <img src="img//icon-twitter.svg" alt="icon-twitter" />
                </li>
                <li class="footer__redes--item">
                    <img src="img/icon-pinterest.svg" alt=" icon-pinterest" />
                </li>
                <li class="footer__redes--item">
                    <img src="img/icon-instagram.svg" alt="icon-instagram" />
=======
                    <a href="#">
                        <i class="fab fa-facebook-square texto-iconos"></i>
                    </a>
                </li>
                <li class="footer__redes--item">
                    <a href="#">
                        <i class="fab fa-twitter-square texto-iconos"></i>
                    </a>
                </li>

                <li class="footer__redes--item">
                    <a href="#">
                        <i class="fab fa-pinterest-square texto-iconos"></i>
                    </a>
                </li>
                <li class="footer__redes--item">
                    <a href="#">
                        <i class="fab fa-instagram-square texto-iconos"></i>
                    </a>
>>>>>>> b2069c4422d8f7740f1416b5e14c27db9a2adde1
                </li>
            </ul>
        </div>
        <div class="attribution">
            Challenge by
            <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>. Coded by
            <a href="https://github.com/soadtech" target="_blank">Pepito perez</a>.
        </div>
    </footer>
<<<<<<< HEAD
=======
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js" integrity="sha512-M+hXwltZ3+0nFQJiVke7pqXY7VdtWW2jVG31zrml+eteTP7im25FdwtLhIBTWkaHRQyPrhO2uy8glLMHZzhFog==" crossorigin="anonymous"></script>
>>>>>>> b2069c4422d8f7740f1416b5e14c27db9a2adde1

    </div>
</body>


</html>