<?php
session_start();
?>

<head>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>


<body>
<center> <h1 class="align-self-center">CONTRASEÑA INCORRECTA </h1> </center>
</body>

<script language="javascript">

    // Usando setTimeout para ejecutar una función después de 5 segundos.
    setTimeout(function() {
        // Redirigir con JavaScript
        window.location.href = '../../manuales.php';
    }, 1000);
</script>