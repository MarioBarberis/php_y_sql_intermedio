<?php
session_start();
header("Content-type:image/jpeg");

$imagen_captcha = imagecreate(70, 30);

$fondo = imagecolorallocate($imagen_captcha, 239, 192, 240);
$texto = imagecolorallocate($imagen_captcha, 82, 4, 32);

imagestring($imagen_captcha, 5, 15, 5, 'prueba', $texto);

imagejpeg($imagen_captcha);


/* Una vez que ande la imagen reemplazar con lo de abajo */
/* $_SESSION['codigo_captcha'] */
?> 