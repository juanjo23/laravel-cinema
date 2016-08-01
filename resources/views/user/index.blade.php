@extends('layouts.admin')

@section('content')
@include ('alerts.success')
  <div class="users">
    @include ('user.partials.users')
  </div>
  {!! $users->render() !!}
@stop


@section('scripts')
	{!!Html::script('js/script3.js')!!}
@endsection
