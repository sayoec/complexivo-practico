<?php
session_start();
if (isset($_SESSION['cli_cedula'])) {
  //echo ' Existe la sesion'.$_SESSION['cli_cedula'];
} else {
  if (!isset($_GET['pagina'])) {
    echo "<script>window.location.replace('?pagina=login')</script>";
  } else {
    if ($_GET['pagina'] == 'login'  || $_GET['pagina'] == 'registrarse') {
    } else {
      echo "<script>window.location.replace('?pagina=login')</script>";
    }
  }
}
?>


<header>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24">
          <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
          <circle cx="12" cy="13" r="4" />
        </svg>
        <strong>Examen Complexivo</strong>
      </a>
      <div class="d-flex flex-row">
        <?php
        if (!isset($_SESSION['cli_cedula'])) { ?>
          <a class="nav-link" href="?pagina=registrarse">Registrarse</a>
          <a class="nav-link" href="?pagina=login">Iniciar Sesion</a>
        <?php } else { ?>
          <a class="nav-link" href="?pagina=buscador">Consultas</a>
          <a class="nav-link" href="?pagina=servicio">Registra Nuevo Servicio</a>
          <a class="nav-link" href="?pagina=logout">Cerrar Sesión</a>


        <?php }   ?>

      </div>
    </div>
  </div>
</header>