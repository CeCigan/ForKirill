@extends("layouts")

@section("content")

	<h1>{{ $team->name }}</h1>
	
	@if(count($albums))	

		@foreach ($albums as $item)
			
			id: {{ $item->id_album }}<br />
			Альбом: {{ $item->name }}<br />
			Алиас: {{ $item->alias }}<br />
			Страна: {{ $item->country }}<br />
			Контент: {{ $item->content }}<br />
			Год основания: {{ $item->date }}<br />
			Примечание: {{ $item->note }}<br />
			<p><hr />

		@endforeach

	@else
		<h3>Нет данных (</h3>
	@endif	
	
@endsection	