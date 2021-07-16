<?php


//Recuperar datos de la base de datos
function select_data($query_enviado)
{    include('conexion.php');
    $sql = $query_enviado;
    $result = $conn->query($sql);
    $registros = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $registros[] = $row;
        }
    } else {
        echo "0 results";
    }

    $conn->close();
    return $registros;
}

function insert_data($query_enviado)
{
    include('conexion.php');
    $sql = $query_enviado;
    $respuesta = false;
    if ($conn->query($sql) === TRUE) {
        $respuesta = true;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        $respuesta = false;
    }
    $conn->close();
    return $respuesta;
}

function update_data($query_enviado)
{
    include('conexion.php');
    $sql = $query_enviado;
    $respuesta = false;
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        $respuesta = true;
    } else {
        echo "Error updating record: " . $conn->error;
        $respuesta = false;
    }
    $conn->close();
    return $respuesta;
}

function delete_data($query_enviado)
{
    include('conexion.php');
    // sql to delete a record
    $sql = "DELETE FROM MyGuests WHERE id=3";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    $conn->close();
}
