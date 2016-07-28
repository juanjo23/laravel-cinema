@extends('layouts.admin')
@section('content')

  {!!Form::open()!!}
    <div class="form-group">
        {!!Form::label('Nombre:')!!}
        {!!Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'ingresa el nombre del usuario', ]  )!!}
    </div>
    <div class="form-group">

    </div>
    <div class="form-group">

    </div>
  {!!Form::close()!!}

  <form class="" action="" method="post">
    <div class="form-group">
      <label for="">Nombre:</label>
      <input type="text" name="name" value="" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Correo:</label>
      <input type="text" name="name" value="" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Contraseña:</label>
      <input type="password" name="name" value="" class="form-control">
    </div>
    <button class="btn btn-primary" type="submit" name="button">Enviar</button>
  </form>
@stop
