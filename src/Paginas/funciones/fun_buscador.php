
<?php
include '../../database/CRUD.php';

if(isset($_GET['parametro'])){
  $cedula = $_SESSION['cli_cedula'];
  $respuesta = select_data("SELECT * FROM cliente_servicio WHERE cli_cedula ='".$cedula."'");
}else{
  $respuesta = select_data('SELECT * FROM cliente_servicio');
}




echo "<table class='table table-striped'>
<thead>
<tr>
<th>Cedula</th>
<th>Servicio</th>
<th>Estado</th>
<th>Precio</th>
</tr>
</thead>
<tbody>";
for ($i=0; $i < count($respuesta); $i++) { 
  echo "<tr>";
  echo "<td>" . $respuesta[$i]['cli_cedula'] . "</td>";
  echo "<td>" . $respuesta[$i]['ser_nombre'] . "</td>";
  echo "<td>" . $respuesta[$i]['cls_estado'] . "</td>";
  echo "<td>" . $respuesta[$i]['ser_precio'] . "</td>";
  echo "</tr>";
}
echo "</tbody></table>";



?>
