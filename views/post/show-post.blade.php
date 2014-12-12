@extends('template.template')

@section('content')

	<a href="/"><< Назад</a>

	<h2>{{$post->title}}</h2>

	<h3>{{$post->author}}</h3>

	<img src=">{{$post->preview}}" alt="">

	<p>{{$post->body}}</p>

@stop