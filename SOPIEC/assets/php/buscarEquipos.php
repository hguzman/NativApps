<?php 
session_start();
include("db.php");
$salidaEquipos ="";
// $query = "select cedula,area,primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,email,rol
// from usuarios";
$query = "select serial, marca, nombre, tipo_equipo,modelo_equipo,procesador,ram,disco_duro,sistema_operativo
from equipos";

if(isset($_POST['consultaEquipos'])){
    $q = $conexion->real_escape_string($_POST['consultaEquipos']);
    $query = "select serial, marca, nombre, tipo_equipo,modelo_equipo,procesador,ram,disco_duro,sistema_operativo from equipos WHERE serial LIKE '%".$q."%' OR marca like '%".$q."%' OR nombre LIKE '%".$q."%' OR tipo_equipo LIKE '%".$q."%' OR modelo_equipo LIKE '%".$q."%' OR procesador LIKE '%".$q."%'";
    
}

$resultadoEquipos = mysqli_query($conexion, $query);

if ( $resultadoEquipos->num_rows > 0){
    $salidaEquipos = '
    <table class="table table-striped table-bordered table-hover">
    <thead class="thead-light ">
        <!-- Header de la tabla -->
        <tr class="">
            <th scope="col">Serial</th>
            <th scope="col">Marca</th>
            <th scope="col">Nombre</th>
            <th scope="col">Tipo de equipo</th>
            <th scope="col">Modelo de equipo</th>
            <th scope="col">Procesador</th>
            <th scope="col">RAM</th>
            <th scope="col">Disco Duro</th>
            <th scope="col">Sistema operativo</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
    ';

    while ($reg = mysqli_fetch_array($resultadoEquipos)) {
    $serial = $reg['serial'];
    $salidaEquipos .= " <tr>
    <td>".$reg['serial']."</td>    
    <td>".$reg['marca']."</td>
    <td>".$reg['nombre']."</td>
    <td>".$reg['tipo_equipo']."</td>
    <td>".$reg['modelo_equipo']."</td>
    <td>".$reg['procesador']."</td>
    <td>".$reg['ram']."</td>
    <td>".$reg['disco_duro']."</td>
    <td>".$reg['sistema_operativo']."</td>
    <td class='eliminar-editar'> 
    <a id='edit' class='btn fa fa-pen' href='modificarequipo.php?serial=".$serial."'></a> 
    <a id='del' class='btn fa fa-trash-alt' href='#' onclick='confirmacion_borrar(`$serial`)' '></a>
    </td>
</tr>";

}
$salidaEquipos.="<tbody></tbody>";
}
else{
$salidaEquipos.= "<div class='alert alert-info' role='alert'>No se encotró ninguna coincidencia 🥺</div>";
}

echo $salidaEquipos;

mysqli_close($conexion);
?>