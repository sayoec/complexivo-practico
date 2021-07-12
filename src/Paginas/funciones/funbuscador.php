<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>
<script>console.log('buscador funcion')</script>
<?php
include '../../database/CRUD.php';
$q = intval($_GET['q']);

$respuesta = select_data('SELECT * FROM cliente');



echo "<table>
<tr>
<th>Cedula</th>
<th>Nombre</th>
<th>Apellido</th>
</tr>";
for ($i=0; $i < count($respuesta); $i++) { 
  echo "<tr>";
  echo "<td>" . $respuesta[$i]['cli_cedula'] . "</td>";
  echo "<td>" . $respuesta[$i]['cli_nombre'] . "</td>";
  echo "<td>" . $respuesta[$i]['cli_apellido'] . "</td>";
  echo "</tr>";
}
echo "</table>";



?>
</body>
</html>