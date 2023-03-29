@extends("layouts")

@section("content")
	<h1>Группа: {{ $team["name"] }}</h1>
	<h2>Альбом: {{ $team["album"] }}</h2>
	<h2>Состав:</h2>
	
	@php $composition = $team["composition"] @endphp
	
	@if(count($composition))
		<ul>
		@foreach($composition as $val)
			<li>{{ $val }}</li>
		@endforeach
		</ul>
	@else
		<p>Нет данных о составе</p>
	@endif	
@endsection