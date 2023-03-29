<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
# !!!
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
	// обработчик маршрута http://host/music/team
	public function acTeam () {
		// 
		$data = DB::table("team")->get();

		dd($data);

		dump($data);

		echo "The End";

	}	
}
