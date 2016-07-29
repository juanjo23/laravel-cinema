@extends('layouts.admin')

@include ('alerts.success')
@section('content')
  <table class="table">
    <thead>
      <tr><th>Nombre</th><th>Correo</th><th>Operaciones</th></tr>
    </thead>
    <tbody>
    @foreach($users as $user)
      <tr><td>{{$user->name}}</td><td>{{$user->email}}</td>
        <td>
        {!! link_to_route('user.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary'])  !!}
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  {!! $users->render() !!}
@stop
