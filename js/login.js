let nameInput, passwordInput;

$(document).ready(function () {
    nameInput = document.getElementById("name");
    passwordInput = document.getElementById("password");
});

function login(){
    let user ={
        "name" : nameInput.value,
        "password" : passwordInput.value
    };
    $.ajax({
        url: "api/login.php",
        data: user,
        type: "POST",
        contentType: "application/json;charset=utf-8",
        dataType: "json",
        success: function (result) {
            location.href = "gestionarNoticias.php"
        },
        error: function (errorMessage) {
            cancel();
            alert("Los datos están incorectos!");
        }
    });
}

function cancel(){
    nameInput.value = "";
    passwordInput.value = "";
}