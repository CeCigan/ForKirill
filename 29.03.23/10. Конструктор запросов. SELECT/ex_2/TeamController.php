<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
	// обработчик маршрута http://host/music/teams/
	public function acTeams() {
		// извлекаем массив данных о группе
		$teams = DB::table("team")->get();
		
		// объект Collection
		// dump($teams);
		
		// передаем массив в представление
		return view("teams")->with(["teams" => $teams]);
	}	

	// обработчик маршрута http://host/music/team/{id}
	public function acTeam($id) {
		// извлекаем данные о группе по первичному ключу
		// метод first
		$team = DB::table("team")->where("id_team", "=", $id)->first();
		
		// объект StdClass
		// обращаемся как к объекту
		// dump($team->name);
		
		// передаем объект в представление
		return view("team")->with(["team" => $team]);
	}

}