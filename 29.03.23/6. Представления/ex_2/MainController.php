<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MainController extends Controller
{
	// обработчик маршрута http://host/music/team/{параметр}
	public function acTeam ($id) {
		// получили id группы
		// по имеющемуся id можно извлечь из базы различную информацию
		
		// например название группы
		// создаем простую переменную
		$name = "Deep Purple";

		return view("page", ["name" => $name]);
	}
}