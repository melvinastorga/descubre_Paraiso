function agregarSitio(){
    alert("Sitio agregado correctamente");
    $('#agregarNombreSitio').val("");
    $('#agregarDescripcionSitio').val("");
    $("#modalAgregarSitio").modal('hide');
}

function abrirModalEditarSitio() {
    $("#modalEditarSitio").modal('show');
}

function editarSitio() {
    alert("Sitio editado correctamente");
    $('#editarNombreSitio').val("");
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