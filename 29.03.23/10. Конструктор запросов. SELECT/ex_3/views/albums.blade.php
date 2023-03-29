@extends("layouts")

@section("content")
	<h1>Список Альбомов</h1>

	@if(count($albums))	

		@foreach ($albums as $item)
			
			id: {{ $item->id_album }}<br />
			<a href="/music/album/{{ $item->id_album }}">Альбом: {{ $item->name }}</a><br />
			Алиас: {{ $item->alias }}<br />
			Страна: {{ $item->country }}<br />
			Контент: {{ $item->content }}<br />
			Год выпуска: {{ $item->date }}<br />
			Примечание: {{ $item->note }}<br />
			<p><hr />

		@endforeach

	@else
		<h3>Нет данных (</h3>
	@endif	
	
@endsection	