<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Home - Descubre Paraíso</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet"
	href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>
<?php
include ("menu.html");
include ("euclideanAlgorithm.php");


?>

    <div class="row">
		<h2 class="col-md-6">Descubre Paraíso</h2>
	</div>

	<div class="row">
		<h3 class="col-md-6">&emsp;&emsp;&emsp;Lugares para visitar:</h3>
	</div>

	<div id="demo" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
			<li data-target="#demo" data-slide-to="3"></li>
			<li data-target="#demo" data-slide-to="4"></li>
			<li data-target="#demo" data-slide-to="5"></li>
			<li data-target="#demo" data-slide-to="6"></li>
			<li data-target="#demo" data-slide-to="7"></li>
			<li data-target="#demo" data-slide-to="8"></li>
		</ul>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/ana.jpeg" width="1348" height="610">
				<div class="carousel-caption">
					<p>Laguna Doña Ana</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/cachi.jpeg" width="1348" height="610">
				<div class="carousel-caption">
					<p>Lago Cachi</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/catarata.jpeg" width="1348" height="610">
				<div class="carousel-caption">
					<p>Catarata salto de la novia</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/jardin.jpeg" width="1348" height="610">
				<div class="carousel-caption">
					<p>Jardín Botánico Lankester</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/mirador.jpeg" width="1348" height="610">
				<div class="carousel-caption">
					<p>Mirador de Orosi</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/orosi.jpeg" width="1348" height="610">
				<div class="carousel-caption">
					<p>Iglesia Colonial de Orosi</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/ruinas.jpg" width="1348" height="610">
				<div class="carousel-caption">
					<p>Ruinas de Ujarrás</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/termales.jpeg" width="1348" height="610">
				<div class="carousel-caption">
					<p>Hacienda Orosi - Aguas Termales Minerales</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/ujarras.jpeg" width="1348" height="610">
				<div class="carousel-caption">
					<p>Mirador de Ujarrás</p>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#demo" data-slide="prev"> <span
			class="carousel-control-prev-icon"></span>
		</a> <a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
	</div>

	<br>
	<br>

	<h2 class="col-sm-6">Filtrar</h2>
	<main class="container">
	<div class="container py-5">
		<div class="row">
			<form method="post" action="rutas.php">
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
							<button type="button" onclick="loadSitios();"
								class="btn btn-primary px-4 float-right">Aceptar</button>
						</div>
						<div class="col-sm-6">
							<button type="button" class="btn btn-primary px-4 float-right">Cancelar</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	</div>
	</main>

    <?php
    // $IPATH = $_SERVER["DOCUMENT_ROOT"]."/";
    include ("footer.html");
    ?>
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"
		integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
		crossorigin="anonymous"></script>
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script
		src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>
	<script src="js/rutas.js"></script>

</body>

</html>