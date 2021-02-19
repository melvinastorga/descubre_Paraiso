<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mapa del Sitio - Descubre Paraíso</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>
<?php
    //$IPATH = $_SERVER["DOCUMENT_ROOT"]."/";
    include("menu.html");
    ?>

    <h2 class="col-sm-6">Descubre Paraíso</h2>
    <main class="container">
        <div class="container py-5">
            <div class="row">
            <div class="col-lg-2">
                <img src="img/logo.png" width="180" height="180" />
            </div>
                <div class="col-lg-4">
                    <br>
                    <p>Mapa del Sitio<br>
                        &emsp;<a href="about.php">Acerca de</a><br>
                        &emsp;<a href="rutas.php">Buscar Ruta</a><br>
                        &emsp;<a href="buscar_categoria.php">Buscar Sitio</a><br>
                        &emsp;<a href="login.php">Iniciar Sesión</a><br>
                        &emsp;<a href="noticias.php">Noticias</a><br>
                </div>
            </div>
        </div>



    </main>



    <?php
    //$IPATH = $_SERVER["DOCUMENT_ROOT"]."/";
    include("footer.html");
    ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>

</html>