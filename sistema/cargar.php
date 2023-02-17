<?php
session_start();
if (isset($_SESSION['admin'])){

include ("header.php");
?>


<section class="contenedor_carga">

<h3 class="titulo3"> CARGA DE ALUMNOS </h3>

<form action="cargar_alumno.php" method="post" class="formulario">

<input type="text" name="nombre" placeholder="Nombre">
<input type="text" name="apellido" placeholder="Apellido">
<input type="text" name="imagen" placeholder="Imagen">
<textarea name="descripcion" id="" cols="30" rows="10"></textarea>
<input type="submit" value="Cargar Alumno">

</form>

</section>

<h3>COMENTARIOS ESPECIFICOS:</h3>

<form action="anotaciones.php" method="post">

<input type="text" name="nombre1" placeholder="Nombre de Alumno">
<input type="text" name="apellido1" placeholder="Apellido de Alumno">
<textarea name="comentario1" id="" cols="30" rows="10"></textarea>
<input type="submit" value="Enviar a Seccion Anotaciones">

</form>

<?php
if (isset ($_GET['ok'])){
echo "<h3> CARGADO CON ÉXITO. </h3>";
}

} else {  
    header("Location:index.php");
}
?>

</body>
</html>