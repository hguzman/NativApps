<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        alert(<?php echo ("Las variables son" + $passi + $useri); ?>);
    </script>

    <?php

    $useri = $_POST['cedula'];
    $userc = "1001823659";

    $passi = $_POST['contraseña'];
    $passc = "password";

    if ($passi == "" || $useri == "") {

        echo ('<script>
        alert("Los campos estan vacios");
        location.href= "../login.html";
        </script>');
    };
    
    if ($passi == $passc && $useri == $userc) {
        echo ('<script>
    alert("Se ha logueado correctamente");
    location.href= "2.php";
    </script>');
    
    };
    
    if ($passi != $passc || $useri != $userc) {
        echo ('<script>
        alert("Los campos son incorrectos");
        
        </script>');
    };


    ?>
</body>

</html>