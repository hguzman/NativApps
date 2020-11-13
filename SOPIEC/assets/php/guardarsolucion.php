<?php
// Incluir archivo de base de datos
require_once("db.php");
require_once("../php/val_session_admin.php");
// Funcion para el botón enviar
sleep(1);
if (isset($_POST['responder'])) {
    $id = $_POST['id']; 
    $nombre = $_POST['nombre']; // Con esta variable ya tenemops el nombre del usuario 2
    $email = $_POST['email'];
    $estado = $_POST['estado'];
    $asunto = $_POST['asunto'];
    $solucion = $_POST['solucion'];
    $estado = $_POST['estado'];
    

    //notificaciones
    $consulta = mysqli_query($conexion, "SELECT primer_nombre,rol FROM usuarios WHERE cedula ='$sesion'");
    $co = mysqli_fetch_array($consulta);
     $usuario1=$co['primer_nombre'];
     $usuario2= $nombre;
     $rol_not = $co['rol'];
     $email_user = $email;
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

        $notificacion= mysqli_query($conexion, "INSERT INTO notificaciones (usuario1,usuario2,rol_not,email_user,tipo,leido,fecha,id_pub)VALUES ('$usuario1','$usuario2','$rol_not','$email_user','ha respondido tu ticket \# ',0,now(),'$id')"); 

        //  die("Problemas en el select:" . mysqli_error($conexion));
}
    //$_session["mensaje"] = "finalizado";
    // echo "<script>
    // alert('Ticket enviado'); 
    // </script>";
    header("location: ../../mostrartickets.php");
    


?>