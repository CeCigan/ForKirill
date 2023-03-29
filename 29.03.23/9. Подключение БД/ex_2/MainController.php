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
		$data_teams = DB::table("team")->get();

		dump($data_teams);


		$data_radio =  DB::connection("radio")->table("radio")->get();

		dump($data_radio);
	}	
}
