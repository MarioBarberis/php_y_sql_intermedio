<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejo de imagenes</title>
</head>
<body>
<h1> Manejo de imagenes</h1>

    <form action="subir.php" method="POST" enctype="multipart/form-data"> <!-- multipart/form desmenusa el archivo y nos permite poder subirlo -->
    <input type="file" name="archivo"> <!-- Habilita el boton para subir archivo -->
    <br>
    <br>
        <input type="submit">

    </form>
</body>
</html>