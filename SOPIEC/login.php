<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Sing in</title>

</head>

<body id="body">
    <!-- Contendor principal -->
    <div class="container-fluid" id="contenedor">
        <!-- Imagen y slogan -->

        <head id="cabecera">
            <div class="col-lg-12 text-center">
                <img src="assets/img/NativApps logo.png" class="rounded rounded-circle responsive-img " alt="imagen de NativApps" width="75px">
                <h3>NativApps</h3>
                <h4>Login to you account</h4>
        </head>
        <hr>
        <!-- Formulario -->
        <form id="formulario" class="formulario" method="POST" action="assets/php/validacion.php">
            <div class="row">
                <div class="col-lg-11">
                    <!-- inputs -->
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="CC">

                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="verificacion">
                    <label class="form-check-label" for="verificacion">Remember me on this computer</label>
                </div>
            </div>

            <div class="col-lg-12 ">
                <button type="submit" class="btn btn-primary btn-lg btn-block" id="btn">Sign in</button>
            </div>
            <br>
            <a class="nav-item" href="#">Forgot password?</a>
        </form>
    </div>

 


    







    <!--Archivos de javascript -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!--Archivos de javascript-->
<?php

if (isset($_SESSION['alerta']) && $_SESSION['alerta'] == "empty") {
    echo '<script src="assets/js/campos-vacios.js"></script>';

session_destroy();
} else {
    if (isset($_SESSION['alerta']) && $_SESSION['alerta'] == "incorrect") {
        echo '<script src="assets/js/campos-incorrectos.js"></script>';
        session_destroy();
}
}

?>


</body>

</html>