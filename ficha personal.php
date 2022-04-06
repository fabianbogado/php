<?php
    $nombre = "Fabian Bogado";
    $edad ="18";
    $fecha = date("d/m/Y")

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha personal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row ">
            <div class="col-12 text-center">
            <h1>Ficha personal</h1>
            </div>
            <div class="row">
            <table class="table table-hover border">
                <tbody>
                <th>Fecha:</th>
                            <td><?php echo $fecha;?></td>
                        </tr>
                        <tr>
                            <th>Nombre y apellido:</th>
                            <td><?php echo $nombre; ?></td>
                        </tr>
                        <tr>
                            <th>Edad:</th>
                            <td><?php echo $edad; ?></td>
                        </tr>
                        <tr>
                            <th>Pelicula favorita:</th>
                            <td>batman</td>
                        </tr>
                </tbody>


    </main>
    
</body>
</html>