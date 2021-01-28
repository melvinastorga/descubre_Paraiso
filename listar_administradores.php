<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administradores - Descubre Paraíso</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/listar_categorias.css">
</head>

<body>
<?php
    //$IPATH = $_SERVER["DOCUMENT_ROOT"]."/";
    include("menu_administrador.html");
    ?>

    
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <img src="img/logo.png" width="180" height="180" />
            </div>
            <div class="col-lg-7">
                <h3>Administradores</h3>
            </div>
            <div class="col-lg-2">
                <div class="button-container">
                    <a href="crear_administrador.html"  class="btn btn-success agregar">Agregar</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-10">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Gestionar</th>
                      </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr>
                            <td>Melvin</td>
                            <td>Astorga</td>
                            <td>melvin.astorga.24</td>
                            <td>
                                <a href="modificar_administradores.html" class="btn btn-info">Modificar</a>
                                <button type="button" class="btn btn-danger">Eliminar</button>
                            </td>
                          </tr>
                          <tr>
                            <td>Melissa</td>
                            <td>Ramírez</td>
                            <td>melissa.remirez.02</td>
                            <td>
                                <a href="modificar_administradores.html" class="btn btn-info">Modificar</a>
                                <button type="button" class="btn btn-danger">Eliminar</button>
                            </td>
                          </tr>
                      
                    </tbody>
                  </table>
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
    <script src="js/listar_categorias.js"></script>

</body>

</html>