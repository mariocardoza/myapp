function eliminar(url)
{
  swal({
      title: "Está seguro?",
      text: "No podrá recuperarlo una vez sea eliminado!",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: '#DD6B55',
      confirmButtonText: 'Si!',
      cancelButtonText: "No, Cancelar!",
      confirmButtonClass: "btn-danger",
      closeOnConfirm: false,
    },
    function() {
        window.location=url;
    });
}

function salir(url)
{
  swal({
      title: "Está seguro que desea cerrar sesion?",
      type: "info",
      showCancelButton: true,
      confirmButtonColor: '#DD6B55',
      confirmButtonText: 'Si!',
      cancelButtonText: "No, Cancelar!",
      confirmButtonClass: "btn-danger",
      closeOnConfirm: false,
    },
    function() {
        swal("Adios!");
        timer: 2000,
        window.location=url;
    });
}