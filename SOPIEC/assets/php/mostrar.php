<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../../CSS/bootstrap.css" rel="stylesheet">
</head>

<body>
    <center>
        <table border="2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Opciones</th>
                </tr>

            </thead>
            <tbody>
                <?php
                require("db.php");
                $query = "SELECT * from avatares";

                $registros = mysqli_query($conexion, $query) or
                    die("Problemas en el select:" . mysqli_error($conexion));

                while ($reg = mysqli_fetch_array($registros)) {
                ?>
                    <tr>
                        <td><?php echo $reg['ID'] ?></td>
                        <td><?php echo $reg['nombre'] ?></td>
                        <td><img src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen']) ?>" height="200px"></td>
                    </tr>



                <?php
                };
                mysqli_free_result($registros);
                ?>


            </tbody>
        </table>
    </center>
</body>

</html>