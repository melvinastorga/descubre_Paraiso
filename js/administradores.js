function agregarAdministrador(){
    
    toastr.success('Administrador agregado correctamente');
    $('#agregarNombre').val("");
    $('#agregarApellido').val("");
    $('#agregarUsuario').val("");
    $('#agregarContraseña').val("");
    $("#modalAgregarAdministrador").modal('hide');
    
}

function abrirModalEditarAdministrador() {
    $("#modalEditarAdministrador").modal('show');
    
}

function editarAdministrador() {

    toastr.success('Administrador editado correctamente');

    $('#editarNombre').val("");
    $('#editarApellido').val("");
    $('#editarUsuario').val("");
    $('#editarContraseña2').val("");
    $('#editarContraseña3').val("");
    $("#modalEditarAdministrador").modal('hide');
}

function abrirModalBorrarAdministrador() {
    $("#modalBorrarAdministrador").modal('show');
}

function eliminarAdministrador() {
    toastr.success('Administrador eliminado correctamente');
    $("#modalBorrarAdministrador").modal('hide');
}