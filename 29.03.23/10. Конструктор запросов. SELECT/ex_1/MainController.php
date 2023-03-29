<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
	// обработчик маршрута http://host/music/teams/get
	public function acTeamsGet() {
		// метод get - извлекаем коллекцию данных о группах
		$teams = DB::table("team")->get();
		
		// где $teams:
		// объект Collection (коллекция), 
		// в которой каждый результат — экземпляр объекта StdClass		
		dump($teams);
		
		// к коллекции можно обратиться как к элементам массива
		dump($teams[0]);
		
		// dump($teams[1]);
		
		// каждый элемент коллекции - объект, обращаемся к объекту:
		dump($teams[0]->name);
		
		// dump($teams[1]->name);
		
	}

	// обработчик маршрута http://host/music/team/first/{id}
	public function acTeamFirst($id) {
		// метод first - извлекаем  объект c данными о группе
		// нет условия выборки, first вернет первый объект
		$team = DB::table("team")->first();
		
		// first вернул объект StdClass		
		dump($team);
		
		// обращаемся как к свойству объекта
		dump($team->name);	

		// есть условие выборки, метод first вернет один объект 
		// согласно условия where - "id_team" = $id
		$team = DB::table("team")->where("id_team", "=", $id)->first();
		
		// объект StdClass		
		dump($team);
		
		// обращаемся как к свойству объекта
		dump($team->name);	
		
	}	

	// обработчик маршрута http://host/music/team/get/{id}
	public function acTeamGet($id) {
		// согласно услови where должен быть выбран один объект, но
		// так как метод get - то, вернется коллекция из одного объекта
		$team = DB::table("team")->where("id_team", "=", $id)->get();
		
		// коллекция
		dump($team);
		
		// объект StdClass	
		dump($team[0]);	
		
		// свойство объекта - name
		dump($team[0]->name);	
		
	}		

}


















