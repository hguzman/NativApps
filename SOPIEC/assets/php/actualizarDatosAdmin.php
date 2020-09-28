<head>
    <link rel="shortcut icon" href="..\img\SOPIEC.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<?php
require_once("val_session_admin.php");
?>
<?php
// Incluir archivo de base de datos
require_once("db.php");
// Funcion para el botón enviar

$registros = mysqli_query($conexion, "select * from usuarios WHERE cedula = '$sesion' ");
$reg = mysqli_fetch_array($registros);

if (isset($_POST['actualizarDatosAdmin'])) {
    $contrasenaActual = $_POST['contrasenaActual'];
    $cedula = $_POST['cedula'];
    $area = $_POST['area'];
    $primer_nombre = $_POST['primer_nombre'];
    $segundo_nombre = $_POST['segundo_nombre'];
    $primer_apellido = $_POST['primer_apellido'];
    $segundo_apellido = $_POST['segundo_apellido'];
    $email = $_POST['email'];
    // $contrasena = $_POST['contrasena'];

    if($contrasenaActual != $reg['contrasena']){  
        echo "
        <div class='container'>
        <div class='alert alert-danger' role='alert'>
        <h1>DATOS NO ACTUALIZADOS!</h1>
        <h4>Contraseña incorrecta</h4>
        <p>Serás redireccionado en <span id='counter'>5</span> segundo(s).</p>
    </div>
    </div>
    <script type='text/javascript'>
        function countdown() {
            var i = document.getElementById('counter');
            if (parseInt(i.innerHTML) <= 0) {
                location.href = '../../perfil.php';
            }
            i.innerHTML = parseInt(i.innerHTML) - 1;
        }
        setInterval(function () {
            countdown();
        }, 1000);
    </script>";
        }else{
            mysqli_query($conexion, "
            update usuarios set 
            area='$area',
            primer_nombre='$primer_nombre', 
            segundo_nombre='$segundo_nombre', 
            primer_apellido='$primer_apellido', 
            segundo_apellido='$segundo_apellido', 
            email='$email'
            where cedula='$cedula'") or
                    die("Problemas en el select:" . mysqli_error($conexion));
                    echo "<div class='container'>
                    <div class='alert alert-success' role='alert'>
                        <h1>DATOS ACTUALIZADOS CORRECTAMENTE</h1>
                        <h4>Tus datos han sido actualizado sde manera exitosa</h4>
                        <p>Serás redireccionado en <span id='counter'>3</span> segundo(s).</p>
                    </div>
                </div>
                <script type='text/javascript'>
                    function countdown() {
                        var i = document.getElementById('counter');
                        if (parseInt(i.innerHTML) <= 0) {
                            location.href = '../../perfil.php';
                        }
                        i.innerHTML = parseInt(i.innerHTML) - 1;
                    }
                    setInterval(function () {
                        countdown();
                    }, 1000);
                </script>";
        }

}

if (isset($_POST['cambiarContrasena'])) {
    $contrasenaActual1 = $_POST['contrasenaActual1'];
    $cedula = $reg['cedula'];
    $contrasenaConfirmada = $_POST['confirmContrasena'];
   

    if($contrasenaActual1 != $reg['contrasena']){
        
        echo "
        <div class='container'>
        <div class='alert alert-danger' role='alert'>
        <h1>DATOS NO ACTUALIZADOS!</h1>
        <h4>Contraseña incorrecta</h4>
        <p>Serás redireccionado en <span id='counter'>5</span> segundo(s).</p>
    </div>
    </div>
    <script type='text/javascript'>
        function countdown() {
            var i = document.getElementById('counter');
            if (parseInt(i.innerHTML) <= 0) {
                location.href = '../../perfil.php';
            }
            i.innerHTML = parseInt(i.innerHTML) - 1;
        }
        setInterval(function () {
            countdown();
        }, 1000);
    </script>";
        }else{
            mysqli_query($conexion, "
            update usuarios set 
           contrasena='$contrasenaConfirmada'
            where cedula='$cedula'") or
                    die("Problemas en el select:" . mysqli_error($conexion));

                    echo "<div class='container'>
                    <div class='alert alert-success' role='alert'>
                        <h1>DATOS ACTUALIZADOS CORRECTAMENTE</h1>
                        <h4>Tus datos han sido actualizado sde manera exitosa</h4>
                        <p>Serás redireccionado en <span id='counter'>3</span> segundo(s).</p>
                    </div>
                </div>
                <script type='text/javascript'>
                    function countdown() {
                        var i = document.getElementById('counter');
                        if (parseInt(i.innerHTML) <= 0) {
                            location.href = '../../perfil.php';
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