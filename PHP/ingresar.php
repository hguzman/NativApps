<?php
if (isset($_REQUEST['Enviar'])) {
  require_once "conexion.php";

  extract($_REQUEST);
  $query = "INSERT INTO contacto(Nombre,Apellido,Telefono,Email,Mensaje) VALUES ('$Nombre', '$Apellido', '$Telefono', '$Email','$Mensaje');";
  //se prepara la consulta
  $consulta = $c->prepare($query);
  
  $r = $consulta->execute();
  //echo $r;
  if ($r == 1) {
    echo "Se ha creado un usuario<br/>";
  
  }
  
}



  

  