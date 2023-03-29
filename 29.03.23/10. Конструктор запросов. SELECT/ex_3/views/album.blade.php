@extends("layouts")

@section("content")

	<h1>{{ $album->name }}</h1>

	<h3>Группа: {{ $team->name }}</h3>

	id: {{ $album->id_team }}<br />
	Алиас: {{ $album->alias }}<br />
	Страна: {{ $album->country }}<br />
	Год выпуска: {{ $album->date }}<br />
	
@endsection	