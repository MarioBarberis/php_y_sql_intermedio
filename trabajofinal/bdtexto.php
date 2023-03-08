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
  <title>Document</title>
</head>
<body>
  

</body>
</html>

<?php
} else {
  header("Location:index.php");
}
?><h4> NOMBRE DEL PRODUCTO: </h4> Iphone Max Power<h4> VALOR FINAL: </h4>300000 <h4> COMENTARIO: </h4>Entregado en tiempo y forma. <h4> FECHA DE PUBLICACION: </h4>07-03-2023 09:42:08pm
