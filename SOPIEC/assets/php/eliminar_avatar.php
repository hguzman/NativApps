<?php
require_once("db.php");

$sesion = $_SESSION['username'];
$id =  $_GET['id'];

$delete = "DELETE FROM avatares WHERE ID = $id";
$update = "UPDATE usuarios,avatares SET avatar_id = '1' WHERE ID = avatar_id AND cedula = $sesion";


$resultado = mysqli_query($conexion, $delete);

header("location: ../../perfil.php");
?>