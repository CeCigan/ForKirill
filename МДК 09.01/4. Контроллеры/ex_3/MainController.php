<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MainController extends Controller
{
	// ПЕРЕДАЧА В КОНТРОЛЛЕР НЕСКОЛЬКИХ ПАРАМЕТРОВ

	// обработчик маршрута http://host/music/{парметр1}/album/{параметр2}
	public function acAlbum ($par1, $par2) {
		echo "<h1>Страница: Вывод информации об альбоме</h1>";
		echo "<h3>Идентификатор группы: $par1</h3>";
		echo "<h3>Идентификатор альбома: $par2</h3>";
	}	
	
	// обработчик маршрута http://host/music/team/{параметр1}/album/{параметр2}/tracks
	public function acTracks ($par1, $par2) {
		echo "<h1>Страница: Вывод треков альбома</h1>";
		echo "<h3>Идентификатор группы: $par1</h3>";
		echo "<h3>Идентификатор альбома: $par2</h3>";
	}		
	
}