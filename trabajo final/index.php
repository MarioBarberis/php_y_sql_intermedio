<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Administracion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2 class="titulotres"> <center> SE SOLICITA ACCESO AUTORIZADO </center> </h2>

<section class="contener_carga">
<form action="validar.php" method="post" class="formulario">
    <input type="text" name="usuario" required placeholder="Ingrese DNI">
    <input type="password" name="clave" required placeholder="Ingrese Clave">
    <input type="submit" value="Ingresar">
</form>
</section>

<?php
if (isset ($_GET['error'])){
    echo "<h3> Datos Incorrectos </h3>";
}
?>

</body>
</html>