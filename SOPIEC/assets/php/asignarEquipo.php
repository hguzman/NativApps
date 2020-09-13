<?php 
include("db.php");
if (isset($_POST['cedula']) && isset($_POST['serial'])) {
    $cedula = $_POST['cedula'];
    $serial = (string)$_POST['serial'];
    $result = $conexion->query(
        "UPDATE equipos
    SET cedula_FK = '$cedula' WHERE serial = '$serial'");
    if ($result) {
        $data ['status'] = 'ok';
        $data ['mensaje'] = '<div class="alert alert-success" ><strong>Enhorabuena! </strong>Asignacion completada</div>';
    } else {
             $data ['status'] = 'error';
         $data ['mensaje'] = '<div class="alert alert-danger"><strong>Error </strong>Error, no se pudo completar la asiganción</div> ';
    }
    echo json_encode($data);
}

?>