<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MainController extends Controller
{
	// обработчик маршрута http://host/music/team/{параметр}
	public function acTeam ($id) {
		// получили id группы
		// по имеющемуся id можно извлечь из базы различную информацию
		
		// например название группы, топовый альбом, исполнителей топ-альбома
		// формируем массив		
		$team["name"] = "Deep Purple";
		$team["album"] = "Deep Purple in Rock";
		$team["composition"] = ["Иэн Гиллан", "Ричи Блэкмор", "Роджер Гловер", "Джон Лорд Иэн Пэйс"];
		
		// убрать комментарий для эксперимента
		// $team ["composition"] = [];		
		
		// передаем в представление массив
		return view("page")->with(["team" => $team]);
	}	
}