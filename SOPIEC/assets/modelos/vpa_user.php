<?php
$resultados = mysqli_query($conexion, "select * from usuarios WHERE cedula = '$sesion' ") or
        die("Problemas en el select:" . mysqli_error($conexion));
    $user = mysqli_fetch_array($resultados);
    $pass = $user['contrasena'];
$id = $user['cedula'];

if ($id == $pass) {
    header("location: primer-acceso_user.php");
} else {
    # code...
}


?>