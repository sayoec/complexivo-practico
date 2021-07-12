<script>
    function registrar() {
        var correo = document.getElementById("correo").value;
        var password = document.getElementById("password").value;
        var cedula = document.getElementById("cedula").value;
        var nombre = document.getElementById("nombre").value;
        var apellido = document.getElementById("apellido").value;

        console.log(correo+' '+password+' '+cedula+' '+nombre+' '+apellido)
        if (cedula.length < 10) {
            document.getElementById("cedula-message").innerHTML = 'Minimo 10 caracteres';
            return
        } else {
            document.getElementById("cedula-message").innerHTML = '';
        }

         var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
            console.log(this)
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("formulario").innerHTML = '<div class="alert alert-success" role="alert">Usuario Registrado con exito</div>';
            }else{
              document.getElementById("formulario-mensaje").innerHTML = 'Sucedio algun error y el usuario no se pudo registrar. ';
            }
          };
          xmlhttp.open("GET","src/paginas/funciones/fun_registrarse.php?correo="+correo+"&password="+password+"&cedula="+cedula+"&nombre="+nombre+"&apellido="+apellido,true);
          xmlhttp.send();
    }
</script>
<div id="formulario">
<h1>Registrarse</h1>
<div  id="formulario-mensaje"class="text-danger" role="alert"><b></b></div>
</br>
<form class="row g-3">
    <div class="col-md-6">
        <label for="correo" class="form-label">Correo Electrónico</label>
        <input type="email" class="form-control" id="correo">
    </div>
    <div class="col-md-6">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password">
    </div>
    <div class="col-12">
        <label class="form-label">Cedula </label>
        <input type="text" class="form-control" id="cedula">
        <div id="cedula-message" class="text-danger"></div>
    </div>
    <div class="col-6">
        <label class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre">
    </div>
    <div class="col-6">
        <label class="form-label">Apellido</label>
        <input type="text" class="form-control" id="apellido">
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="button" onclick="registrar()">Button</button>
    </div>
</form>

</div>