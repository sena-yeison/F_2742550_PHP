<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crony SAS</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

    <div class="container-fluid">
        <div class="wraper pt-5 d-flex justify-content-center align-content-center flex-wrap">
            <div class="card  col-4">
                <div class="card-header d-flex justify-content-center align-content-center flex-wrap">
                    <img src="img/logo.png" class="img-fluid" style="width: 50%;" alt="">
                </div>
                <div class="card-body">
                    <form action="access/acces.php" method="post">
                        <div>
                            <label for="" class="form-alebl">Email</label>
                            <input required type="text" class="form-control" name="emailAcces">
                        </div>
                        <div>
                            <label for="" class="form-alebl">Password</label>
                            <input required type="password" class="form-control" name="passwordAcces">
                        </div>
                        <div class="pt-4">
                            <button type="submit" class="btn btn-primary col-12">Acceder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

    <?php

    $response = "";
    if (empty($_GET['response'])) {
    } else {
        $response = $_GET['response'];
        if ($response == "false") {
            echo "
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Lo sentimos!',
                    text: 'Credemciales incorrectas, intente nuevamente',
                    showConfirmButton: true,
                    confirmButtonText: 'Aceptar!',
                })
            </script>
            ";
        }
    }
    ?>
</body>




</html>