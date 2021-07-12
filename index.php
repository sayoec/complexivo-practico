<?php include 'header.php'; ?>
<main>
    <div class="album py-5 bg-light">
        <div class="container">

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


        </div>
    </div>

</main>
<footer class="text-muted py-5">
    <div class="container">
        <p class="float-end mb-1">
            <a href="#">Back to top</a>
        </p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>