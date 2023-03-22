<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MainController extends Controller
{

	// ПЕРЕДАЧА В КОНТРОЛЛЕР ПАРАМЕТРА МАРШРУТА	
	
	// обработчик маршрута http://host/music/team/{параметр}
	public function acTeam ($par) {
		echo "<h1>Страница: Информация о группе</h1>";
		echo "<h2>Параметр маршрута: $par</h2>";
	}

	// обработчик маршрута http://host/music/team/{параметр}/albums
	public function acAlbums ($par) {
		echo "<h1>Страница: Альбомы</h1>";
		echo "<h2>Параметр маршрута: $par</h2>";
	}	
			
}