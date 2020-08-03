<?php
// Incluir archivo de base de datos
require_once("db.php");
// Funcion para el botón enviar
if (isset($_POST['registrar'])) {
    $cedula = $_POST['cedula'];
    $area = $_POST['area'];
    $primer_nombre = $_POST['primer_nombre'];
    $segundo_nombre = $_POST['segundo_nombre'];
    $primer_apellido = $_POST['primer_apellido'];
    $segundo_apellido = $_POST['segundo_apellido'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    $rol = $_POST['rol'];



    // Validaciones
    if ($cedula == "" || $primer_nombre == "" || $area == "" || $email == "" || $contrasena == "" || $primer_nombre == "") {

        $_SESSION['mensaje'] = 'Por favor, llene los campos requeridos';
        $_SESSION['tipo_mensaje'] = 'danger';
        $_POST['registrar'];

        header('Location: ../../nuevousuario.php');
        die();
    }

    // if (!$resultado) {
    //     die('Algo anda mal');
    // }

    mysqli_query($conexion, "
update usuarios set 
area='$area',
primer_nombre='$primer_nombre', 
segundo_nombre='$segundo_nombre', 
primer_apellido='$primer_apellido', 
segundo_apellido='$segundo_apellido', 
email='$email',
contrasena='$contrasena',
rol='$rol'
where cedula='$cedula'") or
        die("Problemas en el select:" . mysqli_error($conexion));

    //mostrar mensaje
    $_SESSION['mensajeUsuario'] = 'Los registros del usuario con C.C: '.$cedula.' han sido actualizados exitosamente!';
    $_SESSION['tipo_mensaje'] = 'success';
    header('Location: ../../usuarios.php');
    //     echo "<script type='text/javascript'>
    // alert('Registro actualizado exitosamente exitosamente');
    // window.location.href='../../usuarios.php';
    // </script>";
}
