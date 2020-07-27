<?php
// Incluir archivo de base de datos
require_once("db.php");
// Funcion para el botón enviar
if (isset($_POST['registrar'])) {
    $serial = $_POST['serial'];
    $marca = $_POST['marca'];
    $nombre = $_POST['nombre'];
    $tipo_equipo = $_POST['tipo_equipo'];
    $modelo_equipo = $_POST['modelo_equipo'];
    $procesador = $_POST['procesador'];
    $ram = $_POST['ram'];
    $disco_duro = $_POST['disco_duro'];
    $sistema_operativo = $_POST['sistema_operativo'];


    // Validaciones

    if ($serial == "" || $marca == "" || $nombre == "" || $tipo_equipo == "" || $modelo_equipo == "" || $procesador == ""  || $ram == "" || $disco_duro == "" || $sistema_operativo == "") {

        $_SESSION ['mensaje'] = 'Por favor, llene los campos requeridos';
        $_SESSION ['tipo_mensaje'] = 'danger';
        
        $_POST['registrar']; 
        
        die();
        }

    // if (!$resultado) {
    //     die('Algo anda mal');
    // }

    mysqli_query($conexion, "
update equipos set 
serial='$serial',
marca='$marca', 
nombre='$nombre', 
tipo_equipo='$tipo_equipo', 
modelo_equipo='$modelo_equipo', 
procesador='$procesador',
ram='$ram',
disco_duro='$disco_duro',
sistema_operativo='$sistema_operativo'

where serial='$serial'") or
        die("Problemas en el select:" .mysqli_error($conexion));

    //mostrar mensaje
    $_SESSION['mensaje'] = 'equipo actualizado de forma exitosa 😀!';
    $_SESSION['tipo_mensaje'] = 'success';
    header('Location: ../../equipos.php');
    //     echo "<script type='text/javascript'>
    // alert('Registro actualizado exitosamente exitosamente');
    // window.location.href='../../usuarios.php';
    // /script>";
  }
?>