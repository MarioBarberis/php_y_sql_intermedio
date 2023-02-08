<?php


$texto = "<h3> <u>NOMBRE</u>: ". $_POST['nombre'] ." <u>APELLIDO</u>: ". $_POST['apellido']. " <u>COMENTARIO</u>: ". $_POST['comentario']. "</h3>";

$archivo = fopen('anot.php', 'a');
fputs($archivo, $texto);

echo "<p>&nbsp; Datos Almacenados </p>";

?>

<form action ="index.php" method = "POST">
<button type="submit" name="button"> Volver a Pagina Principal</button>
</form>



