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
    // $email = $_POST['email'];
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
            segundo_apellido='$segundo_apellido'
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

if (isset($_POST['cambiarEmail'])) {

    $contrasenaActual = $_POST['contrasenaActual'];
    $cedula = $reg['cedula'];
    $nuevoEmail = $_POST['nuevoEmailAdmin'];
   

    $consulta ="SELECT * from usuarios WHERE  email = '$nuevoEmail'";
    $res = mysqli_query($conexion, $consulta); 
    $regs = mysqli_fetch_array($res);
    $filas = mysqli_num_rows($res);

    if ($filas> 0){
        die(header("location: errorEmail.html")."Error". mysqli_error($conexion));}
       
    if($contrasenaActual != $reg['contrasena']){
        
        echo "
        <div class='container'>
        <div class='alert alert-danger' role='alert'>
        <h1>DATOS NO ACTUALIZADOS!</h1>
        <h4>Contraseña incorrecta</h4>
        <p>Serás redireccionado en <span id='counter'>5</span> segundo(s).</p>
        <a class='small' onclick='history.back()' style='    cursor: pointer;
        text-decoration: none;
        color: #599fe6; ;'>Volver</a>
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
           email='$nuevoEmail'
            where cedula='$cedula'") or
                    die("Problemas en el select:" . mysqli_error($conexion));

                    echo "<div class='container'>
                    <div class='alert alert-success' role='alert'>
                        <h1>DATOS ACTUALIZADOS CORRECTAMENTE</h1>
                        <h4>Tus datos han sido actualizado sde manera exitosa</h4>
                        <p>Serás redireccionado en <span id='counter'>3</span> segundo(s).</p>
                        <a class='small' onclick='history.back()' style='    cursor: pointer;
                        text-decoration: none;
                        color: #599fe6; ;'>Volver</a>
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