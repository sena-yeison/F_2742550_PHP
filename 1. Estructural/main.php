<?php

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellido'];

echo "Bienvenid@! ".$nombre."  ".$apellidos;

$opcion = $_POST['opcion'];
switch ($opcion) {
    case '1':
        echo "<br> Opción 1";
        break;
    case '2':
        echo "<br> Opción 2";
        break;
    case '3':
        echo "<br> Opción 3";
        break;
    case '4':
        echo "<br> Opción 4";
        break;
    default:
        echo "Esta opción no existe";
        break;
}

// echo "La aprendiz " . $nombre . " esta en estado " . $estado;
