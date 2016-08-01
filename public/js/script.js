$('#registro').click(function(){
  var dato = $('#genre').val();
  //var route = "http:/localhost:12321/genero";
  var route = "/genero";
  var token = $('#token').val();

  $.ajax({
    url: '/genero',
    headers: {'X-CSRF-TOKEN': token},
    type: 'POST',
    dataType: 'json',
    data: {genre:dato},
    success:function(response){
      $("#msj-success").fadeIn();
      $("#msj-success").text( response.message );
      $('#genre').val("");
    },
    error:function(response){
      $("#msj-error").fadeIn();
      $("#msj-error").text( response.responseJSON.genre[0] );
    }
  });
});
