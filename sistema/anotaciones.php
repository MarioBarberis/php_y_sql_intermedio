<?php

date_default_timezone_set("America/Argentina/Buenos_Aires");
$fecha_comen = date("d-m-Y h:i:sa");

$texto = "<h3>  <u>NOMBRE</u>: ". $_POST['nombre1'] ."  <u>APELLIDO</u>: ". $_POST['apellido1']. "  <u>COMENTARIO</u>: ". $_POST['comentario1'] . "  <u>FECHA DE PUBLICACION</u>: ". $fecha_comen ."<br>". "</h3>";

$archivo = fopen('anot.php', 'a');
fputs($archivo, $texto);

echo "<p>&nbsp; Datos Almacenados </p>";

?>

<form action ="index.php" method = "POST">
<button type="submit" name="button"> Volver a Pagina Principal</button>
</form>



