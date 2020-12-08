<?php
require_once("db.php");
$correo = $_POST['email'];

$recuperar = "SELECT email from usuarios WHERE email = '$correo' ";

$recuperado = mysqli_query($conexion, $recuperar);
/* var_dump($recuperado); */
$contar = mysqli_fetch_row($recuperado);

if (isset($contar)){

    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

$idkey =substr(str_shuffle($permitted_chars), 0, 20);


$actualizar = "UPDATE usuarios set contrasena = '$idkey'
where email = '$correo' ";


$actualizado = mysqli_query($conexion, $actualizar);
 
include("sendemail.php");

header("location: passrecovered.html");

}else{
    header("location: errorRevoverEmail.html");
};
