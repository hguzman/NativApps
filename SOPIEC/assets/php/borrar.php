
<?php

require_once("db.php");

$cedula = $_GET['cedula'];


$registros = mysqli_query($conexion, "select cedula from usuarios where cedula
= '$cedula' ") or
die("Problemas en el select:" . mysqli_error($conexion));

if ($reg = mysqli_fetch_array($registros)) {   
mysqli_query($conexion, "delete from usuarios where cedula='$_REQUEST[cedula]'") or
  die("Problemas en el select:" . mysqli_error($conexion));
// echo "<script type='text/javascript'>
//         alert('Registro borrado exitosamente');
//         window.location.href='../../usuarios.php';
//         </script>";
//mostrar mensaje
$_SESSION['mensaje'] = '¡Usuario eliminado de la base de datos!';
$_SESSION['tipo_mensaje'] = 'danger';
header('Location: ../../usuarios.php');
} else {
echo "No existe un usuario con este ID/Cedula.";
}
mysqli_close($conexion);


?>




