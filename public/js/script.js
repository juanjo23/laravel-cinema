$('#registro').click(function(){
  var dato = $('#genre').val();
  //var route = "http:/localhost:12321/genero";
  var route = "/genero";
  var token = $('#token').val();

  console.log(route);
  $.ajax({
    url: '/genero',
    headers: {'X-CSRF-TOKEN': token},
    type: 'POST',
    dataType: 'json',
    data: {genre:dato},
    success:function(){
      $("#msj-success").fadeIn();
      $('#genre').val("");
    }
  });
});
