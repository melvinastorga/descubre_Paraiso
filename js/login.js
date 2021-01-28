let nameInput, passwordInput;

$(document).ready(function () {
    nameInput = document.getElementById("name");
    passwordInput = document.getElementById("password");
});

function login(){
    let name = nameInput.value;
    let password = passwordInput.value;
    if(name == "Expertos2021" && password == "redes")
        location.href = "gestionarNoticias.php"
    else{
        cancel();
        alert("Los datos están incorectos!!!!!!!!!");
    }
}

function cancel(){
    nameInput.value = "";
    passwordInput.value = "";
}