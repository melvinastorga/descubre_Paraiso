<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}


$new_id = $_GET['new_id']; 
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
    
    include("menu_administrador.html");
    
   
    ?>

    <br>

        <br><br>
    <div class="row">
        <div class="col-md-6">
            <img src="img/logo.png" width="100" height="100">
        </div>

        <div align="center" class="container">
		<h3 align="center" class="text-primary"><b>Editar Noticia<b></h3>
		
    <form action="edit_news2.php" method="POST">

    <?php         
       echo " <div class='form-group'> ";
       echo "     <label for='id_new'>ID:</label> ";
       echo "         <input required type='text' placeholder='Digite el ID' class='form-control' name='new_id' autocomplete='off' readonly value='$new_id'>  ";
       echo "     </div> ";
       echo "     <div class='form-group'> ";
       echo "     <label for='new_title'>Título:</label> ";
       echo "         <input required type='text' placeholder='Digite el título' class='form-control' name='new_title' autocomplete='off'  value='$title'> ";
       echo "     </div> ";
       echo "     <div class='form-group'> ";
       echo "     <label for='new_date'>Fecha:</label> ";
       echo "         <input required type='text' placeholder='Digite la fecha' class='form-control' name='new_date' readonly autocomplete='off' value='$date'> ";
       echo "     </div> ";
       echo "     <div class='form-group'> ";
      echo "     <label for='new_category'>Categoría:</label> ";
    echo "  <select class='form-control' name='new_category'> ";
    echo "  <option>HISTORIA</option> ";
   echo "   <option>CULTURA</option> ";
    echo "  <option>AVENTURA</option> ";
    echo "  <option>NATURALEZA</option> ";
  echo "  </select> ";
       echo "     </div> ";
       echo "     <div class='form-group'> ";
       echo "     <label for='new_image'>URL de la imagen:</label> ";
       echo "         <input required type='text' placeholder='Digite la URL de la imagen' class='form-control' name='new_image' autocomplete='off' value='$image'> ";
       echo "     </div> ";
       echo "     <div class='form-group'> ";
       echo "     <label for='new_contain'>Contenido:</label> ";
       echo " <textarea required class='form-control' name='new_contain' placeholder='Escriba el contenido de la noticia' rows='3' autocomplete='off'>$contain</textarea>";
       
       echo "     </div> ";
       echo "     <div class='form-group'> ";
       echo "     <label for='new_video'>Escriba el IFRAME del vídeo:</label> ";
       echo "         <input required type='text' placeholder='Digite el IFRAME del video' class='form-control' name='new_video' autocomplete='off' value='$video'> ";
       echo "     </div> ";
       ?>
           <div class='form-group'>
               <input type='submit' class='btn btn-success' value='Editar Noticia'>
           </div>
            
            </form>

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