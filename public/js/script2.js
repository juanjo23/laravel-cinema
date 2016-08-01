$(document).ready(function(){
  carga_generos();
});

function carga_generos(){
  var tableDatos = $('#tableDatos');
  var route = '/generos';

  tableDatos.empty();
  $.get(route, function(response){
    $(response).each(function(key, value){
      tableDatos.append("<tr><td>"+value.genre+"</td> <td><button value="+value.id+" class='btn btn-primary btn-edit'  data-toggle='modal' data-target='#myModal'>Editar</button> <button value="+value.id+" class='btn btn-danger'>Eliminar</button> </td> </tr>");
    });
  });
}
$(document).on('click', '.btn-edit', function(){
  var route = 'genero/' + $(this).val() + '/edit';
  $.get(route, function(response){
    $('#genre').val(response.genre);
    $('#id').val(response.id);
  });
});

$(document).on('click', '#actualizar', function(){
  var value = $('#id').val();
  var dato = $('#genre').val();

  var route = 'genero/' + value;
  var token = $('#token').val();

  $.ajax({
    url: route,
    headers: {'X-CSRF-TOKEN': token},
    type: 'PUT',
    dataType: 'json',
    data: {genre: dato},
    success: function(){
      carga_generos();
      $("#myModal").modal('toggle');
      $("#msj-success").fadeIn();
    }
  });

});
