<?php
session_start();
//se borra la sesion
session_destroy();
?>

<head>
    <link rel="shortcut icon" href="..\img\SOPIEC.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>

<body>

    <div class='container'>
        <div class='alert alert-info' role='alert'>
            <center>
                <h1>SESIÓN FINALIZADA</h1>
            </center>
            <center>
                <h4>Su sesión ha finalizado</h4>
            </center>
            <center>
                <p>Serás redireccionado en <span id='counter'>10</span> segundo(s).</p>
            </center>
        </div>
    </div>

</body>
<!-- Script Redirección -->
<script type='text/javascript'>
    function countdown() {
        var i = document.getElementById('counter');
        if (parseInt(i.innerHTML) <= 1) {
            location.href = '../../login.php';
        }
        i.innerHTML = parseInt(i.innerHTML) - 1;
    }
    setInterval(function () {
        countdown();
    }, 300);
</script>";