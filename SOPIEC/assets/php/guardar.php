<?php
require("db.php");
session_start();

$rol = $_SESSION["rol"];
/* establecer variable clave */
$user = intval($_SESSION['username']);

$update = "UPDATE usuarios,avatares SET avatar_id = 1 WHERE avatar_id = ID AND cedula = $user";
mysqli_query($conexion, $update);

/* Eliminar imagenes anteriormente guardadas  */
$eliminar = "DELETE FROM avatares WHERE user = $user";
mysqli_query($conexion, $eliminar);
/* Eliminar imagenes anteriormente guardadas FIN*/

/* imagen a guardar */
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name'])); 

/* guardar imagen en la BD */
$query = "INSERT INTO avatares(imagen, user) VALUES('$imagen', $user)";
$guardada = mysqli_query($conexion, $query); 
/* guardar imagen en la BD FIN */

/* seleccionar la ultima imagen guardada */
$seleccionar2 = "SELECT * FROM avatares ORDER BY ID DESC LIMIT 1;";
$query2 = mysqli_query($conexion,$seleccionar2);
/* seleccionar la ultima imagen guardada FIN*/

/* extraer el ID de la ultima imagen guardada */
$avatar = mysqli_fetch_array($query2);
$id = $avatar["ID"];
/* extraer el ID de la ultima imagen guardada FIN */

/* Actualizar la imagen guardada como avatar */
$update2 = "UPDATE usuarios,avatares SET avatar_id = $id WHERE cedula = '$user'";
$resultado2 = mysqli_query($conexion, $update2);
/* Actualizar la imagen guardada como avatar FIN */

echo $id, $user;

if ($rol == "user") {
    header("location: ../../vista_usuario.php");
} else{
if ($rol == "admin") {
        header("location: ../../perfil.php");        
    }
};


?>