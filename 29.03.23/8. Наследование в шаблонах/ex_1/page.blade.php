@extends("layout")

@section("content")
	<h1>Группа: {{ $team["name"] }}</h1>
	<h2>Альбом: {{ $team["album"] }}</h2>
	<h2>Состав:</h2>
	
	<ul>
	@foreach($team["composition"] as $val)
		<li>{{ $val }}</li>
	@endforeach
	</ul>	
@endsection	