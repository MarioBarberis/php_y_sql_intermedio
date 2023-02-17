<?php

session_start();  //Esto hace que sea necesario estar con la sesion abierta para ingresar.

//tomar los datos que ponen en el formulario.
$nombre_alumno = $_POST ['nombre'];
$apellido_alumno = $_POST ['apellido'];
$imagen_alumno = $_POST ['imagen'];
$descripcion_alumno = $_POST ['descripcion'];

include("conexion.php");

//insertar en base de datos
mysqli_query($conexion_db, "INSERT INTO alumnos VALUES (DEFAULT, '$nombre_alumno','$apellido_alumno','$imagen_alumno','$descripcion_alumno')");

mysqli_close($conexion_db);

header("Location:cargar.php?ok");

?>