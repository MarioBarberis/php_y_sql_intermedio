<?php

date_default_timezone_set("America/Argentina/Buenos_Aires");
$fecha_comen = date("d-m-Y h:i:sa");

$texto = " NOMBRE:". $_POST['nombre1'] ." VALOR:". $_POST['valor1']. " COMENTARIO:". $_POST['comentario1'] . " FECHA DE PUBLICACION:". $fecha_comen ."\n";

$archivo = fopen('bdtexto.txt', 'a');
fputs($archivo, $texto);

echo "<p>&nbsp; Datos Almacenados </p>";

?>

<form action ="index.php" method = "POST">
<button type="submit" name="button"> Volver a Pagina Principal</button>
</form>
