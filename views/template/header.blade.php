<!DOCTYPE html>
<html>
<head>
	<title>Lorem Ipsum</title>
	<link rel="stylesheet" href="css/style.css">
	<meta charset="UTF-8">
</head>
<body>
	<div class="layout">
		<div class="header">
			<div class="logo"><a href="#">foolious</a></div>
			<div class="menu">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Browse Themes</a></li>
					<li><a href="#">Support</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Team</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
		</div>

		<div class="content">
			<div class="posts">

	<div style="float: right">

		@if (Auth::check())
			Привет, {{ Auth::user()->email }} <a href="/logout">Logout</a>
		@else
			{{	Form::open(['url' => 'login']) }}
				{{	Form::text('email', null, ['placeholder' => 'E-mail',]) }}
				<br>
				{{	Form::password('password', ['placeholder' => 'Пароль']) }}
				<br>
				{{	Form::submit('Sign In') }}
			{{	Form::close() }}
		@endif
	</div>