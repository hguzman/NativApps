<?php
session_start();
$sesion = $_SESSION['username'];
$rol = $_SESSION['rol'];
if (!isset($sesion)) {
    header("location: login.php");
} else {
    if ($rol == "user") {
    } else {
        header("location: assets\php\logout.php"); //Esta ruta hay que cambairla cuando se suba al hosting
    }
}
