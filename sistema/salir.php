<?php
session_start();
session_destroy();             //Entra sesion, sale de sesion, y se redirecciona al index.

header("Location:index.php");