<?php
use Illuminate\Support\Facades\Route;


// Маршрут с ДВУМЯ ПАРАМЕТРАМИ

// регистрируем маршрут http://host/music/team/{параметр1}/album/{параметр2}
// пример: http://host/music/team/1/album/10
Route::get ('/music/team/{idTeam}/album/{idAlbum}', function ($idTeam, $idAlbum){
	echo "<h1>Страница: Вывод информации об альбоме</h1>";
	echo "<h3>Идентификатор группы: $idTeam</h3>";
	echo "<h3>Идентификатор альбома: $idAlbum</h3>";
});
// -------------------------------------

// регистрируем маршрут http://host/music/team/{параметр1}/album/{параметр2}/tracks
// пример: http://host/music/team/4/album/3/tracks
Route::get ('/music/team/{idTeam}/album/{idAlbum}/tracks', function ($idTeam, $idAlbum){
	echo "<h1>Страница: Вывод треков альбома</h1>";
	echo "<h3>Идентификатор группы: $idTeam</h3>";
	echo "<h3>Идентификатор альбома: $idAlbum</h3>";
});
// -------------------------------------

/*
	Get-параметр не изменяет маршрут
	пример:
	
	http://host/music/team/1/album/10?view=list
	
	http://host/music/team/4/album/3/tracks?view=table&image=yes
	
*/