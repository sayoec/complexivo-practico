<?php

include('./conexion.php');


//Recuperar datos de la base de datos
function select_data($query_enviado)
{
    /* Conexion a la base de datos */
    include('./conexion.php');
    /* Conexion a la base de datos */


    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
        }
    } else {
        echo "0 results";
    }


    
    $conn->close();
}

function insert_data($query_enviado)
{
    include('./conexion.php');
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
            VALUES ('John', 'Doe', 'john@example.com')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

function update_data($query_enviado)
{
    include('./conexion.php');
    $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
}

function delete_data($query_enviado)
{
    include('./conexion.php');
    // sql to delete a record
    $sql = "DELETE FROM MyGuests WHERE id=3";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    $conn->close();
}
?>
