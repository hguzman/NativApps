<?php
session_start();
$host = 'localhost';
$user = 'root';
$password = '';
$DB = 'sopiecdb';

$conexion= mysqli_connect($host,$user,$password,$DB);

// if (isset($conexion)){
//     echo "conectada";
// }
?>