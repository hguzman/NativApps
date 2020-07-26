# NativApps
NativApps


<?php
try {
$c = new PDO('mysql:host=localhost;dbname=contacto', "root", "");
$c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
echo "ERROR: " . $e->getMessage();
}
?>



<?php
        if (isset($_REQUEST['Enviar datos'])) {
         require_once "conexion.php";
    
         extract($_REQUEST);
         
        $query = "INSERT INTO formulario(Nombre,Apellido,Telefono,Email,Mensaje,Servicio ) VALUES ('$Nombre', '$Apellido', '$Telefono', '$Email','$Mensaje','$servicio');";
        //se prepara la consulta
        $consulta = $c->prepare($query);
    
        $r = $consulta->execute();
         //echo $r;
         if ($r == 1) {
        echo "Se ha creado un usuario<br/>";
    }
    }
    