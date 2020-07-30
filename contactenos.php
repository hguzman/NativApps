<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <script src="JS/jquery-3.4.1.min.js">
    </script>
    <title>Contacto</title>
</head>

<body>
    <!-- Header -->
    <header>
        <!-- Barra de navegacion -->
        <nav class="navbar">
            <a class="navbar-brand" href="#">
                <img src="IMG/logodvl.jpeg" width="100" height="45" class="d-inline-block align-top img-logo" alt="Logo"
                    loading="lazy">
                DVLeasy
            </a>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Inicio</a>
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
                    <a class="nav-link a-actual" href="contactenos.php">Contactenos</a>
                </li>

            </ul>
        </nav>
    </header>


    <!-- Form -->
    <div class="contenedor-form">
        <div class="formulario">

            <form action="contactenos.php" method="POST">
                <div class="alert alert-secondary" role="alert">
                    <p class='finalizado'> </p>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nombre</label>
                    <input name="Nombre" type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="Juancho">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Apellido</label>
                    <input name="Apellido" type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="Juancho">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Telefono</label>
                    <input name="Telefono" type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="Juancho">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Dirección e-mail</label>
                    <input name="Email" type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="Jancho_perez@correo.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Mensaje</label>
                    <textarea name="Mensaje" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" id="enviar" name="Enviar"
                    class="btn btn-outline-info enviar boton-largo color-blanco">Enviar
                    datos</button>

            </form>
            <?php
if (isset($_REQUEST['Enviar'])) {
  require_once "PHP/conexion.php";

  extract($_REQUEST);
  $query = "INSERT INTO contacto(Nombre,Apellido,Telefono,Email,Mensaje) VALUES ('$Nombre', '$Apellido', '$Telefono', '$Email','$Mensaje');";
  //se prepara la consulta
  $consulta = $c->prepare($query);
  
  $r = $consulta->execute();
  //echo $r;
  if ($r == 1) {
    echo '<script>
    $(".finalizado").text("Se Ha Creado un Usuario");
</script>';
  }
}
?>
        </div>

        <div class="img" style="margin-top:6%; height:100%; width: 100%;">
            <img src="IMG\contactenos.jpg" heigth='100%' width='100%' alt="imagen de contacto">
        </div>

    </div>


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
                </li>
            </ul>
        </div>
        <div class="attribution">
            Challenge by
            <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>. Coded by
            <a href="https://github.com/soadtech" target="_blank">Pepito perez</a>.
        </div>
    </footer>

    </div>
</body>



</html>