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
   <div class="container p-4">
    <div class="wraper">
        <div class="card">
            <div class="card-heade">Formulario</div>
            <div class="card-body text-center">
                <form action="main.php" method="post">
                    <div class="">
                        <label for="" class="control-label">Nombre</label>
                        <input type="text" name="nombre" class="input-control">
                    </div>
                    <div class="">
                        <label for="" class="control-label">Apellidos</label>
                        <input name="apellido" type="text" class="input-control">
                    </div>
                    <div class="">
                        <label for="" class="control-label">Opción</label>
                        <select name="opcion" type="text" class="input-control">
                            <option selected>Seleccione</option>
                            <option value="1">Opcion 1</option>
                            <option value="2">Opcion 2</option>
                            <option value="3">Opcion 3</option>
                            <option value="4">Opcion 4</option>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>
   </div>

   <script src=""></script>
</body>

</html>