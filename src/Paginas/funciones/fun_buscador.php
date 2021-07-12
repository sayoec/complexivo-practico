
<?php
include '../../database/CRUD.php';
$q = intval($_GET['q']);

$respuesta = select_data('SELECT * FROM cliente');



echo "<table class='table table-striped'>
<thead>
<tr>
<th>Cedula</th>
<th>Nombre</th>
<th>Apellido</th>
</tr>
</thead>
<tbody>";
for ($i=0; $i < count($respuesta); $i++) { 
  echo "<tr>";
  echo "<td>" . $respuesta[$i]['cli_cedula'] . "</td>";
  echo "<td>" . $respuesta[$i]['cli_nombre'] . "</td>";
  echo "<td>" . $respuesta[$i]['cli_apellido'] . "</td>";
  echo "</tr>";
}
echo "</tbody></table>";



?>
