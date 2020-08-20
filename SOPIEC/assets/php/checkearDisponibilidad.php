<?php
require('db.php');
sleep(1);
//Validar si la cedula existe en la BD
if (isset($_POST['cedula'])) {
    $cedula = (string)$_POST['cedula'];

    $result = $conexion->query(
        'SELECT  cedula
        FROM usuarios WHERE cedula = "' . strtolower($cedula) . '"'
    );
    if ($result->num_rows > 0) {
    //   En caso de que la cedula esté registrada
        $data ['status'] = 'error';
        $data ['mensaje'] = '<div class="alert alert-danger"><strong>Cedula registrada!</strong> Esta cedula ya se encuentra registrada.</div>';
    } else {
        //En caso de que no esté registrada
        $data ['status'] = 'ok';
        $data ['mensaje'] = '<div class="alert alert-success" ><strong>Enhorabuena!</strong>Esta cedual está disponible.</div>';
    }
    // Conversión a Json
    echo json_encode($data);
}
// Validacion Email
if (isset($_POST['email'])) {
    $email = (string)$_POST['email'];
    $result = $conexion->query(
        'SELECT cedula FROM usuarios WHERE email = "' . strtolower($email) . '"'
    );
    if ($result->num_rows > 0) {
        // echo '<div id="disponibilidad" class="alert alert-danger" value="no"><strong>Correo registrado!</strong> Este correo ya se encuentra registrado.</div>';
        $data ['statusEmail'] = 'error';
        $data ['mensajeEmail'] = '<div  class="alert alert-danger"><strong>Correo registrado!</strong> Este correo ya se encuentra registrado.</div>';
    } else {
        // echo '<div id="disponibilidad" class="alert alert-success" value="si"><strong>Enhorabuena!</strong>Este correo está disponible.</div>';
        $data ['statusEmail'] = 'ok';
        $data ['mensajeEmail'] = '<div class="alert alert-success" ><strong>Enhorabuena!</strong>Este correo está disponible.</div>';
    }
    echo json_encode($data);
}
   
//Validar si el serial existe en la BD
if (isset($_POST['serial'])) {
    $serial = (string)$_POST['serial'];

    $result = $conexion->query(
        'SELECT * FROM equipos WHERE serial = "' . strtolower($serial) . '"'
    );

    if ($result->num_rows > 0) {
        echo '<div id="disponibilidad" class="alert alert-danger" value="no"><strong>Serial registrado!</strong> Este serial ya se encuentra registrado.</div>';
    } else {
        echo '<div id="disponibilidad" class="alert alert-success" value="si"><strong>Enhorabuena!</strong>Este serial está disponible.</div>';
    }
}