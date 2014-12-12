@extends('template.template')

@section('content')

	@if (Auth::check())
	
		{{	Form::open() }}
			{{	Form::text('title', null, ['placeholder' => 'Заголовок', 'autocomplete' => 'off']) }}
			<br>
			{{	Form::textarea('body', null, ['placeholder' => 'Заголовок', 'autocomplete' => 'off']) }}
			<br>
			{{	Form::submit('Create') }}
		{{	Form::close() }}

	@endif

	@if(isset($posts) && count($posts)>0)

		@foreach($posts as $post)

		<div class="post">
			<div class="title"><a href="/post/{{ $post->id }}">{{$post->title}}</a></div>

			<div class="meta">
				<span class="author">{{$post->author}}</span>
				<span class="time">January 10, 2013</span>
			</div>

			<div class="text">
		
				<img src="{{$post->preview}}" alt="">
				<p>{{$post->body}}</p><br>
				<h3></h3>

			</div> 
		</div>
		@endforeach

	@else
		<h2>Записей нет</h2>
	@endif

@stop