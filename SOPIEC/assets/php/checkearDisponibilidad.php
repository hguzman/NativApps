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
        $data ['mensaje'] = '<div class=" alert-danger" style=" margin-top: 5px;
        border: 1px solid transparent;
        border-radius: 5px"><strong>Cedula registrada!</strong> Esta cedula ya se encuentra registrada.</div>';
    } else {
        //En caso de que no esté registrada
        $data ['status'] = 'ok';
        $data ['mensaje'] = '<div class=" alert-success" style=" margin-top: 5px;
        border: 1px solid transparent;
        border-radius: 5px"><strong>Enhorabuena!</strong>Esta cedula está disponible.</div>';
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
        $data ['mensajeEmail'] = '<div  class=" alert-danger" style=" margin-top: 5px;
        border: 1px solid transparent;
        border-radius: 5px" ><strong>Correo registrado!</strong> Este correo ya se encuentra registrado.</div>';
    } else {
        // echo '<div id="disponibilidad" class="alert alert-success" value="si"><strong>Enhorabuena!</strong>Este correo está disponible.</div>';
        $data ['statusEmail'] = 'ok';
        $data ['mensajeEmail'] = '<div class=" alert-success" style=" margin-top: 5px;
        border: 1px solid transparent;
        border-radius: 5px" ><strong>Enhorabuena!</strong>Este correo está disponible.</div>';
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
        echo '<div id="disponibilidad" class="alert-danger" value="no" style=" margin-top: 5px;
        border: 1px solid transparent;
        border-radius: 5px" ><strong>Serial registrado!</strong> Este serial ya se encuentra registrado.</div>';
    } else {
        echo '<div id="disponibilidad" class="alert-success" value="si" style=" margin-top: 5px;
        border: 1px solid transparent;
        border-radius: 5px" ><strong>Enhorabuena!</strong>Este serial está disponible.</div>';
    }
}