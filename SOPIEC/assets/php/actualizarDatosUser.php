<?php
require_once("val_session_user.php");
?>
<?php
// Incluir archivo de base de datos
require_once("db.php");
// Funcion para el botón enviar
if (isset($_POST['actualizarDatosUser'])) {
    $cedula = $_POST['cedula'];
    $area = $_POST['area'];
    $primer_nombre = $_POST['primer_nombre'];
    $segundo_nombre = $_POST['segundo_nombre'];
    $primer_apellido = $_POST['primer_apellido'];
    $segundo_apellido = $_POST['segundo_apellido'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    


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
}

header("location: ../../vista_usuario.php");
?>