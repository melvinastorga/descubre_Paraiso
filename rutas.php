<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.5.0/css/ol.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.5.0/build/ol.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rutas - Descubre Paraíso</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>
<?php
    //$IPATH = $_SERVER["DOCUMENT_ROOT"]."/";
    include("menu.html");
?>

    <div class="row">
        <h2 class="col-md-6">Descubre Paraíso</h2>
    </div>

    <div class="row">
        <h3 class="col-md-6">&emsp;&emsp;&emsp;Ruta sugerida:</h3>
    </div>
    <br>

    <!-- Mostrar mapa -->
    <div id="mapa"></div>
    <script src="js/rutas.js"></script>
    <div class="row">
        <h4>&emsp;&emsp;&emsp;&emsp;Haga click sobre cada marcador para ver el lugar.</h4>
    </div>
    <br>

    <!-- Modal para mostrar sitios -->
    <div class="modal fade" id="modalSitio" tabindex="-1" role="dialog">
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
                                    <label id="nombreSitio"></label>
                                </div>
                                <div class="form-group">
                                    <label>Ubicación:</label>
                                    <label id="ubicacionSitio"></label>
                                </div>
                                <div class="form-group">
                                    <label>Rango de precios:</label>
                                    <label id="precioSitio"></label>
                                </div>
                                <div class="form-group">
                                    <label>Tipo de turistas:</label>
                                    <label id="tipoTuristaSitio"></label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Edad ideal para el sitio:</label>
                                    <label id="edadSitio"></label>

                                </div>
                                <div class="form-group">
                                    <label>Categoría:</label>
                                    <label id="categoriaSitio"></label>
                                </div>
                                <div class="form-group">
                                    <label>Descripción:</label>
                                    <label id="descripcionSitio"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <img id="imagenSitio" width="500" height="300"/>
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

    <?php
    //$IPATH = $_SERVER["DOCUMENT_ROOT"]."/";
    include("footer.html");
    ?>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>

</html>