<?php
use Illuminate\Support\Facades\Route;

// ТИПЫ ПАРАМЕТРОВ 

// регистрируем маршрут http://host/music/team/{параметр1}/album/{параметр2}/track/{параметр3}

// мы говорим роуту, что в маршруте должно быть три параметра 
// но не говорим какого ТИПА

// пример числовых параметров: 
// http://host/music/team/3/album/7/track/15

// пример смешанных параметров
// http://host/music/team/pink-floyd/album/wish-you-were-here/track/4

// типы параметров можно указать, но это выходит за рамки быстрого старта

Route::get ('/music/team/{team}/album/{album}/track/{track}', function ($team, $album, $track){
	echo "<h1>Страница: Вывод информации о треке</h1>";
	echo "<h3>Название (идентификатор) группы: $team</h3>";
	echo "<h3>Название (идентификатор) альбома: $album</h3>";
	echo "<h3>Идентификатор трека: $track</h3>";
});
// -------------------------------------