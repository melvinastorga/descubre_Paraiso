<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar categorías - Descubre Paraíso</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/crear_categorias.css">
</head>

<body>
<?php
    //$IPATH = $_SERVER["DOCUMENT_ROOT"]."/";
    include("menu_administrador.html");
    ?>

    
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-2">
                <img src="img/logo.png" width="180" height="180" />
            </div>
            <div class="col-lg-5">
                <h3>Modificar Categorías</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-2">
                <p>Nombre:</p>
            </div>
            <div class="col-lg-5">
                <input type="text" id="name" name="name" required=true>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-2">
                <p>Descripción:</p>
            </div>
            <div class="col-lg-5">
                <textarea name="description" id="description" cols="20" rows="3" required=true></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5">
                <p class="text-primary" id="success" hidden=true>La categoría se guardo correctamente</p>
                <p class="text-danger" id="error" hidden=true>Ocurrio un error</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5">

                    <button class="btn btn-success" onclick="save()">Guardar</button>&nbsp;&nbsp;&nbsp;&nbsp;
                    <button class="btn btn-warning" onclick="clean()">Cancelar</button>
              
            </div>
        </div>
    </div>

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
        <script src="js/modificar_categorias.js"></script>
</body>

</html>