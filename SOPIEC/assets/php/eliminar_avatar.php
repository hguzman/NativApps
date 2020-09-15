<?php
session_start();
require_once("db.php");

$sesion = $_SESSION['username'];
$id =  $_GET['id'];

$delete = "DELETE FROM avatares WHERE ID = $id";
$update = "UPDATE usuarios,avatares SET avatar_id = 1 WHERE avatar_id = ID AND user = $sesion";


mysqli_query($conexion, $update);
$resultado = mysqli_query($conexion, $delete);

header("location: ../../perfil.php");
?>