<?php
include '../../database/CRUD.php';

$correo = $_GET['correo'];
$password = $_GET['password'];

$respuesta = insert_data("SELECT * FROM cliente WHERE cli_correo = '".$correo."' AND cli_password = '".$password."' ");

if($respuesta == true){
    echo $respuesta;
}else{
    echo "No logrado";
}

?>