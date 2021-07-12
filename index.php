<?php
include './src/database/CRUD.php';


//echo $_GET['pagina'];

switch ($_GET['pagina']) {
    case 'buscador':
        include 'src/paginas/Buscador.php';
        break;
    default:
        echo 'Hola';
        break;
}




?>