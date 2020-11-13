<head>
    <link rel="shortcut icon" href="..\img\SOPIEC.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<?php
// Incluir archivo de base de datos
require_once("db.php");
require_once("../php/val_session_user.php");
// Funcion para el botón enviar
if(isset($_POST['enviarTicket'])){
    $cedula = $_POST['cedula']; 
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    
 

    $query = "INSERT INTO ticket(`cedula`,`nombre`,`email`,`mensaje`,`asunto`) VALUES ('$cedula','$nombre','$email','$mensaje','$asunto' )";

    $resultado = mysqli_query($conexion, $query);

    if(!$resultado){
        die("Error".mysqli_error($conexion));
    }else{
        $registros = mysqli_query($conexion,"select id from ticket where mensaje='$mensaje'");
        // echo $registros;
        $reg= mysqli_fetch_array($registros);

     
 // Notificaciones
 $consulta = mysqli_query($conexion, "SELECT cedula,primer_nombre,rol FROM usuarios WHERE cedula ='$sesion'");
 $co = mysqli_fetch_array($consulta);
  $usuario1=$co['primer_nombre'];
  $usuario2= $nombre;
  $rol_not = $co['rol'];
  $email_user = $co['cedula'];
 $id = $reg['id'];
 $notificacion = mysqli_query($conexion, "INSERT INTO notificaciones (usuario1,usuario2,rol_not,email_user,tipo,leido,fecha, id_pub)VALUES ('$usuario1','$usuario2','$rol_not',' $email_user','Ha creado un ticket con id \#',0,now(),'$id')") or  die("Error notifiacaion".mysqli_error($conexion));
    
        
        echo "<div class='container'>
        <div class='alert alert-success' role='alert'>
            <div class='text-center'>
            <h1>Ticket Enviado de forma satisfacoria</h1>
            <h2>Tu ticket ha sido creado con el ID #". $reg['id']."</h2>
            <h3>Detalles del ticket # ".$reg['id'].": </h3>
            <br>
            </div>
            
            
            <div>
            <p ><span class='titulos-ticket'>Cedula:</span> $cedula</p><br>
            <p ><span class='titulos-ticket'>Nombre:</span>  $nombre</p><br>
            <p> <span class='titulos-ticket'>Email:</span> $email </p><br>
            <p ><span class='titulos-ticket'>Asunto:</span>  $asunto</p><br>
            <p ><span class='titulos-ticket'>Mensaje:</span> $mensaje</p> <br>
            
            <p>Serás redireccionado en <span id='counter'>8</span> segundo(s).</p>
        </div>
    </div>
    <script type='text/javascript'>
        function countdown() {
            var i = document.getElementById('counter');
            if (parseInt(i.innerHTML) <= 0) {
                location.href = '../../index_user.php';
            }
            i.innerHTML = parseInt(i.innerHTML) - 1;
        }
        setInterval(function () {
            countdown();
        }, 1000);
    </script>";

    

    
    }
}


?>
<div></div>