<?php

date_default_timezone_set("America/Argentina/Buenos_Aires");
$fecha_comen = date("d-m-Y h:i:sa");

$texto = "<h4>  <u>NOMBRE</u> :</h4> ". $_POST['nombre1'] ."<h4> <u>APELLIDO</u> :</h4>". $_POST['apellido1']. " <h4> <u>COMENTARIO</u> :</h4> ". $_POST['comentario1'] . " <h4> <u>FECHA DE PUBLICACION</u> :</h4>". $fecha_comen;

$archivo = fopen('anot.php', 'a');
fputs($archivo, $texto);

echo "<p>&nbsp; Datos Almacenados </p>";

?>

<form action ="index.php" method = "POST">
<button type="submit" name="button"> Volver a Pagina Principal</button>
</form>



