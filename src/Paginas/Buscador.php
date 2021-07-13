<div id="formulario">
  <h1>Agregar Servicio</h1>
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
      <option value="1">Internet</option>
      <option value="2">Telefonia</option>
      <option value="3">Datos</option>
    </select>
    <div  id="mensaje-servicio"class="text-danger" role="alert"><b></b></div>
    <div class="col-12">
      <button class="btn btn-primary" type="button" onclick="addservice()">Solicitar Servicio</button>
    </div>
  </form>

</div>

<form>
  <select id="select" name="users" onchange="showUser()">
    <option value="">Seleccionar el servicio:</option>
    <option value="Movistar">Movistar</option>
    <option value="Claro">Claro</option>
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
    if(servicio == ''){
      document.getElementById("mensaje-servicio").innerHTML = 'Seleccionar un servicio';
      return;
    }else{
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
    xmlhttp.open("GET", "src/paginas/funciones/fun_servicio.php?servicio="+servicio, true);
    xmlhttp.send();

  }
</script>