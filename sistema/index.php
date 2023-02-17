<?php
include ("header.php");
?>

<h3> <center> SE SOLICITA ACCESO AUTORIZADO </center> </h3>

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