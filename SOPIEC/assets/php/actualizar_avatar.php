<?php
require_once("db.php");

$sesion = $_SESSION['username'];
$id =  $_GET['id'];

$update = "UPDATE usuarios,avatares SET avatar_id = '$id' WHERE ID = avatar_id AND cedula = $sesion";


$resultado = mysqli_query($conexion, $update);

header("location: ../../perfil.php")
?>