<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_POST){
    $titulo = $_POST["txtTitulo"];
    $prioridad = $_POST["lstPrioridad"];
    $estado = $_POST["lstEstado"];
    $usurio = $_POST["lstUsuario"];
    $descripcion = $_POST["txtDescripcion"];
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de tareas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha 384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Gestor de tareas</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="" method="POST">
                    <div>
                        <label for="txtTitulo">Titulo</label>
                        <input type="text" name="txtTitulo" id="txtTitulo" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-4 py-1">
                            <label for="lstPrioridad">Prioridad</label>
                            <select name="lstPrioridad" id="lstPrioridad" class="form-control">
                                <option value="" disabled selected>Seleccionar</option>
                                <option value="Alta">Alta</option>
                                <option value="Media">Media</option>
                                <option value="Baja">Baja</option>
                            </select>
                        </div>
                        <div class="col-4 py-1">
                            <label for="lstEstado">Estado</label>
                            <select name="lstEstado" id="lstEstado" class="form-control">
                                <option value="" disabled selected>Seleccionar</option>
                                <option value="Sin asignar">Sin asignar</option>
                                <option value="Asignado">Asignado</option>
                                <option value="En proceso">En proceso</option>
                                <option value="Terminado">Terminado</option>
                            </select>
                        </div>
                        <div class="col-4 py-1">
                            <label for="lstUsuario">Usuario</label>
                            <select name="lstUsuario" id="lstUsuario" class="form-control">
                                <option value="Juan">Juan</option>
                                <option value="Valeria">Valeria</option>
                                <option value="Micaela">Micaela</option>
                            </select>
                        </div>
                        <div class="col-12 py-1">
                            <label for="txtDescripcion">Descripcion</label>
                            <textarea name="txtDescripcion" id="txtDescripcion" class="form-control"></textarea>
                        </div>
                        <div class="py-1 center">
                            <button type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        <div class="row">
            <div class="col-12 p-3">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titulo</th>
                            <th>Fecha de insercion</th>
                            <th>Prioridad</th>
                            <th>Usuario</th>
                        </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    </main>
    
</body>
</html>