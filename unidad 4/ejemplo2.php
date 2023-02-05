<?php
date_default_timezone_set("America/Argentina/Buenos_Aires");

$fecha_actual = date("l/M/Y");
echo "La fecha de hoy es: ". $fecha_actual;

/* $prueba2 = time();
echo "<br>" .$prueba2;  */    //Hasta aca te devuelve la hora en formato UNIX, hay que darle mejor formato.

$fecha = getdate(time());

echo "<p> Fecha " .date ("d-m-Y | h:s", strtotime("+12hours")). "</p>";  // strtotime es una funcion que calcula a futuro en este caso

echo "<p> Ultima Clase: " .date ("d-m-Y", strtotime("last monday")). "</p>"; 

echo "<p> Proxima Clase: " .date ("d-m-Y", strtotime("next monday")). "</p>"; 