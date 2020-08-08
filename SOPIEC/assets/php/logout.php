<?php
session_start();
//se borra la sesion
session_destroy();
?>

<head>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<center> <h1 class="align-self-center">SESION FINALIZADA, REDIRECCIONANDO AL LOGIN</h1> </center>

<body>
    
<div class="container">

</div>

</body>

<script language="javascript">

    // Usando setTimeout para ejecutar una función después de 5 segundos.
    setTimeout(function() {
        // Redirigir con JavaScript
        window.location.href = '../../login.php';
    }, 2000);
</script>