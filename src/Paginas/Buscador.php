<div id="formulario">
  <h1>Solicitar Servicio</h1>
  <div id="formulario-mensaje" class="text-danger" role="alert"><b></b></div>
  </br>
  <p>
    Numero de Cedula:
    <?php echo  $_SESSION['cli_cedula']; ?>
  </p>
  <p>
    Nombre :
    <?php echo  $_SESSION['cli_nombre']; ?>
  </p>
  <p>
    Apellido :
    <?php echo  $_SESSION['cli_apellido']; ?>
  </p>
  <form class="row g-3">
    <select id="selectadd" name="users">
      <option value="">Seleccionar el servicio:</option>
      <option value="1">Telefonia</option>
      <option value="2">Internet</option>
    </select>
    <div id="mensaje-servicio" class="text-danger" role="alert"><b></b></div>
    <div class="col-12">
      <button class="btn btn-primary" type="button" onclick="addservice()">Solicitar Servicio</button>
    </div>
  </form>

</div>
</br>

<form>
  <select id="select" name="users" onchange="showUser()">
    <option value="">Seleccionar el servicio:</option>
    <option value="1">Telefonia</option>
    <option value="2">Internet</option>
  </select>
</form>
<br>
<div id="txtHint"><b>Datos a visualizar</b></div>






<script>
  window.onload = showUser();

  function showUser() {
    var parametro1 = document.getElementById("select").value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      console.log(this)
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      } else {
        document.getElementById("txtHint").innerHTML = 'Error en la consulta';
      }
    };
    if (parametro1 != '') {
      xmlhttp.open("GET", "src/paginas/funciones/fun_buscador.php?parametro=" + parametro1, true);
    } else {
      xmlhttp.open("GET", "src/paginas/funciones/fun_buscador.php", true);
    }
    xmlhttp.send();

  }

  function addservice() {

    var servicio = document.getElementById("selectadd").value;
    if (servicio == '') {
      document.getElementById("mensaje-servicio").innerHTML = 'Seleccionar un servicio';
      return;
    } else {
      document.getElementById("mensaje-servicio").innerHTML = '';
    }

    //ENVIAR NUEVO SERVICIO
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      console.log(this)
      if (this.readyState == 4 && this.status == 200) {
        window.location.replace('?pagina=buscador');
      } else {
        document.getElementById("txtHint").innerHTML = 'Error en la consulta';
      }
    };
    xmlhttp.open("GET", "src/paginas/funciones/fun_servicio.php?servicio=" + servicio, true);
    xmlhttp.send();

  }



  function aprobar(cls_id) {

    //aprobar un servicio
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      console.log(this)
      if (this.readyState == 4 && this.status == 200) {
        window.location.replace('?pagina=buscador');
      } else {
        document.getElementById("txtHint").innerHTML = 'Error en la consulta';
      }
    };
    xmlhttp.open("GET", "src/paginas/funciones/fun_complemento.php?estado=aprobado&cls_id=" + cls_id, true);
    xmlhttp.send();

  }

  function rechazar(cls_id) {

    //aprobar un servicio
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      console.log(this)
      if (this.readyState == 4 && this.status == 200) {
        window.location.replace('?pagina=buscador');
      } else {
        document.getElementById("txtHint").innerHTML = 'Error en la consulta';
      }
    };
    xmlhttp.open("GET", "src/paginas/funciones/fun_complemento.php?estado=rechazado&cls_id=" + cls_id, true);
    xmlhttp.send();

  }
</script>