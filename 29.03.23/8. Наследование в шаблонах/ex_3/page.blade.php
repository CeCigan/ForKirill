@extends("layouts")

@section("content")		
	@if(isset($team))
		<h1>Группа: {{ $team->name }}</h1>
		<h2>Альбом: {{ $team->album }}</h2>
		<h2>Состав:</h2>
		@if(count($team->composition))
			<ul>
				@foreach($team->composition as $val)
					<li>{{ $val }}</li>
				@endforeach
			</ul>
		@else
			<p>Нет информации</p>
		@endif
	@else
		<h1>Что то пошло не так... :(</h1>
		<h2>Попробуйте зайти следующий раз</h2>
	@endif	
@endsection