<?php
require_once("db.php");

 $nombre = $_POST['nombre'];
 $apellido = $_POST['apellido'];
 $comentario= $_POST['comentario'];
 $fecha = date("Y")."-".date("m")."-".date("d");

echo "$nombre, $apellido, $comentario, $fecha";


$ingresar = "INSERT INTO opinion(nombre, apellido, comentario, fecha)VALUES('$nombre',' $apellido', '$comentario', '$fecha')";

$resultado =  mysqli_query($conexion, $ingresar);

if (empty($resultado)) {
    echo "error";
} else {
   header("location: ../opiniones.php?validado=yes");
};


?>