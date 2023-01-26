<?php
include ("header.php");
?>


<section class="contenedor_alumnos">
<?php 

include("conexion.php");
$consulta_db = mysqli_query($conexion_db, "SELECT * FROM alumnos");

// lo siguiente te permite desmenuzar cada uno de los datos
while ($mostrar_datos = mysqli_fetch_assoc($consulta_db)) {
    ?>

<div class="caja_alumno">

 <h2> <?php  echo $mostrar_datos['nombre'] ." ". $mostrar_datos['apellido']; ?></h2>
<img src="img/<?php echo $mostrar_datos['imagen'] ?>" alt="<?php  echo $mostrar_datos['nombre'];?>" class="imga">
<p>
<?php echo $mostrar_datos['descripcion']; ?>
</p>

<a href="eliminar.php?id=<?php echo $mostrar_datos['id'];?>"> <button> Eliminar Alumno </button></a>

</div>

<?php
}
?>

</section>