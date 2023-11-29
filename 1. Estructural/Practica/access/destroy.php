<?php


// Iniciar la sesión
session_start();

// Eliminar todas las variables de sesión
$_SESSION = array();

// Destruir la sesión
session_destroy();

header("Location: ../index.php");
