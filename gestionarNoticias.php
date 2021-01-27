<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sitios - Descubre Paraíso</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="js/noticias.js"></script>
</head>

<body>
<?php
    //$IPATH = $_SERVER["DOCUMENT_ROOT"]."/";
    include("menu_administrador.html");
    ?>

    <br>

    <div class="row">
        <div class="col-md-6">
            <img src="img/logo.png" width="75" height="75">
            <h2>&emsp;&emsp;&emsp;&emsp;Noticias Disponibles</h2>
        </div>
        <div class="col-md-6">
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <button type="button" class="btn btn-primary px-4" data-toggle="modal"
                data-target="#modalAgregarNoticia">Agregar</button>
        </div>
    </div>

    <br>

    <!-- Tabla con sitios disponibles -->
    <div class="container">
        <div class="table-responsive-sm">
            <table class="table table-bordered table-hover" name="tablaNoticia">
                <thead>
                    <tr>
                        <th>
                            Titulo
                        </th>
                        <th>
                            Fecha
                        </th>
                        <th>
                            Opción
                        </th>
                    </tr>
                </thead>
                <tbody class="tbody">
                    </tr>
                    <td>La Casona de Cachí: 20 años de historia</td>
                    <td>20/09/2020</td>
                    <td><a href="#" onclick="abrirModalEditarNoticia();">Editar</a> | <a href="#"
                            onclick="abrirModalBorrarNoticia();">Borrar</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
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
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Titulo</label>
                                    <input type="text" class="form-control" name="agregarTitulo"
                                        placeholder="Ingrese el nombre del sitio" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Fecha de Publicación</label>
                                    <input type="text" class="form-control" name="agregarFechaPublicacion"
                                        placeholder="Ingrese el nombre del sitio" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Contenido</label>
                                    <textarea class="form-control rounded-0" id="agregarContenido" rows="3">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <label hidden="hidden"></label>
                    <button type="button" class="btn btn-primary" onclick="agregarNoticia();">Agregar</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para editar sitios -->
    <div class="modal fade" id="modalEditarNoticia" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="img/logo.png" width="75" height="75">
                    <h2 class="modal-title">Editar Noticia</h2>
                    <button type="button" class="close" data-dismiss="modal">X</button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Titulo</label>
                                    <input type="text" class="form-control" name="editarTitulo"
                                        placeholder="Ingrese el nombre del sitio" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Fecha de Publicación</label>
                                    <input type="text" class="form-control" name="editarFechaPublicacion"
                                        placeholder="Ingrese el nombre del sitio" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Contenido</label>
                                    <textarea class="form-control rounded-0" id="editarContenido" rows="3">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <label hidden="hidden"></label>
                    <button type="button" class="btn btn-primary" onclick="editarNoticia();">Guardar</button>
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

</body>

</html>