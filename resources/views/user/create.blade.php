@extends('layouts.admin')
@section('content')
  @include ('alerts.request')

  {!!Form::open(['route'=>'user.store', 'method'=>'POST'])!!}
    @include('user.partials.form')

    {!!Form::submit('Registrar', ['class'=>'btn btn-primary' ]  )!!}
  {!!Form::close()!!}

@stop
