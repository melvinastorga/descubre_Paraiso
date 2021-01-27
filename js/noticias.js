function agregarNoticia(){
    
    toastr.success('Noticia agregada correctamente');
    $('#agregarTitulo').val("");
    $('#agregarFechaPublicacion').val("");
    $('#agregarContenido').val("");
    $("#modalAgregarNoticia").modal('hide');
    
}

function abrirModalEditarNoticia() {
    $("#modalEditarNoticia").modal('show');
    $('#agregarTitulo').val("La Casona de Cachí: 50 años de historia");
    $('#agregarFechaPublicacion').val("20/09/2020");
    $('#agregarContenido').val("La Casona de Cachí ha sido parte de la historia de Cartago por más de 50 años");
}

function editarNoticia() {

    toastr.success('Noticia editada correctamente');

    $('#agregarTitulo').val("");
    $('#agregarFechaPublicacion').val("");
    $('#agregarContenido').val("");
    $("#modalEditarNoticia").modal('hide');
}

function abrirModalBorrarNoticia() {
    $("#modalBorrarNoticia").modal('show');
}

function eliminarNoticia() {
    toastr.success('Noticia eliminada correctamente');
    $("#modalBorrarNoticia").modal('hide');
}