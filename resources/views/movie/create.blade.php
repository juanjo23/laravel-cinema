@extends('layouts.admin')
	@section('content')
		@include('alerts.request')
		  	{!!Form::open(['route'=>'movie.store', 'method'=>'POST','files' => true])!!}
		  		@include('movie.partials.form')
				{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
			{!!Form::close()!!}
	@endsection
