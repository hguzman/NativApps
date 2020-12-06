<?php 
include("db.php");
// Busqueda de usuarios
$salida ="";
$query = "select cedula,area,primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,email,rol
from usuarios";

if(isset($_POST['consultaUsuarios'])){
    $q = $conexion->real_escape_string($_POST['consultaUsuarios']);
    $query = "select cedula,area,primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,email,rol
    from usuarios WHERE cedula LIKE '%".$q."%' OR primer_nombre like '%".$q."%' OR primer_apellido LIKE '%".$q."%' OR email LIKE '%".$q."%' OR area LIKE '%".$q."%' OR segundo_nombre LIKE '%".$q."%'";
    
}

$resultado = mysqli_query($conexion, $query);

if ( $resultado->num_rows > 0){
    $salida = '
    <table class="table table-striped table-bordered table-hover">
    <thead class="thead-light ">
        <!-- Header de la tabla -->
        <tr class="">
            <th scope="col">ID/Cedula</th>
            <th scope="col">Primer nombre</th>
            <th scope="col">Area</th>
            <th scope="col">Segundo nombre</th>
            <th scope="col">Primer apellido</th>
            <th scope="col">Segundo apellido</th>
            <th scope="col">Correo</th>
            <th scope="col">Rol</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
    ';

    while ($reg = mysqli_fetch_array($resultado)) {
    $cedula = $reg['cedula'];
    $salida .= " <tr>
    <td>".$reg['cedula']."</td>    
    <td>".$reg['primer_nombre']."</td>
    <td>".$reg['area']."</td>
    <td>".$reg['segundo_nombre']."</td>
    <td>".$reg['primer_apellido']."</td>
    <td>".$reg['segundo_apellido']."</td>
    <td>".$reg['email']."</td>
    <td>".$reg['rol']."</td>
    <td class='eliminar-editar'> 
    <a id='edit' class='btn fa fa-pen' href='modificar.php?cedula=".$cedula."'></a> 
    <a id='del' class='btn fa fa-trash-alt' href='#' onclick='confirmacion_borrar($cedula)' '></a>
    </td>
</tr>";

}
$salida.="<tbody></tbody>";
}
else{
$salida.= "
<div class='alert alert-info' role='alert'>No se encotró ninguna coincidencia 🥺</div>
";
}

echo $salida;

mysqli_close($conexion);
?>




<!-- <a href=""></a>
// <td class='eliminar-editar'>
//     <a id='edit' class='btn fa fa-pen' href='modificar.php?cedula=' . $reg['cedula'] .'</a>''
// </td> -->