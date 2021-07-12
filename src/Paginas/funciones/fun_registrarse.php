<?php
include '../../database/CRUD.php';

$correo = $_GET['correo'];
$password = $_GET['password'];
$cedula = $_GET['cedula'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];

$respuesta = insert_data("INSERT INTO cliente VALUES ('".$cedula."', '".$nombre."', '".$apellido."', '".$correo."', '".$password."')");

if($respuesta == true){
    echo "Logrado";
}else{
    HTTP_response_code(400);
}

?>