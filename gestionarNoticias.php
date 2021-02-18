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
    if(!isset($_SESSION['username'])){
        header("Location: login.php");
    }
    //$IPATH = $_SERVER["DOCUMENT_ROOT"]."/";
    include("menu_administrador.html");
?>

    <br>

    <div class="container" align="center">
    <h2>Siga las instrucciones de este vídeo para poder insertar vídeos en las noticias</h2>
    <h3>Se necesita copiar la url de la etiqueta (iframe) que se genera</h3>
    <h3>Ejemplo: https://www.youtube.com/embed/iwaUan_AA2A</h3>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/iwaUan_AA2A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
        <br><br>
    <div class="row">
        <div class="col-md-6">
            <img src="img/logo.png" width="75" height="75">
            <h2>&emsp;&emsp;&emsp;&emsp;Noticias Disponibles</h2>
        </div>
        <div class="col-md-6">
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <button type="button" class="btn btn-primary px-4" data-toggle="modal"
                data-target="#modalAgregarNoticia">Agregar Noticia</button>
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
                <th class="text-primary">Editar</th>
                <th class="text-primary">Eliminar</th>
                
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
                
                
                <td><a href="news_detail.php?title=<?php echo $row['title']; ?>&date=<?php echo $row['new_date']; ?>&category=<?php echo $row['category']; ?>&image=<?php echo $row['image']; ?>&contain=<?php echo $row['contain']; ?>&video=<?php echo $row["video"];?>" class="btn btn-success">DETALLES</a> </td>

                <td><a href="edit_news.php?new_id=<?php echo $row['new_id']; ?>&title=<?php echo $row['title']; ?>&date=<?php echo $row['new_date']; ?>&category=<?php echo $row['category']; ?>&image=<?php echo $row['image']; ?>&contain=<?php echo $row['contain']; ?>&video=<?php echo $row['video']; ?>" class="btn btn-info">EDITAR</a></td>

                <td><a href="delete_news.php?new_id=<?php echo $row['new_id'];?>" class="btn btn-danger" onClick="return confirm('¿Seguro que quiere eliminar esta noticia?')">ELIMINAR</a></td>
            </tr>
            <?php } ?>
            
        </tbody>
        
    </table>

		</div>
	

    <!-- Modal para agregar noticias -->
    <div class="modal fade" id="modalAgregarNoticia" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="img/logo.png" width="75" height="75">
                    <h2 class="modal-title">Agregar Noticia</h2>
                    <button type="button" class="close" data-dismiss="modal">X</button>
                </div>

                <div class="modal-body">
                    <form action="insert_new.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="new_title">Titulo</label>
                                    <input type="text" class="form-control" name="new_title"
                                        placeholder="Ingrese el título de la noticia" autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <label for="new_category">Categoría</label>
                                     <select class="form-control" name="new_category">
                                       <option>HISTORIA</option>
                                       <option>CULTURA</option>
                                       <option>AVENTURA</option>
                                       <option>NATURALEZA</option>
                                     </select>
                                </div>
                                <div class="form-group">
                                <label for="new_contain">Contenido</label>
                                    <textarea required class="form-control" name="new_contain" placeholder="Escriba el contenido de la noticia" rows="3" autocomplete="off"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="new_image">URL de la imagen (click derecho y copiar ruta)</label>
                                    <input required type="text" class="form-control" name="new_image"
                                        placeholder="Ingrese la url de la imagen de la noticia" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="new_video"> del vídeo</label>
                                    <input required type="text" class="form-control" name="new_video"
                                        placeholder="Ingrese el IFRAME del vídeo de la noticia" autocomplete="off">
                                </div>
                                <div class="form-group">
                             <input type="submit" class="btn btn-success" value="Registrar Noticia">
                                </div>
                                </div>
                            </div>
                        
                    </form>
                </div>

                <div class="modal-footer">
                    <label hidden="hidden"></label>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

  

    <div class="modal fade" id="modalBorrarNoticia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Eliminar Noticia
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¿ Desea eliminar esta noticia noticia ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" onclick="eliminarNoticia();">Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <?php
    //$IPATH = $_SERVER["DOCUMENT_ROOT"]."/";
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