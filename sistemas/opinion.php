<?php include("header.php"); ?>

<?php

date_default_timezone_set("America/Argentina/Buenos_Aires");
$fecha = date(" d M Y ");
$texto = "<h3> Nombre: " .$_POST['nombre']  . " Apellido: " .$_POST['apellido'] . " Opinion: " .$_POST['opinion']. "   Fecha:  $fecha  </h3>" ;
$archivo = fopen('opiniones.txt', 'a'); 

fputs($archivo, $texto);

echo "<p> Opinion Enviada </p>"


?>





