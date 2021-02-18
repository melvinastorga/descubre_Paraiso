<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administradores - Descubre Paraíso</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/listar_categorias.css">
</head>

<body>
<?php
    include("menu_administrador.html");
    
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: login.php");
    }
    ?>

    
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <img src="img/logo.png" width="180" height="180" />
            </div>
            <div class="col-lg-7">
                <h3>Administradores</h3>
            </div>
            <div class="col-lg-2">
                <div class="col-md-6">
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <button type="button" class="btn btn-primary px-4" data-toggle="modal"
                data-target="#modalAgregarAdministrador">Agregar</button>
        </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-10">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Gestionar</th>
                      </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr>
                            <td>Melvin</td>
                            <td>Astorga</td>
                            <td>melvin.astorga.24</td>
                            <td>
                                <a href="#" onclick="abrirModalEditarAdministrador();" class="btn btn-info">Modificar</a>
                                <a href="#" class="btn btn-danger" onclick="abrirModalBorrarAdministrador();">Eliminar</a>
                            </td>
                          </tr>
                          <tr>
                            <td>Melissa</td>
                            <td>Ramírez</td>
                            <td>melissa.remirez.02</td>
                            <td>
                                <a href="#" onclick="abrirModalEditarAdministrador();" class="btn btn-info">Modificar</a>
                                <a href="#" class="btn btn-danger" onclick="abrirModalBorrarAdministrador();">Eliminar</a>
                            </td>
                          </tr>
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

     <!-- Modal para agregar administradores -->
     <div class="modal fade" id="modalAgregarAdministrador" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="img/logo.png" width="75" height="75">
                    <h2 class="modal-title">Agregar Administrador</h2>
                    <button type="button" class="close" data-dismiss="modal">X</button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" name="agregarNombre" id="agregarNombre"
                                        placeholder="Ingrese el nombre del administrador" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Apellido</label>
                                    <input type="text" class="form-control" name="agregarApellido" id="agregarApellido"
                                        placeholder="Ingrese el apellido del administrador" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Usuario</label>
                                    <input type="text" class="form-control" name="agregarUsuario" id="agregarUsuario"
                                        placeholder="Ingrese el usuario del administrador" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Contraseña</label>
                                    <input type="password" class="form-control" name="agregarContraseña" id="agregarContraseña"
                                        placeholder="Ingrese la contraseña del administrador" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <label hidden="hidden"></label>
                    <button type="button" class="btn btn-primary" onclick="agregarAdministrador();">Agregar</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para editar administradores -->
    <div class="modal fade" id="modalEditarAdministrador" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="img/logo.png" width="75" height="75">
                    <h2 class="modal-title">Editar Administrador</h2>
                    <button type="button" class="close" data-dismiss="modal">X</button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" name="editarNombre"
                                        placeholder="Ingrese el nombre del administrador" autocomplete="off" value="Melvin">
                                </div>
                                <div class="form-group">
                                    <label>Apellido</label>
                                    <input type="text" class="form-control" name="editarApellido"
                                        placeholder="Ingrese el apellido del administrador" autocomplete="off" value="Astorga">
                                </div>
                                <div class="form-group">
                                    <label>Usuario</label>
                                    <input type="text" class="form-control" name="editarUsuario"
                                        placeholder="Ingrese el usuario del administrador" autocomplete="off" value="melvin.astorga.24">
                                </div>
                                <div class="form-group">
                                &emsp;<input class="form-check-input" type="checkbox" class="form-control" name="editarContraseña1" value="">
                                    <label class="form-check-label" for="flexCheckDefault" style="color:red" >
                                    ¿Cambiar contraseña?
                                    </label>
                                    <div class="form-group">
                                    <label>Contraseña Actual</label>
                                    <input type="password" class="form-control" name="editarContraseña2"
                                        placeholder="Ingrese la contraseña actual del administrador" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Contraseña Nueva</label>
                                    <input type="password" class="form-control" name="editarContraseña3"
                                        placeholder="Ingrese la contraseña nueva del administrador" autocomplete="off">
                                </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <label hidden="hidden"></label>
                    <button type="button" class="btn btn-primary" onclick="editarAdministrador();">Modificar</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalBorrarAdministrador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Eliminar Administrador
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¿ Desea eliminar este administrador ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" onclick="eliminarAdministrador();">Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
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
    <script src="js/administradores.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</body>

</html>