<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="">Tipo Animal</label>
        <input type="text" name="tipo"><br>
        <label for="">Nombre</label>
        <input type="text" name="nombre"><br>
        <label for="">Acción</label>
        <input type="text" name="accion"><br>
        <button name="enviar" type="submit">Enviar</button><br><br>
    </form>
</body>


<?php

    if(isset($_POST['enviar'])){
        require_once('ClasePadre.php');

        $tipo = $_POST['tipo'];
        $nombre = $_POST['nombre'];
        $accion = $_POST['accion'];

        $animal = new ElAnimal();
        $animal->Animal($tipo, $nombre, $accion);
        $animal->accionAnimal();
    }


?>
</html>