<?php
// Iniciamos la sesion
session_start();
 

// Destruir todo en esta sesión
session_destroy();
echo "<script>window.location.replace('?pagina=login')</script>";

?>