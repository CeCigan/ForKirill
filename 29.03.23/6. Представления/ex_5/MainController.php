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
		// формируем данные		
		// $name - строка
		$name = "Deep Purple";
		// $album - массив из одного значения
		$album[] = "Deep Purple in Rock";
		// $composition - объект
		$composition = (object)["Иэн Гиллан", "Ричи Блэкмор", "Роджер Гловер", "Джон Лорд Иэн Пэйс"];
		
		//dump($composition);

		// в представление передаем смешанные данные
		return view("page")->with([
			"name" => $name,
			"album" => $album,
			"composition" => $composition
		]);
		
	}	
}