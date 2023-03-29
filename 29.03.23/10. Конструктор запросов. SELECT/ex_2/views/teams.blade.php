@extends("layouts")

@section("content")
	<h1>Список Групп</h1>

	@if(count($teams))	

		@foreach ($teams as $item)
			
			id: {{ $item->id_team }}<br />
			<a href="/music/team/{{ $item->id_team }}">Группа: {{ $item->name }}</a><br />
			Алиас: {{ $item->alias }}<br />
			Страна: {{ $item->country }}<br />
			Год основания: {{ $item->date }}<br />
			Стиль: {{ $item->style }}<br />
			<p><hr />

		@endforeach

	@else
		<h3>Нет данных (</h3>
	@endif	
	
@endsection	