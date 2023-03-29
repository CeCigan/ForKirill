<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Введение в Фреймворк Laravel</title>
</head>
<body>

	<header>
		<p>Шапка сайта</p>
	</header>

	<body>
		<h1>Группа: {{ $team["name"] }}</h1>
		<h2>Альбом: {{ $team["album"] }}</h2>
		<h2>Состав:</h2>
		
		<ul>
		@foreach($team["composition"] as $val)
			<li>{{ $val }}</li>
		@endforeach
		</ul>	
	</body>
	
	<footer>
		<p>Подвал сайта</p>
	</footer>

</body>
</html>