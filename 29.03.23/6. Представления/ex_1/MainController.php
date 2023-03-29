<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MainController extends Controller
{
	// обработчик маршрута http://host/music
	public function acMusic () {
		// получаем вывод представления
		return view("page");
	}
}