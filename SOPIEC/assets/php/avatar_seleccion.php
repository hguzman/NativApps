<?php
require("db.php");
require("val_session_admin.php");

/* establecer variable clave */
$user = $_SESSION['username'];

$update = "UPDATE usuarios,avatares SET avatar_id = 1 WHERE avatar_id = ID AND user = $user";
mysqli_query($conexion, $update);

/* Eliminar imagenes anteriormente guardadas  */
$seleccionar = "SELECT * FROM avatares WHERE user = $user";
$seleccion = mysqli_query($conexion, $seleccionar);
$sel = mysqli_fetch_array($seleccion);
$eliminar = "DELETE FROM avatares WHERE user = $user";
mysqli_query($conexion, $eliminar);
/* Eliminar imagenes anteriormente guardadas FIN*/

/* imagen guardada */
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name'])); 

/* guardar imagen en la BD */
$query = "INSERT INTO avatares(imagen, user) VALUES('$imagen', $user)";
$guardada = mysqli_query($conexion, $query); 
/* guardar imagen en la BD FIN */
/* liberar datos de la anterior consulta */

mysqli_free_result($seleccion);

$seleccionar2 = "SELECT ID FROM avatares ORDER BY ID DESC LIMIT 1;";
$query2 = mysqli_query($conexion,$seleccionar2);

$avatar = mysqli_fetch_array($query2);
$id = $avatar["ID"];


$update2 = "UPDATE usuarios,avatares SET avatar_id = $id WHERE ID = avatar_id";
$resultado2 = mysqli_query($conexion, $update2);
echo "esta es la actual cosa tomada", $id;

mysqli_close($conexion);
/* header("location: ../../perfil.php"); */
?>