<?php 
require_once("db.php");
$sesion = $_SESSION['username'];
$cc = $sesion;
$cc= "SELECT cedula FROM usuarios WHERE cedula=''";
// $foto_admin = addslashes(file_get_contents($_FILES['foto_admin']['tmp_name']));
// $query= "INSERT INTO usuarios (foto_admin) VALUES ('$foto_admin') WHERE cedula='$sesion'";
// $resultado = $conexion->query($query);
// $foto =$_FILES["foto_admin"]["name"];
// $ruta =$_FILES ["foto_admin"]["tmp_name"];
// $destino = "../img/perfiles/".$foto;
// $copy ($ruta,$destino);

// mysqli_query($conexion, "insert into usuarios (foto_admin) values ('$destino')");
// echo "ya";
mysqli_query($conexion, "
update usuarios set 
foto_admin ='$destino'
where cedula='$cc'") or
        die("Problemas en el select:" . mysqli_error($conexion));


// echo '<img src="<php echo $foto_admin?>" class="img-responsive" />'
// if ($resultado){
// echo "Imagen guardada";
// }else{
// echo " Error no se guardó la imagen";
// }

?>