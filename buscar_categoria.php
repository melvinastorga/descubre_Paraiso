<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buscar Ruta - Descubre Paraíso</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>
   
<?php
    //$IPATH = $_SERVER["DOCUMENT_ROOT"]."/";
    include("menu.html");
    ?>

    <h2 class="col-sm-6">Filtrar Sitios</h2>
    <main class="container">
        <div class="container py-5">
            <div class="row">
            
                <div class="form-group row">
                    <label for="inputCity">Categoría</label>
                    <select class="form-control" name="agregarCategoriaSitio">
                        <option value="1">Restaurante</option>
                        <option value="2">Reserva Forestal</option>
                        <option value="3">Parque Nacional</option>
                        <option value="4">Termales</option>
                        <option value="5">Hotel</option>
                    </select>
                </div>
                <br>
                <br>
            </div>
            <div class="row">
                <div class="card">
                    <h5 class="card-header">La Casona del Cafetal</h5>
                    <div class="card-body">
                        <h5 class="card-title">Restaurante</h5>
                        <p class="card-text">Familiar - Comida tipica</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSitioCategoria">
                            Ver mas
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalSitioCategoria" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <img src="img/logo.png" width="75" height="75">
                        <h2 class="modal-title">Información Sitio</h2>
                        <button type="button" class="close" data-dismiss="modal">X</button>
                    </div>
    
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nombre:</label>
                                        <label id="nombreSitio"> La Casona del Cafetal</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Ubicación:</label>
                                        <label id="ubicacionSitio">Cachi</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Rango de precios:</label>
                                        <label id="precioSitio">50 000 colones o más</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Tipo de turistas:</label>
                                        <label id="tipoTuristaSitio">Nacional</label>
                                        <label id="tipoTuristaSitio">Extranjero</label>
                                    </div>
                                </div>
    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Edad ideal para el sitio:</label>
                                        <label id="edadSitio">0 años en adelante</label>
    
                                    </div>
                                    <div class="form-group">
                                        <label>Categoría:</label>
                                        <label id="categoriaSitio">Restaurante</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Descripción:</label>
                                        <label id="descripcionSitio">Restaurante de comidas típicas, ambiente familiar</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                    </div>
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