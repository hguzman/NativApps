<?php
// Incluir archivo de base de datos
require_once("db.php");
// Funcion para el botón enviar
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
    $query = "INSERT INTO ticket(`nombre`,`email`,`mensaje`,`asunto`) VALUES ('$nombre','$email','$mensaje','$asunto' )";
    $resultado = mysqli_query($conexion, $query);
    $_session["mensaje"] = "finalizado";
    header("location: ../../ticket.php");


?>
