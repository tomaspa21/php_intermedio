<?php

date_default_timezone_set("America/Argentina/La_Rioja");

echo date("l/M/Y:H:i"). "<br>";




$fecha_actual  = date("d/F/o");
echo "La fecha actual es: ". $fecha_actual;


$hora_actual = time();
echo ("<h3>. $hora_actual. </h3>");


$hora_actual2 = getdate();
echo ("<h3>". $hora_actual2['hours'] . ":" .$hora_actual2['minutes'] . ":" .$hora_actual2['seconds']." </h3>");