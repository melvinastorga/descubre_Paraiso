let nameInput, descriptionInput, successInput, errorInput;

$(document).ready(function () {
    nameInput = document.getElementById("name");
    descriptionInput = document.getElementById("description");
    successInput = document.getElementById("success");
    errorInput = document.getElementById("error");
    const urlParams = new URLSearchParams(window.location.search);
    load(urlParams.get('id'));
});


function save(){
    let category = {
        "name" : nameInput.value,
        "description" : descriptionInput.value
    };
    $.ajax({
        url: "api/modificar_categoria.php",
        data: category,
        type: "POST",
        success: function (result) {
            success()
            clean();
        },
        error: function (errorMessage) {
            error();
        }
    });
}

function load(id){
    alert(id);
}

function success(){
    errorInput.hidden = true;
    successInput.hidden = false;
}

function error(){
    successInput.hidden = true;
    errorInput.hidden = false;
}

function clean(){
    nameInput.value = "";
    descriptionInput.value = "";
}