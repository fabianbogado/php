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
if(isset($_GET["id"])){
    $id = $_GET["id"];
} else {
    $id="";
}
if(isset($_GET["do"]) && $_GET["do"] == "eliminar"){
    unset($aClientes[$id]);
    //convertir aClientes en json
    $strJson = json_encode($aClientes);

    //almacenar el json en el archivo
    file_put_contents("archivo.txt", $strJson);

    header("location: index.php"); // esto es para que limpie la pagina 

}
if($_POST){
    $dni = $_POST["txtDni"];
    $nombre = $_POST["txtNombre"];
    $telefono = $_POST["txtTelefono"];
    $correo = $_POST["txtCorreo"];
    $nombreImagen = "";

    $aClientes[] = array("dni" => $dni, 
                        "nombre" => $nombre,
                        "telefono" => $telefono,
                        "correo" => $correo,
                        "imagen" => $nombreImagen
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha 384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
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
                        <input type="text" name="txtDni" id="txtDni" class="form-control" required value="<?php echo isset($aClientes[$id])? $aClientes[$id]["dni"] : ""; ?>">
                    </div>
                    <div class="pb-3">
                        <label for="txtNombre">Nombre*</label>
                        <input type="text" name="txtNombre" id="txtNombre" class="form-control" required value="<?php echo isset($aClientes[$id])? $aClientes[$id]["nombre"] : "";?> ">
                    </div>
                    <div class="pb-3">
                        <label for="txtTelefono">Telefono*</label>
                        <input type="text" name="txtTelefono" id="txtTelefono" class="form-control" required value="<?php echo isset($aClientes[$id])? $aClientes[$id]["telefono"] : "";?> ">
                    </div>
                    <div class="pb-3">
                        <label for="txtCorreo">Correo*</label>
                        <input type="email" name="txtCorreo" id="txtCorreo" class="form-control" required value="<?php echo isset($aClientes[$id])? $aClientes[$id]["correo"] : "";?> ">
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
                    <table class="table table-hover border">   
                    <tr>
                        <th>Imagen</th>
                        <th>Dni</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                   
                    <?php foreach($aClientes as $pos => $cliente): ?> 
                    <tr>          <!-- hacer que se vea la imagen cargada "TAREA" -->
                        <td><img src="imagenes/<?php echo $cliente["imagen"]; ?>" class="img-thumnail"></td> 
                        <td><?php echo $cliente["dni"]; ?></td>
                        <td><?php echo $cliente["nombre"]; ?></td>
                        <td><?php echo $cliente["correo"]; ?></td>
                        <td> 
                            <a href="?id=<?php echo $pos; ?>"><i class="fa-solid fa-pen-to-square"></a></i>
                            <a href="?id=<?php echo $pos; ?>&do=eliminar"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>

    </main>

</body>

</html>