<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">
        <div class="wrapper">
            <div class="card">
                <div class="card-header">Pago a Nomina</div>
                <div class="card-body pt-5">
                    <form action="index.php" method="post">
                        <label for="">Documento</label>
                        <input required class="form-control col-12" type="number" name="documento"><br>
                        <label for="">Nombre</label>
                        <input required class="form-control col-12" type="text" name="nombre"><br>
                        <label for="">Apellidos</label>
                        <input required class="form-control col-12" type="text" name="apellidos"><br>
                        <label for="">Email</label>
                        <input required class="form-control col-12" type="email" name="email"><br>
                        <label for="">Cargo</label>
                        <select required class="form-control col-12" type="text" name="cargo">
                            <option selected>Seleccione...</option>
                            <option value="Administrador"> Administardor</option>
                            <option value="Vendedor"> Vendedor</option>
                        </select>
                        <br>
                        <label for="">Salario</label>
                        <input required class="form-control col-12" type="number" name="salario"><br>
                        <button class="btn btn-primary mt-4" name="enviar" type="submit">Enviar</button><br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>


<?php

if (isset($_POST['enviar'])) {
    require_once('Nomina.php');

    $documento = $_POST['documento'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellidos'];
    $email = $_POST['email'];
    $cargo = $_POST['cargo'];
    $salario = $_POST['salario'];

    $admin = new Administrativos();
    $vendedor = new Vendedores();

    if($cargo == 'Administrador'){
        $admin->RegistroNomina($documento, $nombre, $apellido, $email,  $cargo, $salario);
        $admin->PagoAdmin();
    }else if($cargo == 'Vendedor'){
        $vendedor->RegistroNomina($documento, $nombre, $apellido, $email,  $cargo, $salario);
        $vendedor->PagoAdmin();
    }
}


?>

</html>