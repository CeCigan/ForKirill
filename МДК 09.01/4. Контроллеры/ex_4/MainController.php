<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MainController extends Controller
{

	// ПЕРЕДАЧА В КОНТРОЛЛЕР ТРЕХ ПАРАМЕТРОВ
	
	// обработчик маршрута http://host/music/team/{параметр1}/album/{параметр2}/track/{параметр3}
	public function acTrack ($par1, $par2, $par3) {
		echo "<h1>Страница: Вывод информации о треке</h1>";
		echo "<h3>Идентификатор группы: $par1</h3>";
		echo "<h3>Идентификатор альбома: $par2</h3>";
		echo "<h3>Идентификатор трека: $par3</h3>";
	}		
	
}