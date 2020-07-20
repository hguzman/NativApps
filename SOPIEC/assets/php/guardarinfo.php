<?php
// Incluir archivo de base de datos
include("db.php");
// Funcion para el botón enviar
if (isset($_POST['registrar'])) {
    $cedula = $_POST['cedula'];
    $area = $_POST['area'];
    $primer_nombre = $_POST['primer_nombre'];
    $segundo_nombre = $_POST['segundo_nombre'];
    $primer_apellido= $_POST['primer_apellido'];
    $segundo_apellido= $_POST['segundo_apellido'];
    $email= $_POST['email'];
    $contrasena= $_POST['contrasena'];


    // Validaciones

    if ($cedula == "" || $nombre == "" || $area == "" || $email == "" || $contrasena == ""){
        $_SESSION ['mensaje'] = 'Por favor, llene los campos requeridos';
        $_SESSION ['tipo_mensaje'] = 'danger';

        $_POST['enviar'];
        header('Location: ../nuevousuario.php');   
        die();
    }

    // Query
    $query = "INSERT INTO usuarios(cedula,area,primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,email,contrasena) VALUES ('$cedula','$area','$primer_nombre','$segundo_nombre','$primer_apellido','$segundo_apellido','$email','$contrasena')";

    //realizas la consulta en al base de datos
    $resultado = mysqli_query($conexion, $query);

    if (!$resultado) {
        die('Algo anda mal');
    }
    //mostrar mensaje
    $_SESSION['mensaje'] = '¡Listo, Tu mensaje fue enviado 😀!';
    $_SESSION['tipo_mensaje'] = 'success';
    header('Location: ../nuevousuario.php');   
}
