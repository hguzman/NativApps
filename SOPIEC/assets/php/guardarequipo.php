<?php
// Incluir archivo de base de datos
include("db.php");
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
        $_SESSION['mensaje'] = 'Por favor, llene los campos requeridos';
        $_SESSION['tipo_mensaje'] = 'danger';
        $_POST['registrar'];
        header('Location: ../../nuevoequipo.php');
        die();
    }

    // Query
    $query = "INSERT INTO `equipos` (`serial`, `marca`, `nombre`, `tipo_equipo`, `modelo_equipo`, `procesador`, `ram`, `disco_duro`, `sistema_operativo`) VALUES ('$serial', '$marca', '$nombre', '$tipo_equipo', '$modelo_equipo', '$procesador', '$ram', '$disco_duro', '$sistema_operativo')";

    //realizas la consulta en al base de datos
    $resultado = mysqli_query($conexion, $query);

    
    if (!$resultado) {
        die('Algo anda mal');
    }
    // mostrar mensaje
    $_SESSION['mensaje'] = '¡Equipo agregado a la base de datos😀!';
    $_SESSION['tipo_mensaje'] = 'success';
    header('Location: ../../equipos.php');
}