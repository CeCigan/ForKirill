<?php
use Illuminate\Support\Facades\Route;

// Маршрут с ТРЕМЯ ПАРАМЕТРАМИ

// регистрируем маршрут http://host/music/team/{параметр1}/album/{параметр2}/track/{параметр3}
// пример: http://host/music/team/3/album/7/track/15
// важны не имена а порядок
Route::get ('/music/team/{idTeam}/album/{idAlbum}/track/{idTrack}', function ($par3, $par1, $par2){
	echo "<h1>Страница: Вывод информации о треке</h1>";
	echo "<h3>Идентификатор группы: $par3</h3>";
	echo "<h3>Идентификатор альбома: $par1</h3>";
	echo "<h3>Идентификатор трека: $par2</h3>";
});
// -------------------------------------


/*
	Get-параметр не изменяет маршрут
	пример:
	
	http://host/music/team/13/album/6/track/1?parent=disable&image=yes
	
*/