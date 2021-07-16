
<?php
include '../../database/CRUD.php';
session_start();



if ($_SESSION['tipo_cuenta'] == 'admin') {

  if (isset($_GET['parametro'])) {
    $service = $_GET['parametro'];
    $respuesta = select_data("SELECT * FROM cliente_servicio cs LEFT JOIN servicio s ON cs.ser_id = s.ser_id where cs.ser_id = " . $service . " ");
  } else {
    $respuesta = select_data("SELECT * FROM cliente_servicio cs LEFT JOIN servicio s ON cs.ser_id = s.ser_id ");
  }



  echo "<table class='table table-striped'>
<thead>
<tr>
<th>Numero de Registro</th>
<th>Cedula</th>
<th>Servicio</th>
<th>Estado</th>
<th>Precio</th>
<th>Fecha</th>
<th>Aprobar</th>
<th>Rechazar</th>
</tr>
</thead>
<tbody>";
  for ($i = 0; $i < count($respuesta); $i++) {
    echo "<tr>";
    echo "<td>" . $respuesta[$i]['cls_id'] . "</td>";
    echo "<td>" . $respuesta[$i]['cli_cedula'] . "</td>";
    echo "<td>" . $respuesta[$i]['ser_nombre'] . "</td>";
    echo "<td>" . $respuesta[$i]['cls_estado'] . "</td>";
    echo "<td>" . $respuesta[$i]['ser_precio'] . "</td>";
    echo "<td>" . $respuesta[$i]['cls_fecha'] . "</td>";
    echo '<td> <button class="btn btn-primary" type="button" onclick="aprobar('.$respuesta[$i]['cls_id'].')">Aprobar</button></td>';
    echo '<td> <button class="btn btn-danger" type="button" onclick="rechazar('.$respuesta[$i]['cls_id'].')">Rechazar</button></td>';
    echo "</tr>";
  }
  echo "</tbody></table>";






} else {
  if (isset($_GET['parametro'])) {
    $service = $_GET['parametro'];
    $respuesta = select_data("SELECT * FROM cliente_servicio cs LEFT JOIN servicio s ON cs.ser_id = s.ser_id where cs.ser_id = " . $service . " and cs.cli_cedula = " . $_SESSION['cli_cedula'] . "");
  } else {
    $respuesta = select_data("SELECT * FROM cliente_servicio cs LEFT JOIN servicio s ON cs.ser_id = s.ser_id WHERE cs.cli_cedula = " . $_SESSION['cli_cedula'] . "");
  }
  //tipo de usuario cliente
  echo "<table class='table table-striped'>
<thead>
<tr>
<th>Cedula</th>
<th>Servicio</th>
<th>Estado</th>
<th>Precio</th>
<th>Fecha</th>
</tr>
</thead>
<tbody>";
  for ($i = 0; $i < count($respuesta); $i++) {
    echo "<tr>";
    echo "<td>" . $respuesta[$i]['cli_cedula'] . "</td>";
    echo "<td>" . $respuesta[$i]['ser_nombre'] . "</td>";
    echo "<td>" . $respuesta[$i]['cls_estado'] . "</td>";
    echo "<td>" . $respuesta[$i]['ser_precio'] . "</td>";
    echo "<td>" . $respuesta[$i]['cls_fecha'] . "</td>";
    echo "</tr>";
  }
  echo "</tbody></table>";
}


?>
