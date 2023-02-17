<?php
session_start();
if (isset($_SESSION['admin'])){
include ("header.php");
?>


<h4>  <u>NOMBRE</u> :</h4> Zac<h4> <u>APELLIDO</u> :</h4>Efrom <h4> <u>COMENTARIO</u> :</h4> Se esta haciendo muy el piola. <h4> <u>FECHA DE PUBLICACION</u> :</h4>09-02-2023 12:18:36am<h4>  <u>NOMBRE</u> :</h4> Fred<h4> <u>APELLIDO</u> :</h4>Duqueto <h4> <u>COMENTARIO</u> :</h4> Aparentemente vende drogas en el patio del colegio. <h4> <u>FECHA DE PUBLICACION</u> :</h4>09-02-2023 12:27:11am


<?php
} else {  
    header("Location:index.php");
}
?>