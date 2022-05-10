<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Formulario de datos personales</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form method="POST" action="acceso_confirmado.php">
                    <div class="pb-3">
                        <label for="">Nombre:*</label>
                        <input type="text" name="txtNombre" id="txtNombre" class="form-control" required>
                    </div>
                    <div class="pb-3">
                        <label for="">DNI:*</label>
                        <input type="text" name="txtDni" id="txtDni" class="form-control" required>
                    </div>
                    <div class="pb-3">
                        <label for="">Telfono:*</label>
                        <input type="text" name="txtTelefono" id="txtTelefono" class="form-control" required>
                    </div>
                    <div class="pb-3">
                        <label for="">Edad:*</label>
                        <input type="text" name="txtEdad" id="txtEdad" class="form-control" required>
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