@extends("layouts")

@section("content")
	
	<h1>{{ $album->name }} ({{ $team->name }})</h1>
	
	@if(count($tracks))	

		@foreach ($tracks as $item)
			
			id: {{ $item->id_track }}<br />
			Трек: {{ $item->name }}<br />
			Примечание: {{ $item->note }}<br />
			<p><hr />

		@endforeach

	@else
		<h3>Нет данных (</h3>
	@endif	
	
@endsection	