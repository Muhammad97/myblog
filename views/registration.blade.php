@extends('template.template')

@section('content')


	{{	Form::open(['url' => 'register']) }}
		{{	Form::text('email', null, ['placeholder' => 'E-mail',]) }}
		<br>
		{{	Form::password('password', ['placeholder' => 'Пароль']) }}
		<br>
		{{	Form::password('repeat_password', ['placeholder' => 'Повторите пароль']) }}
		<br>
		{{	Form::submit('Register') }}
	{{	Form::close() }}

@stop