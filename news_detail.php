<?php

$title = $_GET['title'];
$date = $_GET['date'];
$category = $_GET['category'];
$image = $_GET['image'];
$contain = $_GET['contain'];
$video = $_GET['video'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Noticias - Descubre Paraíso</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="js/noticias.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>

<body>
<?php
    //$IPATH = $_SERVER["DOCUMENT_ROOT"]."/";
    include("menu_administrador.html");
    ?>

    <br>

    <div class="container" align="center">
    
    </div>
        <br><br>
    <div class="row">
        <div class="col-md-6">
            <img src="img/logo.png" width="100" height="100">
            <h2>&emsp;&emsp;&emsp;&emsp;Detalles de la Noticia</h2>
        </div>
        <div class="container" align="center">
          
        <?php
        echo "<h2> Título: $title </h2>";
        echo "<input type='text'  value='$video prueba'>";
        echo "<h3> Categoría: $category </h3>";
        echo "<h3> Publicado: $date </h3>";
        echo "<br>";
        echo "<img src='$image' alt=''>";
        echo "<br>";
        echo "<br>";
        echo "<p>$contain</p>";
        echo "<br>";
        echo "<br>";
        $result = str_replace('"',"'",$video);
        echo $video;
        echo "<script>";
        echo "console.log('$result A'); ";
        echo "</script>";
        echo "<input type='text'  value='$result prueba'>";
        ?>


        </div>
    </div>

    <br>

    
	

    <?php
    include("footer.html");
    ?>

    
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
   <script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

</body>

</html>