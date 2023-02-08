<?php


$texto = "<h3> Nombre: ". $_POST['nombre'] ." Apellido: ". $_POST['apellido']. " Comentario: ". $_POST['comentario']. "</h3>";

$archivo = fopen('anot.php');
fputs($archivo, $texto);

echo "<p> Datos Almacenados </p>";

?>

