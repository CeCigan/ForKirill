@extends("layouts")

@section("content")

	@if(isset($team)) 
	
		<h1>{{ $team->name }}</h1>
	
		@if(isset($album))

			id: {{ $album->id_album }}<br />
			Альбом: {{ $album->name }}<br />
			Алиас: {{ $album->alias }}<br />
			Страна: {{ $album->country }}<br />
			Контент: {{ $album->content }}<br />
			Год выпуска: {{ $album->date }}<br />
			Примечание: {{ $album->note }}<br />

		@else
		
			<h3>К сожалению альбома с таким идентификатором у группы {{ $team->name }} не найдено :(</h3>	

		@endif


	@else
		<h3>Нет данных о группе с запрашиваемым идентификатором :(</h3>
	@endif	
	
@endsection	