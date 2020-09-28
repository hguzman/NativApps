<?php
session_start();
require_once("db.php");
$pass = $_POST['passw'];

$verificacion = "SELECT contrasena FROM usuarios WHERE rol = 'admin' AND contrasena = '$pass'";
$resultado = mysqli_query($conexion, $verificacion);
$contar = mysqli_num_rows($resultado);

if ($contar < 1) {

    header("location: incorrecto.php");
}



if (!empty($_FILES['manualu']['name'])) {

    $_FILES['manualu']['name'] = 'manual_usuario.pdf';
    move_uploaded_file($_FILES['manualu']['tmp_name'], "../downloads/" . $_FILES['manualu']['name']);
    echo "el archivo se ha subido"; ?>
    
<?php
} else { echo "no se ha seleccionado archivo";

}
    if (!empty($_FILES['manualt']['name'])) {

        $_FILES['manualt']['name'] = 'manual_tecnico.pdf';


        move_uploaded_file($_FILES['manualt']['tmp_name'], "../downloads/" . $_FILES['manualt']['name']);
        echo "el archivo se ha subido";
    } else {

     echo "no se ha seleccionado archivo";
    }


header("location: ../../manuales.php");

?>