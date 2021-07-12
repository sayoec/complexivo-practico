<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "complexivotest";

$conn = new mysqli($servername, $username, $password, $dbname);
//Posible error al conectarse a la BD
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>