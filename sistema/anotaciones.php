<?php


$texto = "<h3> Nombre: ". $_POST['nombre'] ." Apellido: ". $_POST['apellido']. " Comentario: ". $_POST['comentario']. "</h3>";

$archivo = fopen('anot.php', 'a');
fputs($archivo, $texto);

echo "<p>&nbsp; Datos Almacenados </p>";

?>

<form action ="index.php" method = "POST">
<button type="submit" name="button"> Volver a Pagina Principal</button>
</form>



