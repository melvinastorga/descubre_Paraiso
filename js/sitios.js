function agregarSitio(){
    alert("Sitio agregado correctamente");
    $('#agregarNombreSitio').val("");
    $('#agregarLatitudSitio').val("");
    $('#agregarLongitudSitio').val("");
    $('#agregarUrlSitio').val("");
    $('#agregarDescripcionSitio').val("");
    $("#modalAgregarSitio").modal('hide');
}

function abrirModalEditarSitio() {
    $("#modalEditarSitio").modal('show');
}

function editarSitio() {
    alert("Sitio editado correctamente");
    $('#editarNombreSitio').val("");
    $('#editarLatitudSitio').val("");
    $('#editarLongitudSitio').val("");
    $('#editarUrlSitio').val("");
    $('#editarDescripcionSitio').val("");
    $("#modalEditarSitio").modal('hide');
}

function abrirModalBorrarSitio() {
    $("#modalBorrarSitio").modal('show');
}

function borrarSitio() {
    alert("Sitio borrado correctamente");
    $("#modalBorrarSitio").modal('hide');
}