<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Toastr Style -->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>Sing in</title>


  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="assets\css\bootstrap.min.css">

  <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="assets/css/floating-labels.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>
  <form class="form-signin" method="POST" action="assets/php/validacion.php">
    <div class="text-center mb-4">
      <img class="mb-4" src="assets/img/NativApps logo.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">NativApps</h1>
      <p>Login to you account</p>
    </div>

    <div class="form-label-group">
      <input type="text" name="username" id="inputCC" class="form-control" placeholder="CC" required 
      pattern="[0-9!?-]{1,15}" title="Sólo puedes ingresar numeros del 0-9">
      <label for="inputCC">CC</label>
    </div>

    <div class="form-label-group">
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <label for="inputPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted text-center"><a href="#">forgot password?</a> </p>
    </div>

    <div class="invisible" style="border: solid 1px #000;" ;>
      <input id="alerta-login" type="text" value="">
    </div>
  </form>


  <!--Archivos de javascript -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


  <!--Archivos de javascript-->
  <?php

  if (isset($_SESSION['alerta']) && $_SESSION['alerta'] == "empty") {
    echo '<script>
    $(document).ready(function(){
        $("#alerta-login").val("vacio");

    });
</script>';

    echo '<script src="assets/js/alertas-login.js"></script>';

    $_SESSION['alerta'] = "";
  } else {
    if (isset($_SESSION['alerta']) && $_SESSION['alerta'] == "incorrect") {
      echo '<script>
        $(document).ready(function(){
            $("#alerta-login").val("incorrecto");
    
        });
    </script>';

      echo '<script src="assets/js/alertas-login.js"></script>';

      $_SESSION['alerta'] = "";
    }
  }


  ?>
</body>

</html>