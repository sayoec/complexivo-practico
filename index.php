<?php include 'header.php'; ?>

<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
      <?php
            include './src/database/CRUD.php';
            switch ($_GET['pagina']) {
                case 'buscador':
                    include 'src/paginas/Buscador.php';
                    break;
                case 'registrarse':
                    include 'src/paginas/registrarse.php';
                    break;
                case 'login':
                    include 'src/paginas/login.php';
                    break;
                default:
                    echo '';
                    break;
            }
            ?>
      </div>
    </div>
  </section>

<main>
    <div class="album py-5 bg-light">
        <div class="container">          
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