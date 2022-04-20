<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//definicion
function calcularNeto($bruto){
    return $bruto -($bruto * 0.17);
}
//uso
    echo "El sueldo  neto es " . calcularNeto(5000);



?>