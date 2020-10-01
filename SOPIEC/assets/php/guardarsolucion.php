<?php
// Incluir archivo de base de datos
require_once("db.php");
// Funcion para el botón enviar
sleep(1);
if (isset($_POST['responder'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $estado = $_POST['estado'];
    $asunto = $_POST['asunto'];
    $solucion = $_POST['solucion'];
    $estado = $_POST['estado'];

    mysqli_query($conexion, "
update ticket set 
nombre='$nombre', 
email='$email', 
asunto='$asunto', 
estado='$estado',
solucion='$solucion',
estado='$estado'
where id='$id'") or
        die("Problemas en el select:" . mysqli_error($conexion));
}
    //$_session["mensaje"] = "finalizado";
    // echo "<script>
    // alert('Ticket enviado'); 
    // </script>";
    header("location: ../../mostrartickets.php");
    


?>