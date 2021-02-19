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
    include("menu.html");
    ?>

    <br>

        <br><br>
    <div class="row">
        <div class="col-md-6">
            <img src="img/logo.png" width="75" height="75">
            <h2>&emsp;&emsp;&emsp;&emsp;Noticias</h2>
        </div>
        
    </div>

    <br>

    <!-- Tabla con sitios disponibles -->
    
		<div class="container" >
             <table id="example" class="display" style="width:100%" align="center" margin-right=50>
        <thead>
            <tr>
                <th class="text-primary">ID</th>
                <th class="text-primary">Título</th>
                <th class="text-primary">Categoría</th>
                <th class="text-primary">Fecha Publicación</th>
                <th class="text-primary">Detalles</th>
                
            </tr>
        </thead>
        <tbody>
        	<?php
        	      include("connection_guapiles.php");
                  $query ="SELECT * FROM news";
                  $sql = mysqli_query($connection,$query);
                  while($row = mysqli_fetch_array($sql))
                  {

        	?>
            <tr>
                <td><?php echo $row["new_id"];?></td>
                <td><?php echo $row["title"];?></td>
                <td><?php echo $row["category"];?></td>
                <td><?php echo $row["new_date"];?></td>
                
                
                <td><a href="news_detail2.php?title=<?php echo $row['title']; ?>&date=<?php echo $row['new_date']; ?>&category=<?php echo $row['category']; ?>&image=<?php echo $row['image']; ?>&contain=<?php echo $row['contain']; ?>&video=<?php echo $row["video"];?>" class="btn btn-success">DETALLES</a> </td>

            </tr>
            <?php } ?>
            
        </tbody>
        
    </table>

		</div>
	

  
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