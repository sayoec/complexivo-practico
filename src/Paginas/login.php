<script>
    function login() {
        var correo = document.getElementById("correo").value;
        var password = document.getElementById("password").value;

      if(correo == '' || password == ''){
        document.getElementById("formulario-mensaje").innerHTML = 'Usuario o correo no se ingreso';
        return
      }else{
        document.getElementById("formulario-mensaje").innerHTML = '';
      }
         var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              
            }else{
              document.getElementById("formulario-mensaje").innerHTML = 'Problemas con el usuario o correo';
            }
          };
          xmlhttp.open("GET","src/paginas/funciones/fun_login.php?correo="+correo+"&password="+password,true);
          xmlhttp.send();
    }
</script>
<h1>Login</h1>
</br>
<div  id="formulario-mensaje"class="text-danger" role="alert"><b></b></div>
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
    <input type="email" class="form-control" id="correo" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="password">
  </div>
  <div class="col-12">
        <button class="btn btn-primary" type="button" onclick="login()">Login</button>
    </div>
</form>