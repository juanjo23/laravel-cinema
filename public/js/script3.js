$(document).on('click', '.pagination a', function(e){
  e.preventDefault();
  var page = $(this).attr('href').split('page=')[1];
  var route = '/user';

  console.log(route);
  $.ajax({
    url:route,
    data: {page: page},
    type: 'GET',
    dataType: 'JSON',
    success: function(data){
      $('.users').slideUp(200, function(){
        $('.users').html(data);
        $('.users').slideDown();
      });
    },
    error: function(d){
    }
  });
});
