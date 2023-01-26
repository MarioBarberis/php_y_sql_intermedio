<?php
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

    <?php
    if (isset ($_GET['ok'])){
        echo "<h3> CARGADO CON ÉXITO. </h3>";
    }
    ?>

</body>
</html>