<?php require_once "Funciones.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Busca</title>
</head>
<body>
    <section class="row justify-content-around" id="centro">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0 text-center">Busca información sobre cualquier película</h3>
                </div>
                <div class="card-body">
                    <form class=form role="form" autocomplete="off" action="#" method="post">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Película</label>
                            <div class="col-lg-6 text-center">
                                <input type="text" class="form-control" name="pelicula" id="pelicula" placeholder="Escribe el título original de la plícula" required>
                            </div>
                        </div>
                </div>
                <div class="offset-2"></div>
                <br>
                <br>
                <div class="col-md-2 text-center">
                    <input type="submit" class="btn btn-primary btn-block" value="Buscar"><br>
                </div>
                <div class="offset-2"></div>
                </form>
        </div>
        <div class="row movie-list">
            <img class="card-img-top">

            <?php
            if (isset($_POST['pelicula'])) {
                $funciones = new Funciones();
                $funciones->getPeliculas($_POST['pelicula']);
            }
            ?>
            <h6 class="card-subtitle mb-2 text-muted"></h6>
        </div>
        </div>
    </section>
    <footer class="row bg-dark justify-content-center p-3">
        <h5 class="text-center text-white">Desarrollado por Jose Luis Quintanilla Blanco utilizando <a href="http://www.omdbapi.com">OMDBApi</a></h5>
    </footer>
</body>

</html>