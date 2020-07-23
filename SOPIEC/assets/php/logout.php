<?php
session_start();
//se borra la sesion
session_destroy();
echo 'la sesion ha caducado';
?>

<script language="javascript">
    location.href = "../../login.php";
</script>