@extends("layouts")

@section("content")

	@if(isset($album)) 
	
		<h1>{{ $album->name }}</h1>
	
		@if(isset($track))

			id: {{ $track->id_track }}<br />
			Трек: {{ $track->name }}<br />
			Примечание: {{ $track->note }}<br />

		@else
		
			<h3>К сожалению трека с таким идентификатором в альбоме {{ $album->name }} не найдено :(</h3>	

		@endif


	@else
		<h3>Нет данных об альбоме с запрашиваемым идентификатором :(</h3>
	@endif	
	
@endsection	