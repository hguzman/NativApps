<?php
    session_start();

    $user = $_POST['username'];
    $pass = $_POST['password'];

    $conexion = mysqli_connect("localhost", "root", "", "sopiecdb");
    $consulta = "SELECT * FROM usuarios WHERE cedula = '$user' AND contrasena = '$pass'";
    $resultado = mysqli_query($conexion, $consulta);
    
    $filas = mysqli_num_rows($resultado);


    if ($filas>0) {
    $_SESSION['username'] = $user;
        header("location: ../../index.php");
        

    } else {
        echo ("error en la autenticacion");
        echo "<a href='../../login.html'>Volver</a>";
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
    
?>