<?php
 
 $cedula = $_POST['cedula'];
 $area = $_POST['area'];
 $primer_nombre = $_POST['primer_nombre'];
 $segundo_nombre = $_POST['segundo_nombre'];
 $primer_apellido = $_POST['primer_apellido'];
 $segundo_apellido = $_POST['segundo_apellido'];
 $email = $_POST['email'];
 $contrasena = $_POST['contrasena'];

require_once("db.php");

mysqli_query($conexion, "
update usuarios set 
area='$area',
primer_nombre='$primer_nombre', 
segundo_nombre='$segundo_nombre', 
primer_apellido='$primer_apellido', 
segundo_apellido='$segundo_apellido', 
email='$email',
contrasena='$contrasena'

where cedula='$cedula'") or
die("Problemas en el select:" . mysqli_error($conexion));
echo "<script type='text/javascript'>
alert('Registro actualizado exitosamente exitosamente');
window.location.href='../../usuarios.php';
</script>";
?>

