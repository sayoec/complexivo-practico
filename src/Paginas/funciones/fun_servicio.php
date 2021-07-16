<?php
include '../../database/CRUD.php';
session_start();
$servicio = $_GET['servicio'];
$cedula = $_SESSION['cli_cedula'];


$respuesta = insert_data("INSERT INTO cliente_servicio VALUES (NULL,'".$cedula."', '".$servicio."', 'pendiente', NOW())");

if($respuesta == true){
    echo "Logrado";
}else{
    HTTP_response_code(400);
}

?>