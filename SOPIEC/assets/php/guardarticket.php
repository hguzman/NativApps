<?php
// Incluir archivo de base de datos
require_once("db.php");
// Funcion para el botón enviar
    $cedula = $_POST['cedula']; 
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    // Validaciones
    if ($nombre == "" || $email == "" || $asunto == "" || $mensaje == "" ) {
        echo ("se está metiendo en el condicional de validacion en php");
        // header('Location: ../../nuevousuario.php');
        // echo ("<script src='../js/validaciones.js'></script>"); 
        // Query
    
    };
    $query = "INSERT INTO ticket(`cedula`,`nombre`,`email`,`mensaje`,`asunto`) VALUES ('$cedula','$nombre','$email','$mensaje','$asunto' )";
    $resultado = mysqli_query($conexion, $query);

    //$_session["mensaje"] = "finalizado";
    echo "<script>
    alert('Ticket enviado'); 
    </script>";
    header("location: ../../index_user.php");


?>
