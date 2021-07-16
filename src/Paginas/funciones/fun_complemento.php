<?php
include '../../database/CRUD.php';
session_start();

    $respuesta = update_data("UPDATE cliente_servicio SET cls_estado = '".$_GET['estado']."' WHERE cls_id = ".$_GET['cls_id']." ");


    if($respuesta == true){
        echo "Logrado";
    }else{
        HTTP_response_code(400);
    }
  