<?php
require_once('Objects/Carro.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</head>

<body>
    <?php

    $carros = new Carro();
    // $carros->Enceder();
    // $carros->Apagar();
    // $carros->InformacionVehiculo("YD5S6", "Toyota Supra", "Negro Mate");


    $carros->cargaVehiculos("RTX520", 2020, "Azul Rey", "Nissan", "Deportivo", "4");
    $carros->cargaVehiculos("UIS520", 2020, "Rojo", "Nissan", "Deportivo", "2");
    $carros->cargaVehiculos("SDS520", 2020, "Negro Mate", "Nissan", "Deportivo", "2");
    $carros->cargaVehiculos("UDD520", 2020, "Verde ", "Nissan", "Deportivo", "1");
    $carros->cargaVehiculos("UAS520", 2020, "Blanco ", "Nissan", "Deportivo", "6");

    $carros->verVehiculos();

    ?>

</body>

</html>