<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
ini_set('error_reporting', E_ALL);


if($_POST){

    if(file_exists("invitados.txt")){
        //Si existe el archivo invitados lo abrimos y cargamos en una variable del tipo array
        //los DNIs permitidos
            $aInvitados = explode(",", file_get_contents("invitados.txt"));
        } else{
        //Sino el array queda como un array vacio
            $aInvitados = array();
        }

    if(isset($_POST["btnProcesar"])){
        $txtDni = $_POST["txtDni"];
        //Si el DNI ingresado se encuentra en la lista se mostrará un mensaje de bienvenido
    if (in_array($txtDni, $invitados)){
        $mensaje = "Bienvenid@ a la fiesta";
        $alert = "success";
    } else {
        //Sino un mensaje de No se encuentra en la lista de invitados.
        $mensaje = "No se encuentra en la lista de invitados.";
        $alert = "danger";    
    }

    }

    if(isset($_POST["btnVip"])){
        $txtVip = $_POST["txtVIP"];
        //Si el codigo es verde entonces mostrará Su código de acceso es ....
        if ($txtVip == "verde"){
            $mensaje = "su codigo de acceso es" . rand(1000, 9999);
    }else{
        //Sino Ud. no tiene pase VIP
        $mesaje = "Usted no tiene el pase vip";
        $alert = "danger";
    }
    }


}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de invitados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha 384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Lista de invitados</h1>
                <?php if ($mensaje != ""): ?>
                    <div class="alert alert-<?php echo $alert; ?>" role="alert">
                    <?php echo $mensaje; ?>
                </div>
                 <?php endif; ?>
            </div>    
            <div class="py1">
                <p>Complete el siguiente formulario:</p>
            </div>
            <div class="col-12">
                <form action="" method="post">
                    <div class="py-1">
                        <label for="txtDni">Ingrese el DNI:</label>
                        <input type="text" name="txtDni" id="txtDni" class="form-control" required value>
                        <div class="py-1">
                            <button type="submit" name="btnProcesar" class="btn btn-primary">Verificar invitado</button>
                        </div>
                    </div>
                    <div class="py-1">
                        <label for="txtVip">Ingrese el codigo secreto para el pase VIP:</label>
                        <input type="text" name="txtCodigo" id="" class="form-control" required value>
                    </div>
                     <div class="py-1">
                            <button type="submit" name="btnVip"class="btn btn-primary">Verificar codigo</button>
                        </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>