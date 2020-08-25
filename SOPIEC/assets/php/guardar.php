<?php
require("db.php");

$nombre = $_POST['nombre'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$query = "INSERT INTO avatares(nombre, imagen) VALUES('$nombre', '$imagen')";
$registro = mysqli_query($conexion, $query); 

header("location: ../../perfil.php")
?>