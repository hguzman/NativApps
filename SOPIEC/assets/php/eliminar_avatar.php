<?php
session_start();
require_once("db.php");

$sesion = $_SESSION['username'];
$rol = $_SESSION["rol"];
$id =  $_GET['id'];

$delete = "DELETE FROM avatares WHERE ID = $id";
$update = "UPDATE usuarios,avatares SET avatar_id = 1 WHERE avatar_id = ID AND cedula = $sesion";


mysqli_query($conexion, $update);
$resultado = mysqli_query($conexion, $delete);

if ($rol == "user") {
    header("location: ../../vista_usuario.php");
} else{
if ($rol == "admin") {
        header("location: ../../perfil.php");        
    }
};


?>