<?php
use Illuminate\Support\Facades\Route;


// Маршрут с ОДНИМ ПАРАМЕТРОМ

// регистрируем маршрут http://host/music/team/{параметр}
// пример: http://host/music/team/3
Route::get ('/music/team/{idTeam}', function ($idTeam){
	echo "<h1>Страница: Вывод информации о группе</h1>";
	echo "<h3>Идентификатор группы: $idTeam</h3>";
});
// -------------------------------------

// регистрируем маршрут http://host/music/team/{параметр}/albums
// пример: http://host/music/team/4/albums 
Route::get ('/music/team/{idTeam}/albums', function ($idTeam){
	echo "<h1>Страница: Вывод альбомов группы</h1>";
	echo "<h3>Идентификатор группы $idTeam</h3>";
});
// -------------------------------------

/*
	Get-параметр не изменяет маршрут
	пример:
	
	http://host/music/team/3?view=block
	
	http://host/music/team/4/albums?view=table&image=no
	
*/