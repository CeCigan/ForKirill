@extends("layouts")

@section("content")

	<h1>Трек: {{ $track->name }}</h1>
	
	@if(isset($album))	
		<h3>Альбом: {{ $album->name }} (год выпуска: {{ $album->date }})</h3>
	@else
		<h3>Нет данных об альбоме (</h3>
	@endif


	@if(isset($team))	
		<h3>Группа: {{ $team->name }}</h3>
	@else
		<h3>Нет данных о группе (</h3>
	@endif	
	
@endsection	