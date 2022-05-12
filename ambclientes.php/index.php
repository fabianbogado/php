<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(file_exists("archivo.txt")){
//si el archivo existe, cargo en los clientes en la variable aClientes
    $strJson = file_get_contents("archivo.txt");

    $aClientes = json_decode($strJson, true);

} else {
    // si el archivo no existe es por que no hay clientes 
    $aClientes = array();

}
if($_POST){
    $dni = $_POST["txtDni"];
    $nombre = $_POST["txtNombre"];
    $telefono = $_POST["txtTelefono"];
    $correo = $_POST["txtCorreo"];

    $aClientes = array();
    $aClientes = array("dni" => $dni, 
                        "nombre" => $nombre,
                        "telefono" => $telefono,
                        "correo" => $correo
                    );
                    //Convertir el array de clientes en json
                    $strJson = json_encode($aClientes);
                        //Almacenar en un archivo.txt el json con file_put_contents
                    file_put_contents("archivo.txt", $strJson);
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Registro de clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="pb-3">
                        <label for="txtDni">Dni*</label>
                        <input type="text" name="txtDni" id="txtDni" class="form-control">
                    </div>
                    <div class="pb-3">
                        <label for="txtNombre">Nombre*</label>
                        <input type="text" name="txtNombre" id="txtNombre" class="form-control">
                    </div>
                    <div class="pb-3">
                        <label for="txtTelefono">Telefono*</label>
                        <input type="text" name="txtTelefono" id="txtTelefono" class="form-control">
                    </div>
                    <div class="pb-3">
                        <label for="txtCorreo">Correo*</label>
                        <input type="email" name="txtCorreo" id="txtCorreo" class="form-control">
                    </div>
                    <div class="pb-3">
                        <p>Adjuntar archivo<input type="file" name="archivo1" id="archivo1"></p>
                    </div>
                    <div class="pb-2">
                        <p>Archivos admitidos: .jpg, pneg ,.png</p>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button type="submit" class="btn btn-danger">Nuevo</button>
                    </div>
                </form>
            </div>
                <div class="col-6">
                    <table class="table table-border">
                        <th>Imagen</th>
                        <th>Dni</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </table>
                </div>
            </div>
        </div>

    </main>

</body>

</html>