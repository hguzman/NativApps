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
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal" style="color: whitesmoke;">
                    DVLeasy
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <h5><strong> Nombre completo de la empresa</strong></h5>
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
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="productos.html">Productos</a>
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

        <div class="img" style="margin-top:2%;margin-right:6%;margin-bottom:4%; height:80%; width: 80%;">
        <br>
            <img src="IMG\contactenos.jpg" heigth='80%' width='80%' alt="imagen de contacto">
            <br>
            <hr>
            <h1>Contactenos:</h1>
            <h5>Fijo: 3651234.</h5>
            <h5>Telefono: 3002881234.</h5>
            <h5>___________________________</h5>
            <h5>Direccion: Calle 94 #51b-73.</h5>
            <h5>Centro empresarial buro51 - oficina 607.</h5>
            <h5>Barranquilla -  Colombia.</h5>
        </div>
        

    </div>


    <!-- Pie de pagina -->
    <footer>
        <div class="container footer">
            <h2><a href="index.php"> DVLeasy </a></h2>

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
            <a href="https://github.com/soadtech" target="_blank">Pepito perez</a>.
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"
        integrity="sha512-M+hXwltZ3+0nFQJiVke7pqXY7VdtWW2jVG31zrml+eteTP7im25FdwtLhIBTWkaHRQyPrhO2uy8glLMHZzhFog=="
        crossorigin="anonymous"></script>
    </div>
     <!--Archivos de javascript -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <!--Archivos de javascript-->
</body>



</html>