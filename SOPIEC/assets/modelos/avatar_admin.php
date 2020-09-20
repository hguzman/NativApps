<li class="text-center user-image-back">
    <!-- recuperar imagen de la base de datos -->
    <?php

    $query = "SELECT imagen from avatares, usuarios where avatar_id = ID and cedula = $sesion";

    $registros_a = mysqli_query($conexion, $query) or
        die("Problemas en el select:" . mysqli_error($conexion));
    $reg_a = mysqli_fetch_array($registros_a)
    ?>
    <?php


    $_SESSION["imagen"] = base64_encode($reg_a['imagen']);
    $imagen =  $_SESSION["imagen"];
    ?>

    <a href="perfil.php"><img src="data:image/jpg;base64, <?php echo  $imagen ?>" height="150px" width="100%" class="rounded-circle"></td></a>
</li>