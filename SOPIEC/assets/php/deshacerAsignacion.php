<?php 

require_once("val_session_admin.php");
require_once("db.php");

$cedula = $_GET['cedula'];

$registros = mysqli_query($conexion, "update equipos set cedula_FK=0 where cedula_FK='$_REQUEST[cedula]'") or
die("Problemas en el select:" . mysqli_error($conexion));

header('Location: ../../equiposAsignados.php');

mysqli_close($conexion);
// ?>