@extends('layouts.admin')
@section('content')
  @include ('alerts.request')
  {!!Form::model($user, ['route'=>['user.update', $user->id], 'method'=>'PUT'])!!}
    @include('user.partials.form')
    {!!Form::submit('Actualizar', ['class'=>'btn btn-primary' ]  )!!}
  {!!Form::close()!!}

  {!!Form::open(['route'=>['user.destroy', $user->id], 'method'=>'DELETE'])!!}
    {!!Form::submit('Eliminar', ['class'=>'btn btn-danger' ]  )!!}
  {!!Form::close()!!}

@stop
