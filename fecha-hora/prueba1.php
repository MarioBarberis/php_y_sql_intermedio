<?php
// Definimos zona horario, buscandola en la documentacion oficial
date_default_timezone_set("America/Argentina/Buenos_Aires");
echo date("D/M/Y"). "<BR>";

$fecha_actual = date("l/m/y");
echo "La fecha actual es : ".$fecha_actual;  //Recordar que para concatenar es un "."

/* $hora_actual = time();
echo ("<h3>".$hora_actual."</h3>"); */   //Te muestra la hora pero hay que modificarla para que sea entendible.

$hora_actual = getdate (time());
echo ("<h3>".$hora_actual ['hours'].":".$hora_actual['minutes'].":".$hora_actual['seconds'])."</h3>";
