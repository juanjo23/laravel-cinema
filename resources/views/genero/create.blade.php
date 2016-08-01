@extends('layouts.admin')
	@section('content')
	@include('alerts.errors')


  {!!Form::open()!!}
		<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
			<strong>Genero Agregado correctamente</strong>
		</div>
		<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
		@include('genero.partials.form')
		{!! link_to('#', $title="Registrar", $attributes = ['id' => 'registro', 'class'=>'btn btn-primary'], $secure=null) !!}
  {!!Form::close()!!}

	@endsection

	@section('scripts')
		{!!Html::script('js/script.js')!!}
  @endsection
