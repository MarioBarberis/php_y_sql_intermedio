<?php
if (checkdate ($_GET['day'], $_GET ['month'], $_GET ['year'])) {
    echo "La fecha ingresada es correcta";
} else {
    echo "La fecha no es acertada";
}