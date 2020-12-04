<?php
header('Content-type: application/vnd.ms-excel;charset=iso-8859-15');
header('Content-Disposition: attachment; filename=equipos.xls');
$tipo = $_GET['tipo'];



if ($tipo == "equipo") {
?>

    <!-- query -->
    <?php
    require_once("assets/php/db.php");
    $registros1 = mysqli_query($conexion, "select * from equipos") or
        die("Problemas en el select:" . mysqli_error($conexion));
    ?>

    <!-- Tabla de valores en base de datos -->
    <table border="1" cellpadding="2" cellspacing="0" width="100%">
        <thead class="thead-light ">
            <!-- Header de la tabla -->
            <tr class="">
                <th scope="col">Serial</th>
                <th scope="col">Marca</th>
                <th scope="col">Nombre</th>
                <th scope="col">Tipo de equipo</th>
                <th scope="col">Modelo de equipo</th>
                <th scope="col">Procesador</th>
                <th scope="col">Ram</th>
                <th scope="col">Disco duro</th>
                <th scope="col">Sistema operativo</th>
                <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>

            <?php
            while ($reg1 = mysqli_fetch_array($registros1)) {
            ?>
                <!-- Contenido de la tabla -->
                <tr class="actual">
                    <td><?php echo $reg1['serial'] ?> </td>
                    <td> <?php echo $reg1['marca'] ?></td>
                    <td> <?php echo $reg1['nombre'] ?></td>
                    <td> <?php echo $reg1['tipo_equipo'] ?> </td>
                    <td> <?php echo $reg1['modelo_equipo'] ?> </td>
                    <td> <?php echo $reg1['procesador'] ?> </td>
                    <td> <?php echo $reg1['ram'] ?> </td>
                    <td> <?php echo $reg1['disco_duro'] ?> </td>
                    <td> <?php echo $reg1['sistema_operativo'] ?> </td>
                    <td> <?php echo $reg1['estado'] ?> </td>
                </tr>

            <?php
            };
        };


        if ($tipo == "usuario") {
            ?>
            <!-- query -->
            <?php
            $usuarios = mysqli_query($conexion, "select * from usuarios") or
                die("Problemas en el select:" . mysqli_error($conexion));
            ?>

            <!-- Tabla de valores en base de datos -->
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

                    <?php
                    while ($reg = mysqli_fetch_array($usuarios)) {
                    ?>
                        <!-- Contenido de la tabla -->
                        <tr>
                            <td><? $user['cedula']?></td>
                            <td> <?php echo $user['primer_nombre'] ?></td>
                            <td> <?php echo $user['area'] ?></td>
                            <td> <?php echo $user['segundo_nombre'] ?></td>
                            <td> <?php echo $user['primer_apellido'] ?> </td>
                            <td> <?php echo $user['segundo_apellido'] ?> </td>
                            <td> <?php echo $user['email'] ?> </td>
                            <td> <?php echo $user['rol']; ?> </td>

                        </tr>

                </tbody>
            </table>
    <?php

                    }
                };
    ?>