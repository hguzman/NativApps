<?php
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Toastr Style -->
  
  <link rel="shortcut icon" href="assets\img\SOPIEC.ico" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>Recover password</title>


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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>
  <div class="container-fluid"> 
    
  
  <form class="form-signin" method="POST" action="assets/php/validacion.php">
    <div class="text-center mb-4">
      <img class="mb-4" src="assets/img/SOPIEC.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Recover password</h1>
      

      <p>Before continuing, we must verify that it is you. 
        <br>
        Please enter the email registered in SOPIEC
      </p>
    </div>

    <div class="form-label-group">
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required>
      <label for="inputCC">Email</label>
    </div>

    <div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted text-center"><a href="login.php">I remenber the password</a> </p>
    </div>

    <div class="invisible" style="border: solid 1px #000;" ;>
      <input id="alerta-login" type="text" value="">
    </div>
  </form>

<div class="d-flex justify-content-center row text-center">

  <div>
   <br>
    <a href="../index.php"><i style="color: royalblue; font-size: 200%;" class="fas fa-briefcase"></i><br> DVLeasy</a>
  </div>
</div>

  <!--Archivos de javascript -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  </div>
  <!--Archivos de javascript-->
</body>

</html>