$(document).ready(function () {
    loadData();
});


function loadData() {
    let category = {
        'type' : parseInt($('.form-control').val())
    };
    $.ajax({
        url: "api/get_categorias.php",
        data: category,
        type: "GET",
        contentType: "application/json;charset=utf-8",
        dataType: "json",
        success: function (result) {
            let categories = result;
            let html = '';
            $.each(categories, function (key, item) {
               html += getRow(item);
            });
            $('.tbody').html(html);
        },
        error: function (errorMessage) {
            alert(errorMessage.responseText);
        }
    });
}

function loadModal(id){
    let category = {
        'id' : id
    };
    $.ajax({
        url: "api/get_category.php",
        data: category,
        type: "GET",
        contentType: "application/json;charset=utf-8",
        dataType: "json",
        success: function (result) {
            fillModal(result);
        },
        error: function (errorMessage) {
            alert(errorMessage.responseText);
        }
    });
}

function fillModal(category){
    
    $('#nombreSitio').text(category['name']); 
    $('ubicacionSitio').text(category['location']); 
    $('precioSitio').text(category['price']); 
    $('categoriaSitio').text(category['type']); 
    $('edadSitio').text(category['age']); 
    $('descripcionSitio').text(category['description']); 
    
    
}

function getRow(category) {
    return '<tr>' +
            '<th scope="row">'+category['name']+'</th>' +
            '<td>'+category['type']+'</td>' +
            '<td>'+category['description']+'</td>' +
            '<td><button type="button" class="btn btn-primary" data-toggle="modal"' +
            'data-target="#modalSitioCategoria" onClick="loadModal('+category['id'] +')">' +
            'Ver mas</button></td>' +
           '</tr>';
}