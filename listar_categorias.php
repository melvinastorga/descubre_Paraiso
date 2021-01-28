<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categorias - Descubre Paraíso</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/listar_categorias.css">
</head>

<body>
<?php
    //$IPATH = $_SERVER["DOCUMENT_ROOT"]."/";
    include("menu_administrador.html");
    ?>

    
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <img src="img/logo.png" width="180" height="180" />
            </div>
            <div class="col-lg-7">
                <h3>Categorias</h3>
            </div>
            <div class="col-lg-2">
                <div class="button-container">
                    <button type="button" class="btn btn-success agregar" data-toggle="modal"
                    data-target="#modalAgregarCategoria">Agregar</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-10">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Gestionar</th>
                      </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr>
                            <th scope="row">1</th>
                            <td>Naturaleza</td>
                            <td>Poder convivir con flora y fauna al aire libre</td>
                            <td>
                                <button type="button" class="btn btn-info" data-toggle="modal"
                                data-target="#modalEditarCategoria" onclick="modify(1)">Modificar</button>
                                <button type="button" class="btn btn-danger"  onclick="_delete(1)">Eliminar</button>
                            </td>
                          </tr>
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>


    <!-- Modal para agregar categorias -->
    <div class="modal fade" id="modalAgregarCategoria" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="img/logo.png" width="75" height="75">
                    <h2 class="modal-title">Agregar Categoría</h2>
                    <button type="button" class="close" data-dismiss="modal">X</button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" name="agregarNombreSitio"
                                        placeholder="Ingrese el nombre de la categoría" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Descripción</label>
                                    <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <label hidden="hidden"></label>
                    <button type="button" class="btn btn-primary" onclick="_save()">Guardar</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para editar categoria -->
    <div class="modal fade" id="modalEditarCategoria" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="img/logo.png" width="75" height="75">
                    <h2 class="modal-title">Editar Categoría</h2>
                    <button type="button" class="close" data-dismiss="modal">X</button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" name="agregarNombreSitio"
                                        placeholder="Ingrese el nombre de la categoría" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Descripción</label>
                                    <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <label hidden="hidden"></label>
                    <button type="button" class="btn btn-primary" onclick="update()">Guardar</button>
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
    <script src="js/listar_categorias.js"></script>

</body>

</html>