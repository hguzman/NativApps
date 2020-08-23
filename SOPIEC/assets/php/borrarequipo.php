<?php

require_once("db.php");

$serial = $_GET['serial'];


$registros = mysqli_query($conexion, "select serial from equipos where serial
= '$serial'") or
  die("Problemas en el select:" . mysqli_error($conexion));

if ($reg = mysqli_fetch_array($registros)) {
  mysqli_query($conexion, "delete from equipos where serial='$_REQUEST[serial]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
    
  header('Location: ../../equipos.php');
} else {
  echo "No existe un equipo con este serial.";
}
mysqli_close($conexion);
?>