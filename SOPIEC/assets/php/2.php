
<!--  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$useri = "1001823659";
$userc = "1001823659";

$passi = "password";
$passc = "password";

if ($passi == $passc && $useri == $userc) {
    echo ('Bienvenido <br> ');
    echo ('<a href="logout.php">Salir de la sesion</a>');
} else {
    echo ('<script>
    locarion.href = "../../login.htlm";  
    </script>');
}

?>

</body>
</html>
