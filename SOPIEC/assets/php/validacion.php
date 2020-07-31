<?php
session_start();
$user = $_POST['username'];
$pass = $_POST['password'];

$conexion = mysqli_connect("localhost", "root", "", "sopiecdb");
$consulta = "SELECT * FROM usuarios WHERE cedula = '$user' AND contrasena = '$pass'";
$resultado = mysqli_query($conexion, $consulta);
$reg = mysqli_fetch_array($resultado);
$filas = mysqli_num_rows($resultado);

$rol = $reg['rol'];
$cedula = $reg['cedula'];
$area = $reg['area'];
$nombre1 = $reg['primer_nombre'];
$nombre2 = $reg['segundo_nombre'];
$apellido1 = $reg['primer_apellido'];
$apellido2 = $reg['segundo_apellido'];
$correo = $reg['email'];
$contraseña = $reg['contrasena'];


/* if (isset($rol)) {
    echo $rol, $cedula, $nombre1, $area, $nombre2, $apellido1, $apellido2, $correo, $contraseña; 
} else {
    echo "no funciona";
} */

if ($filas > 0 && $rol == "admin") {
    $_SESSION['username'] = $user;
    $_SESSION['login'] = "administrador";
    $_SESSION['rol'] = $rol;
    header("location: ../../index.php");
} else {
    if ($filas > 0 && $rol == "user") {
        $_SESSION['username'] = $user;
        $_SESSION['login'] = "usuario";
        $_SESSION['rol'] = $rol;
        header("location: ../../index_user.php");
    } else {
        // Redireccion al login.html
        header("Location:../../login.html");
    }
}

mysqli_free_result($resultado);
mysqli_close($conexion);