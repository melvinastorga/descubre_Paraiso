let nameInput, passwordInput;

$(document).ready(function () {
   nameInput = document.getElementById("name");
   passwordInput = document.getElementById("password");
});

function login(){
    let adminUser ={
        'name' : nameInput.value,
        'password' : passwordInput.value
    };
    $.ajax({
        url: "api/logSession.php",
        data: adminUser,
        type: "POST",
        success: function (result) {
        	if(result){
            location.href = "gestionarNoticias.php"
            }else{
            	cancel();
            	alert("Los datos están incorectos!");
            }
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