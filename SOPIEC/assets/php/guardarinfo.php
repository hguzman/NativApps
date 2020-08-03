<?php
// Incluir archivo de base de datos
include("db.php");
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

    // Query
    $query = "INSERT INTO usuarios(cedula,area,primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,email,contrasena,rol) VALUES ('$cedula','$area','$primer_nombre','$segundo_nombre','$primer_apellido','$segundo_apellido','$email','$contrasena','$rol')";

    //realizas la consulta en al base de datos
    $resultado = mysqli_query($conexion, $query);

    if (!$resultado) {
        die('Algo anda mal');
    }
    //mostrar mensaje
    $_SESSION['mensajeUsuario'] = '¡Nuevo usuario registrado de forma exitosa😀!';
    $_SESSION['tipo_mensaje'] = 'success';
    header('Location: ../../usuarios.php');
}

