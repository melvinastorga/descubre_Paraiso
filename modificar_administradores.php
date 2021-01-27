<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar administrador - Descubre Paraíso</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/crear_administrador.css">
</head>

<body>
<?php
    //$IPATH = $_SERVER["DOCUMENT_ROOT"]."/";
    include("menu_administrador.html");
    ?>

    <p class="alignleft">
        <img src="img/logo.png" width="180" height="180" />
    </p>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 admin">
                <h3>Modificar administrador</h3>
                <div class="form">
                    <label for="nombre">Nombre:</label> <br>
                    <input name="nombre" id="nombre" placeholder="Nombre" type="text" autocomplete="off" value="Melvin"><br>
                    <label for="apellido">Apellido:</label> <br>
                    <input name="apellido" id="apellido" placeholder="Apellido" type="text" autocomplete="off" value="Astorga"><br>
                    <label for="usuario">Usuario:</label> <br>
                    <input name="usuario" id="usuario" placeholder="Usuario" type="text" autocomplete="off" value="melvin.astorga.24"><br>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault" style="color:red" >
                      ¿Cambiar contraseña?
                    </label><br>
                    <label for="contrasena">Contraseña Actual:</label> <br>
                    <input name="contrasena" id="contrasena" type="password" placeholder="Contraseña actual" autocomplete="off" ><br>
                    <label for="contrasena">Contraseña Nueva:</label> <br>
                    <input name="contrasena" id="contrasena" type="password" placeholder="Contraseña nueva" autocomplete="off" >
                </div>
                <div class="buttons">
                    <button class="btn btn-success">Modificar</button>
                    <button class="btn btn-warning">&nbsp;&nbsp;Cancelar&nbsp;&nbsp;</button>
                </div>
                
            </div>
            <div class="col-lg-4"></div>
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