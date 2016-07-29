@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  {{ Session::get('message') }}
</div>
@endif
