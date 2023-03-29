@extends("layouts")

@section("content")
	<h1>Список Треков</h1>

	@if(count($tracks))	

		@foreach ($tracks as $item)
			
			id: {{ $item->id_track }}<br />
			Трек: <a href="/music/track/{{ $item->id_track }}">{{ $item->name }}</a><br />
			Примечание: {{ $item->note }}<br />
			<p><hr />

		@endforeach

	@else
		<h3>Нет данных (</h3>
	@endif	
	
@endsection	