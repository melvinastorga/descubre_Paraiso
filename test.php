<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Sitios - Descubre Paraíso</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet"
	href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<script src="js/sitios.js"></script>
</head>

<body>
<?php
// $IPATH = $_SERVER["DOCUMENT_ROOT"]."/"
include("euclideanAlgorithm.php");

IF ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    getRuthPlace (1, 1, 1, 1, 1, $conn); 
    
}

?>

    <br>

	<div class="row">
		<div class="col-md-6">
		</div>
		<form action="" method="post">
			<div class="col-md-6">
			
				<input type="submit" name="submit" value="Submit">
			</div>
		</form>
	</div>

	<br>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script
		src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>

</body>

</html>