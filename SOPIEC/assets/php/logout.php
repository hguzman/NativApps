<?php
session_start();
//se borra la sesion
session_destroy();
?>

<script language="javascript">
    location.href = "../../login.html";
    alert("Sesion finalizada")
</script>