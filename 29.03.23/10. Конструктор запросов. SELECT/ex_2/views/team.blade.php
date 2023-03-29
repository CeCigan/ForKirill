@extends("layouts")

@section("content")
	<h1>Информация о группе</h1>

	@if(isset($team))

		id: {{ $team->id_team }}<br />
		Группа: {{ $team->name }}<br />
		Алиас: {{ $team->alias }}<br />
		Страна: {{ $team->country }}<br />
		Год основания: {{ $team->date }}<br />
		Стиль: {{ $team->style }}<br />
		<p><hr />

	@else
		<h3>Нет данных (</h3>
	@endif
	
@endsection	