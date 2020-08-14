<?php
require('db.php');
sleep(1);
if (isset($_POST['cedula'])) {
    $cedula = (string)$_POST['cedula'];

    $result = $conexion->query(
        'SELECT * FROM usuarios WHERE cedula = "' . strtolower($cedula) . '"'
    );

    if ($result->num_rows > 0) {
        echo '<div id="disponibilidad" class="alert alert-danger" value="no"><strong>Cedula registrada!</strong> Esta cedula ya se encuentra registrada.</div>';
    } else {
        echo '<div id="disponibilidad" class="alert alert-success" value="si"><strong>Enhorabuena!</strong>Esta cedula está disponible.</div>';
    }
}

if (isset($_POST['email'])) {
    $email = (string)$_POST['email'];

    $result = $conexion->query(
        'SELECT * FROM usuarios WHERE email = "' . strtolower($email) . '"'
    );

    if ($result->num_rows > 0) {
        echo '<div id="disponibilidad" class="alert alert-danger" value="no"><strong>Correo registrado!</strong> Este correo ya se encuentra registrado.</div>';
    } else {
        echo '<div id="disponibilidad" class="alert alert-success" value="si"><strong>Enhorabuena!</strong>Este correo está disponible.</div>';
    }
}
