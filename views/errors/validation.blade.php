@extends('template.template')

@section('content')

	@if (isset($errors))

		@foreach ($errors as $error)
			
			{{ $error[0] }} <br />

		@endforeach

	@else

	<h3>Ошибок нет</h3>

	@endif

	<a href="{{ URL::previous() }}">Back</a>
	
@stop