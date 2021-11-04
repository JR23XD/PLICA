// Alerta antes de editar/eliminar algún registro
function check(b_id, f_name, tit, tex, typ, b_con, b_can, rev_bot,){
    event.preventDefault();
    Swal.fire({
      title: tit,
      text: tex,
      type: typ,
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: b_con,
      cancelButtonText: b_can,
      reverseButtons: rev_bot,
      icon:'warning',
    }).then((result) => {
      if (result.value) {
        checarBotonSubmit(b_id);
        document.getElementById(f_name).submit();
        
      }
    });
  }
  function checarBotonSubmit(id_btn) {
    document.getElementById(id_btn).val = "Espere un momento...";
    document.getElementById(id_btn).disabled = true;
    return true;
  };

  // Mostrar contraseña oculta
function mostrarPassword(input_id, button_id, icono) {
  var pass = document.getElementById(input_id);
  if(pass.type == "password"){
    pass.type = "text";
    $('.'+icono).removeClass('fa fa-eye-slash').addClass('fa fa-eye');
  } else {
    pass.type = "password";
    $('.'+icono).removeClass('fa fa-eye').addClass('fa fa-eye-slash');
  }
}
    // Fin (Mostrar contraseña oculta)
    //Select2
    $('.select2').select2({
      
      placeholder: "Seleccione . . .",
      closeOnSelect: false,
      width: 'resolve',
      language: {
        noResults: function() {
          return "No hay resultados";        
        },
        searching: function() {
          return "Buscando . . .";
        }
      }
    }); 
   //Fin Select2 



   $(function () {
    $('#datetimepicker7').datetimepicker();
    $('#datetimepicker8').datetimepicker({
        useCurrent: true
    });
    $("#datetimepicker7").on("change.datetimepicker", function (e) {
        $('#datetimepicker8').datetimepicker('minDate', e.date);
    });
    $("#datetimepicker8").on("change.datetimepicker", function (e) {
        $('#datetimepicker7').datetimepicker('maxDate', e.date);
    });
    });