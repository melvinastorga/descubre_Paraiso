<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in - Descubre Paraíso</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <?php
        include("menu.html");
    ?>

    <p class="aligncenter">
        <img src="img/logo.png" width="180" height="180" />
    </p>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 login">
                <h3>Iniciar Sesión</h3>
                <div class="form">
                    <p>Usuario:</p> <input name="user" id="name" type="text" autocomplete="off">
                    <p>Contraseña:</p> <input name="password" id="password" type="password">
                </div>
                <div class="buttons">
                    <button class="btn btn-success" onclick="login()">Iniciar Sesión</button>
                    <button class="btn btn-warning" onclick="cancel()">&nbsp;&nbsp;Cancelar&nbsp;&nbsp;</button>
                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>



    <?php
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
    <script src="js/login.js"></script>
</body>

</html>