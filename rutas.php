<!DOCTYPE html>
<html lang="en">

<head>
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

<!-- Formulario para buscar rutas -->
<h2 class="col-sm-6">Filtrar</h2>
	<main class="container">
	<div class="container py-5">
		<div class="row">
			<form method="post">
				<div class="col-md-10 mx-auto">
					<div class="form-group row">
						<div class="col-sm-6">
							<label>Precio</label>
							<div class="dropdown">
								<select id="priceSearch" class="form-control"
									aria-label="Default select example">
									<option value="1">0 - 25 000 colones</option>
									<option value="2">25 000 - 50 000 colones</option>
									<option value="3">50 0000 colones o más</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<label>Tipo de Turista</label>
							<div class="dropdown">
								<select id="turistTypeSearch" class="form-control"
									aria-label="Default select example">
									<option value="1">Nacional</option>
									<option value="2">Extranjero</option>
									<option value="3">Ambos</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<label>Edad</label>
							<div class="dropdown">
								<select id="ageSearch" class="form-control"
									aria-label="Default select example">
									<option value="1">0 - 17 años</option>
									<option value="2">18 - 40 años</option>
									<option value="3">Más de 40 años</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<label>Ubicación</label>
							<div class="dropdown">
								<select id="placeSearch" class="form-control"
									aria-label="Default select example">
									<option value="1">Paraíso</option>
									<option value="2">Cachí</option>
									<option value="3">Orosi</option>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-6">
							<label>Categoría</label> <select id="categorySearch"
								class="form-control" name="agregarCategoriaSitio">
								<option value="1">Restaurante</option>
								<option value="2">Naturaleza</option>
								<option value="3">Recreación</option>
							</select>
						</div>

					</div>
					<div class="form-group row">
						<div class="col-sm-6">
							<button type="button" onclick="loadSitios()"
								class="btn btn-primary px-4 float-right">Aceptar</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	</div>
	</main>

    <hr width=90% size=20  color="#86ac41">

    <div class="row">
        <h3 class="col-sm-6">&emsp;&emsp;&emsp;Ruta sugerida:</h3>
        <div class="col-sm-6">
            <button type="button" onclick="resetRuta()" class="btn btn-primary px-4">Limpiar</button>
		</div>
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
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
		integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
		crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>

</html>