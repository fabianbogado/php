<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_POST){
    $nombre = $_POST["txtNombre"];
    $dni = $_POST["txtDni"];
    $correo = $_POST["txtCorreo"];

    if($nombre != "" && $dni != ""){
        header("Location: acceso_confirmado.php");
}   else{
    $mensaje = "Valido para usuarios registrados.";
}

}
?>


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Practicas</h1>
        </div>
            </div>
            <?php if(isset($mensaje)){ ?>
                    <div class="alert alert-danger" role="alert">
                    <?php echo  $mensaje; ?>
                    </div>
                <?php } ?>
                <?php if(isset($mensaje)){ ?>
                    <div class="alert alert-danger" role="alert">
                    <?php echo  $mensaje; ?>
                    </div>
                <?php } ?>

            <div class="row">
                <div class="col-6">
                    <form method="POST" action="resultado_de_practicas.php">
                        <div class="pb-3">
                            <label for="">Nombre*</label>
                            <input type="text" name="txtNombre" id="txtNombre" class="form-control"> </input>
                        </div>
                        <div class="pb-3">
                            <label for="">DIN*</label>
                            <input type="text" name="txtDni" id="txtDni" class="form-control"> </input>
                        </div>
                        <div class="pb-3">
                            <label for="">Correo*</label>
                            <input type="text" name="txtCorreo" id="txtCorreo" class="form-control"> </input>
                        </div>
                        <div class="pb-3">
                            <label for="">Telefono*</label>
                            <input type="text" name="txtTelefono" id="txtTelefono" class="form-control"> </input>
                        </div>
                        <div class="pb-3">
                            <button type="submit" class="btn btn-primary">ENVIAR</button>
                        </div>
                    </form>
                </div>
            </div>
    </main>    
</body>
</html>