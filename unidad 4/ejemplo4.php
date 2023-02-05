<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 4</title>
</head>
<body>
    


<?php

$texto = "<h3> Nombre: ". $_POST['nombre'] ." Apellido: ". $_POST['apellido']. " Correo: ". $_POST['correo']. "</h3>";

$archivo = fopen('ejemplo1.txt', 'a');
fputs($archivo, $texto);

echo "<p> Datos Almacenados </p>";  //aca de podria poner una funcion GET para mostrar los datos en una paguina elegida.





?>

</body>
</html>