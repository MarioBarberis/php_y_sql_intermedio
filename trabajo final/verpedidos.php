<!-- Se deberán mostrar los pedidos realizados pendientes de entrega.
Cada pedido tendrá una opción de finalizar. Esta acción modificará el valor del campo “procesando” a finalizado. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Administracion</title>
    <link rel="stylesheet" href="fondo.css">
</head>

<body>

    <section class="contenedor_alumnos">

        <?php

        include("conexion.php");
        $consulta_db = mysqli_query($conexion_db, "SELECT * FROM pedidos");

        // lo siguiente te permite desmenuzar cada uno de los datos
        while ($mostrar_datos = mysqli_fetch_assoc($consulta_db)) {
        ?>

            <div class="caja_pedido">

                <h2> <?php echo $mostrar_datos['nombre'] . " " . $mostrar_datos['valor']; ?></h2>

                <img src="img/<?php echo $mostrar_datos['imagen'] ?>" alt="<?php echo $mostrar_datos['nombre']; ?>" class="imga">

                <p class="caract">
                    <?php echo $mostrar_datos['descripcion']; ?>
                </p>

                <a href="eliminar.php?id=<?php echo $mostrar_datos['id']; ?>"> <button> Eliminar Pedido </button></a>

            </div>
        <?php
        }
        ?>

    </section>
</body>

</html>