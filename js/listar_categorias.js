$(document).ready(function () {
    loadData();
});


function loadData() {
    $.ajax({
        url: "/api/listar_categorias.php",
        type: "GET",
        contentType: "application/json;charset=utf-8",
        dataType: "json",
        success: function (result) {
            let html = '';
            $.each(result, function (key, item) {
                html += getRow(item);
            });
            $('.tbody').html(html);

        },
        error: function (errorMessage) {
            alert(errorMessage.responseText);
        }
    });
}

function modify(id){
    alert("modi" + id);
}

function _delete(id){
    alert("eli" + id);
}

function getRow(categoria) {
    return '<tr>' +
            '<th scope="row">'+categoria.id+'</th>' +
            '<td>'+categoria.name+'</td>' +
            '<td>'+categoria.description+'</td>' +
            '<td>' +
             '<button type="button" class="btn btn-info" onclick="modify('+categoria.id+')">Modificar</button>' +
             '<button type="button" class="btn btn-danger"  onclick="_delete('+categoria.id+')">Eliminar</button>' +
            '</td>' +
           '</tr>';
}