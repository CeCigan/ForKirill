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

		@php
			$composition = $team['composition'] 
		@endphp	

		@if(count($composition))
			<ul>
				<li>{{ $composition[0] }}</li>
				<li>{{ $composition[1] }}</li>
				<li>{{ $composition[2] }}</li>
				<li>{{ $composition[3] }}</li>
			</ul>
		@else
			<p>Нет информации о составе</p>
		@endif		
	</body>
	
	<footer>
		<p>Подвал сайта</p>
	</footer>

</body>
</html>