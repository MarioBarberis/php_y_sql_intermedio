<?php
session_start();
if (isset($_SESSION['admin'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Base de Datos Interna</title>
</head>
<body>
  

</body>
</html>

<?php
} else {
  header("Location:index.php");
}
?><h4> NOMBRE DEL PRODUCTO: </h4> Iphone Max Power<h4> VALOR FINAL: </h4>300000 <h4> COMENTARIO: </h4>Entregado en tiempo y forma. <h4> FECHA DE PUBLICACION: </h4>07-03-2023 09:42:08pm
<h4> NOMBRE DEL PRODUCTO: </h4> Iphone max<h4> VALOR FINAL: </h4>310000 <h4> COMENTARIO: </h4>Este iphone fue pedido con baño de oro. <h4> FECHA DE PUBLICACION: </h4>08-03-2023 08:07:53pm
<h4> NOMBRE DEL PRODUCTO: </h4> Notebook Platinun<h4> VALOR FINAL: </h4>145000 <h4> COMENTARIO: </h4>PC movil de alta capacidad <h4> FECHA DE PUBLICACION: </h4>08-03-2023 08:11:13pm
<h4> NOMBRE DEL PRODUCTO: </h4> Tablet WUO<h4> VALOR FINAL: </h4>34000 <h4> COMENTARIO: </h4>Tablet china de uso cotidiano. <h4> FECHA DE PUBLICACION: </h4>08-03-2023 08:12:36pm
