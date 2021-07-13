<?php
include '../../database/CRUD.php';

$servicio = $_GET['servicio'];
$cedula = $_SESSION['cli_cedula'];


$respuesta = insert_data("INSERT INTO cliente_servicio VALUES ('".$cedula."', '".$servicio."', 'pendiente', NOW())");

if($respuesta == true){
    echo "Logrado";
}else{
    HTTP_response_code(400);
}

?>