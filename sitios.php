<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sitios - Descubre Paraíso</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="js/sitios.js"></script>
</head>

<body>
<?php
    //$IPATH = $_SERVER["DOCUMENT_ROOT"]."/";
    include("menu_administrador.html");
    ?>

    <br>

    <div class="row">
        <div class="col-md-6">
            <h2>&emsp;&emsp;&emsp;&emsp;Sitios Disponibles</h2>
        </div>
        <div class="col-md-6">
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <button type="button" class="btn btn-primary px-4" data-toggle="modal"
                data-target="#modalAgregarSitio">Agregar</button>
        </div>
    </div>

    <br>

    <!-- Tabla con sitios disponibles -->
    <div class="container">
        <div class="table-responsive-sm">
            <table class="table table-bordered table-hover" name="tablaSitios">
                <thead>
                    <tr>
                        <th>
                            Nombre
                        </th>
                        <th>
                            Ubicación
                        </th>
                        <th>
                            Rango de Precios
                        </th>
                        <th>
                            Categoría
                        </th>
                        <th>
                            Opción
                        </th>
                    </tr>
                </thead>
                <tbody class="tbody">
                    <tr>
                        <td>Mirador de Orosi</td>
                        <td>Orosi</td>
                        <td>0 - 10 000 colones</td>
                        <td>Mirador</td>
                        <td><a href="#" onclick="abrirModalEditarSitio();">Editar</a> | <a href="#"
                                onclick="abrirModalBorrarSitio();">Borrar</a></td>
                    </tr>
                    <tr>
                        <td>Mirador de Ujarrás</td>
                        <td>Ujrrás</td>
                        <td>0 - 10 000 colones</td>
                        <td>Mirador</td>
                        <td><a href="#" onclick="abrirModalEditarSitio();">Editar</a> | <a href="#"
                                onclick="abrirModalBorrarSitio();">Borrar</a></td>
                    </tr>
                    <tr>
                        <td>Iglesia Colonial de Orosi</td>
                        <td>Orosi</td>
                        <td>0 - 10 000 colones</td>
                        <td>Iglesia</td>
                        <td><a href="#" onclick="abrirModalEditarSitio();">Editar</a> | <a href="#"
                                onclick="abrirModalBorrarSitio();">Borrar</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal para agregar sitios -->
    <div class="modal fade" id="modalAgregarSitio" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="img/logo.png" width="75" height="75">
                    <h2 class="modal-title">Agregar Sitio</h2>
                    <button type="button" class="close" data-dismiss="modal">X</button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" id="agregarNombreSitio"
                                        name="agregarNombreSitio" placeholder="Ingrese el nombre del sitio"
                                        autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Ubicación</label>
                                    <select class="form-control" name="agregarUbicacionSitio">
                                        <option value="1">Cachí</option>
                                        <option value="2">Orosi</option>
                                        <option value="3">Paraiso</option>
                                        <option value="4">Ujarrás</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Rango de precios</label>
                                    <select class="form-control" name="agregarRangoPreciosSitio">
                                        <option value="1">0 - 10 000 colones</option>
                                        <option value="2">10 000 - 20 000 colones</option>
                                        <option value="3">30 0000 - 40 000 colones</option>
                                        <option value="4">50 000 colones o más</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tipo de turistas</label>
                                    <select class="form-control" name="agregarTipoTuristasSitio">
                                        <option value="1">Nacional</option>
                                        <option value="2">Extranjero</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Latitud</label>
                                    <input type="text" class="form-control" id="agregarLatitudSitio"
                                        name="agregarLatitudSitio" placeholder="Ingrese la latitud del sitio"
                                        autocomplete="off">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Longitud</label>
                                    <input type="text" class="form-control" id="agregarLongitudSitio"
                                        name="agregarLongitudSitio" placeholder="Ingrese la longitud del sitio"
                                        autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Edad ideal para el sitio</label>
                                    <select class="form-control" name="agregarEdadSitio">
                                        <option value="1">0 - 12 años</option>
                                        <option value="2">13 - 17 años</option>
                                        <option value="3">18 - 25 años</option>
                                        <option value="4">25 - 35 años</option>
                                        <option value="5">Más de 35 años</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Categoría</label>
                                    <select class="form-control" name="agregarCategoriaSitio">
                                        <option value="1">Restaurante</option>
                                        <option value="2">Reserva Forestal</option>
                                        <option value="3">Parque Nacional</option>
                                        <option value="4">Termales</option>
                                        <option value="5">Hotel</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>URL imagen</label>
                                    <input type="text" class="form-control" id="agregarUrlSitio" name="agregarUrlSitio"
                                        placeholder="Ingrese la url de la imagen del sitio" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Descripción</label>
                                    <textarea type="text" class="form-control" id="agregarDescripcionSitio"
                                        name="agregarDescripcionSitio" placeholder="Ingrese la descripción del sitio"
                                        autocomplete="off" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <label hidden="hidden"></label>
                    <button type="button" class="btn btn-primary" onclick="agregarSitio();">Agregar</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para editar sitios -->
    <div class="modal fade" id="modalEditarSitio" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="img/logo.png" width="75" height="75">
                    <h2 class="modal-title">Editar Sitio</h2>
                    <button type="button" class="close" data-dismiss="modal">X</button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" id="editarNombreSitio"
                                        name="editarNombreSitio" placeholder="Ingrese el nombre del sitio"
                                        autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Ubicación</label>
                                    <select class="form-control" name="editarUbicacionSitio">
                                        <option value="1">Cachí</option>
                                        <option value="2">Orosi</option>
                                        <option value="3">Paraiso</option>
                                        <option value="4">Ujarrás</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Rango de precios</label>
                                    <select class="form-control" name="editarRangoPreciosSitio">
                                        <option value="1">0 - 10 000 colones</option>
                                        <option value="2">10 000 - 20 000 colones</option>
                                        <option value="3">30 0000 - 40 000 colones</option>
                                        <option value="4">50 000 colones o más</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tipo de turistas</label>
                                    <select class="form-control" name="editarTipoTuristasSitio">
                                        <option value="1">Nacional</option>
                                        <option value="2">Extranjero</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Latitud</label>
                                    <input type="text" class="form-control" id="editarLatitudSitio"
                                        name="editarLatitudSitio" placeholder="Ingrese la latitud del sitio"
                                        autocomplete="off">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Longitud</label>
                                    <input type="text" class="form-control" id="editarLongitudSitio"
                                        name="editarLongitudSitio" placeholder="Ingrese la longitud del sitio"
                                        autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Edad ideal para el sitio</label>
                                    <select class="form-control" name="editarEdadSitio">
                                        <option value="1">0 - 12 años</option>
                                        <option value="2">13 - 17 años</option>
                                        <option value="3">18 - 25 años</option>
                                        <option value="4">25 - 35 años</option>
                                        <option value="5">Más de 35 años</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Categoría</label>
                                    <select class="form-control" name="editarCategoriaSitio">
                                        <option value="1">Restaurante</option>
                                        <option value="2">Reserva Forestal</option>
                                        <option value="3">Parque Nacional</option>
                                        <option value="4">Termales</option>
                                        <option value="5">Hotel</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>URL imagen</label>
                                    <input type="text" class="form-control" id="editarUrlSitio" name="editarUrlSitio"
                                        placeholder="Ingrese la url de la imagen del sitio" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Descripción</label>
                                    <textarea type="text" class="form-control" id="editarDescripcionSitio"
                                        name="editarDescripcionSitio" placeholder="Ingrese la descripción del sitio"
                                        autocomplete="off" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <label hidden="hidden"></label>
                    <button type="button" class="btn btn-primary" onclick="editarSitio();">Guardar</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para borrar sitios -->
    <div class="modal fade" id="modalBorrarSitio" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="img/logo.png" width="75" height="75">
                    <h2 class="modal-title">Borrar Sitio</h2>
                    <button type="button" class="close" data-dismiss="modal">X</button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="form-group">
                                <h3>&emsp;¿Está seguro que desea borrar el sitio?</h3>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <label hidden="hidden"></label>
                    <button type="button" class="btn btn-primary" onclick="borrarSitio();">Aceptar</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

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