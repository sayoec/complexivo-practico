<?php
include '../../database/CRUD.php';

$correo = $_GET['correo'];
$password = $_GET['password'];

$respuesta = select_data("SELECT * FROM cliente WHERE cli_correo = '".$correo."' AND cli_password = '".$password."' ");


if(count($respuesta) > 0){
    session_start();
    $_SESSION['cli_nombre'] = $respuesta[0]['cli_nombre'];
    $_SESSION['cli_apellido'] = $respuesta[0]['cli_apellido'];
    $_SESSION['cli_cedula'] = $respuesta[0]['cli_cedula'];
    $_SESSION['tipo_cuenta'] = $respuesta[0]['tipo_cuenta'];
}else{
    HTTP_response_code(400);
}

?>