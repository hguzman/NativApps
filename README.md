# NativApps
NativApps

<?php
try {
$c = new PDO('mysql:host=localhost;dbname=pagpre', "root", "");
$c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
echo "ERROR: " . $e->getMessage();
}
?>
if (isset($_REQUEST['Enviar'])) {
  require_once "PHP/conexion.php";

  extract($_REQUEST);
  $query = "INSERT INTO contacto(Nombre,Apellido,Telefono,Email,Mensaje) VALUES ('$Nombre', '$Apellido', '$Telefono', '$Email','$Mensaje');";
  //se prepara la consulta
  $consulta = $c->prepare($query);
  
  $r = $consulta->execute();
  //echo $r;
  if ($r == 1) {
    echo '<script>
    $(".finalizado").text("Se Ha Creado un Usuario");
</script>';
  }
}
?>
     </div>

        <div class="img" style="margin-top:6%; height:100%; width: 100%;">
            <img src="IMG\contactenos.jpg" heigth='100%' width='100%' alt="imagen de contacto">
        </div>

    </div>
